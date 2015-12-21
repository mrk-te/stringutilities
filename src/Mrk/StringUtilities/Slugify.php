<?php
/**
 * Converts a string in a URL compatible slug
 *
 * @author Marc Teinturier <m@m-te.fr>
 * @version 0.1
 */

namespace Mrk\StringUtilities;

class Slugify
{
    /**
     * Converts the input string in a URL compatible slug with the given separator
     *
     * @param string $string
     * @param string $separator
     * @return string
     */
    public static function convert($string, $separator = "-", $lowercase = false)
    {
        $string = StringToAscii::convert(trim($string));
        $string = preg_replace('/([^a-zA-Z0-9]|-)+/', $separator, $string);
        $string = preg_replace('/'.$separator.'{2,}/', $separator, $string);
        $string = preg_replace('/^'.$separator.'/', "", $string);
        $string = preg_replace('/'.$separator.'$/', "", $string);

        if($lowercase) {
            $string = strtolower($string);
        }

        return $string;
    }

    public static function convertLC($string, $separator = "-")
    {
        return self::convert($string, $separator, true);
    }
}