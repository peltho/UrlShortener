<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity ShortUrl
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ShortUrlRepository")
 */
class ShortUrl
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $realUrl;

    /**
     * @var string
     */
    private $shortUrl;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set realUrl
     *
     * @param string $realUrl
     *
     * @return ShortUrl
     */
    public function setRealUrl($realUrl)
    {
        $this->realUrl = $realUrl;

        return $this;
    }

    /**
     * Get realUrl
     *
     * @return string
     */
    public function getRealUrl()
    {
        return $this->realUrl;
    }

    /**
     * Set shortUrl
     *
     * @param string $shortUrl
     *
     * @return ShortUrl
     */
    public function setShortUrl($shortUrl)
    {
        $this->shortUrl = $shortUrl;

        return $this;
    }

    /**
     * Get shortUrl
     *
     * @return string
     */
    public function getShortUrl()
    {
        return $this->shortUrl;
    }
}

