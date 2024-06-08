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

        $isWin = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';

        $py = __DIR__.'/python/win/python.exe';

        $converter = __DIR__.'/generator.py';

        $file = $file;

        $output = $output;

        if ($isWin) {

            $command = escapeshellcmd("$py $converter $file $output");

        } else {

            $command = escapeshellcmd("python3 $converter $file $output");

        }

        $output = shell_exec($command);

        print($output);

    }


}