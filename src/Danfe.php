<?php

namespace Michaeld555;

require __DIR__ . '/../vendor/autoload.php';

use Illuminate\Support\Str;
use Michaeld555\Providers\FiscalProvider;

class Danfe extends FiscalProvider {

    /**
     * Convert the xml file to pdf fiscal danfe and save in the output path
     *
     * @param string $file Path of the xml file
     * @param string $output Path of the output fiscal danfe file
     */
    public static function simple(?string $file, ?string $output)
    {

        $command = self::simple_command($file, $output);

        $result = self::execute_command($command);

        //print($result); // for log test only

    }

    /**
     * Convert the xml file to pdf fiscal danfe with custom logo and save in the output path
     *
     * @param string $file Path of the xml file
     * @param string $encoding Path of the output fiscal danfe file
     * @param string $logo Path of the custom logo for fiscal danfe file
     */
    public static function custom(?string $file, ?string $output, ?string $logo)
    {

        $command = self::custom_command($file, $output, $logo);

        $result = self::execute_command($command);

        //print($result); // for log test only

    }

}