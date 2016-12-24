<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 24/12/2016
 * Time: 11:31
 */
namespace AppBundle\Service;
use Symfony\Component\Config\Definition\Exception\Exception;


class UrlShortener
{
    // Characters that will be used in order to create a short url (shortCode)
    protected static $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    // Let's verify the URL format thanks to this wonderful PHP function
    public function validateUrlFormat($url)
    {
        return filter_var($url, FILTER_VALIDATE_URL,
            FILTER_FLAG_HOST_REQUIRED);
    }

    // Check if it's a real one
    public function verifyUrlExists($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5); // 5s timeout
        curl_exec($ch);
        $response = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return (!empty($response) && $response != 404);
    }

    // Convert the ID referring to the URL in a shortCode
    public function createShortCode($id)
    {
        $shortCode = $this->convertIntToShortCode($id);
        return $shortCode;
    }

    protected function convertIntToShortCode($id)
    {
        $id = intval($id);
        if ($id < 1) {
            throw new Exception(
                "The ID is not a valid integer");
        }

        $length = strlen(self::$chars);
        if ($length < 10) {
            throw new Exception("Length of chars is too small");
        }

        $code = "";
        $chars = str_split(self::$chars);
        // This loop is reached when id > 61, when we have to increment the number of characters in the code
        while ($id > $length - 1) {
            $code = $chars[fmod($id, $length)] . $code;
            $id = floor($id / $length);
        }

        // Set the #id th element of $chars as the code
        $code = $chars[$id] . $code;

        return $code;
    }

}