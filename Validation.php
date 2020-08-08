<?php

namespace Mashcom\Zimbabwean;
/**
 * A simple regex library to validate Zimbabwean data
 * Class Validation
 * @package Mashcom\Zimbabwean
 * @author Blessing Mashoko <mashokoblessing@gmail.com>
 * @version 0.1.0
 */
class Validation
{

    /**
     * The core validation function
     * @param $input The input to be validated
     * @param bool $required True if input is required, False if input is not required
     * @param $pattern
     * @return bool|false
     */
    private static function validator($input, $required = true, $pattern)
    {
        if (empty($input) && $required = false) return true;
        if (preg_match($pattern, $input)) {
            return true;
        }
        return false;
    }

    /**
     * Check if input is a valid Econet number
     * @param $input
     * @param bool $required
     * @return bool|false
     */
    public static function econet($input, $required = true)
    {
        return self::validator($input, $required, "/^(((\+)*2637)|07|7)(7|8)[0-9]{7}$/");
    }

    /**
     * Check if input is valid Telecel number
     * @param $input
     * @param bool $required
     * @return bool|false
     */
    public static function telecel($input, $required = true)
    {
        return self::validator($input, $required, "/^(((\+)*2637)|07|7)1[0-9]{7}$/");
    }

    /**
     * Check if input is valid Netone number
     * @param $input
     * @param bool $required
     * @return bool|false
     */
    public static function netone($input, $required = true)
    {
        return self::validator($input, $required, "/^(((\+)*2637)|07|7|)3[0-9]{7}$/");
    }

    /**
     * Check if input is a valid National ID Number
     * @param $input
     * @param $required
     * @return bool|false
     */
    public static function nationalIdNumber($input, $required=true)
    {
        $input = trim($input);
        $prepared_input = preg_replace("^\\s^", "", $input);
        return self::validator($prepared_input, $required, "[^\\d{2}-?\\d{6,7}-?[A-Za-z]{1}-?\\d{2}$]");
    }

    /**
     * Check if input is valid vehicle number plate
     * @param $input
     * @param bool $required
     * @return bool|false
     */
    public static function numberPlate($input, $required = true)
    {
        return self::validator($input, $required, "/^[A-Z]{3}(-|[[:blank:]])[0-9]{3}$/gm");
    }

    /**
     * Check if input is a valid drivers' licence number
     * @param $input
     * @param bool $required
     * @return bool|false
     */
    public static function driversLicence($input, $required = true)
    {
        return self::validator($input, $required, "/^\b\d{5}[a-zA-Z]{2}\b/");
    }

    /**
     * Check if input is a valid passport number
     * @param $input
     * @param bool $required
     * @return bool|false
     */
    public static function passportNumber($input, $required = true)
    {
        return self::validator($input, $required, "/^[A-Z]{2}[0-9]{6}$/");
    }

    /**
     * Check if input is a valid Social Security Number
     * @param $input
     * @param bool $required
     * @return bool|false
     */
    public static function socialSecurityNumber($input, $required = true)
    {
        return self::validator($input, $required, "/^\b([0-9]){7}([a-zA-Z]){1}\b/");
    }
}