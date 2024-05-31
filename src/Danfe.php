<?php

namespace Michaeld555\SecureShell;

class Danfe {

    /**
     * Convert the xml file to pdf danfe and save in the output path
     *
     * @param string $file Path of the xml file
     * @param string $encoding Path of the output danfe file
     */
    public static function create(?string $file, ?string $output)
    {

        $py = __DIR__.'/generator.py';

        $file = $file;

        $output = $output;

        $command = escapeshellcmd("python $py $file $output");

        $output = shell_exec($command);

    }


}