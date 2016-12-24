<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ShortUrl;
use AppBundle\Form\ShortUrlType;
use Doctrine\ORM\EntityNotFoundException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * Nothing done here.
     * Just displaying the form
     */
    public function indexAction()
    {
        $typedUrl = new ShortUrl();
        $form = $this->createForm(ShortUrlType::class, $typedUrl);

        return $this->render('default/index.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/shorten", name="shorten")
     * Here is the logic of the shortening stuff
     */
    public function shortenAction(Request $request)
    {
        $typedUrl = new ShortUrl();
        $form = $this->createForm(ShortUrlType::class, $typedUrl);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            // Get submitted data (the long URL)
            $url = $form->getData()->getRealUrl();

            $em = $this->getDoctrine()->getManager();

            $urlService = $this->get('urlshortener');

            // Do some basic checks
            if($urlService->validateUrlFormat($url) == false) {
                throw new Exception(
                    "URL does not have a valid format.");
            }
            if(!$urlService->verifyUrlExists($url)) {
                throw new Exception(
                    "URL does not appear to exist.");
            }

            // Save the typed URL to the DB
            $em->persist($typedUrl);
            $em->flush();

            // Then, create a short code based on its ID
            $code = $urlService->createShortCode($typedUrl->getId());

            $actualUrl = "http://$_SERVER[HTTP_HOST]/";
            // Choose the prefix you want (it could be smth like http://natae.co.uk/...)
            // And append it the shortCode
            $shortenedUrl = $actualUrl.$code;

            // Store it in the DB and it's done.
            $typedUrl->setShortUrl($shortenedUrl);
            $em->persist($typedUrl);
            $em->flush();

            return $this->redirectToRoute('homepage', array(
                'shortenedUrl' => $shortenedUrl,
                'url'          => $url
            ));
        }
    }

    /**
     * @Route("/expand/{url}", name="expand", requirements={"url"=".+"})
     * Here we fetch the real url from the DB
     */
    public function expandAction($url)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:ShortUrl');

        $shortUrl = $repository->findOneBy(array('shortUrl' => $url));
        if($shortUrl == null)
            throw new EntityNotFoundException("There is no URL linked to ".$url);

        $longUrl = $shortUrl->getRealUrl();
        header('Location: '.$longUrl);
        exit;
    }
}
