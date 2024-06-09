<?php

namespace Michaeld555\Providers;

class FiscalProvider {
    
    public static function isWin(): bool
    {
        return stripos(PHP_OS, 'WIN') === 0;
    }

    public static function pythonPath()
    {

        $path = dirname(__FILE__);

        $path = str_replace("Providers", "Python", $path);

        $path = $path.'/python.exe';

        return $path;

    }

    public static function script_path($isSimple = true)
    {

        $scriptPath = dirname(__FILE__);

        $scriptPath = str_replace("Providers", "Scripts", $scriptPath);

        $scriptPath = ($isSimple) ? $scriptPath.'/simple.py' : $scriptPath.'/custom.py';

        return $scriptPath;

    }

    public static function simple_command($file, $output)
    {

        $isWin = self::isWin();

        $script = self::script_path();

        $command = ($isWin) ? self::simple_win_command($script, $file, $output) : self::simple_linux_command($script, $file, $output);

        return $command;

    }

    public static function simple_win_command($parser, $file, $output)
    {

        $pyPath = self::pythonPath();

        $command = escapeshellcmd("$pyPath $parser $file $output");

        return $command;

    }

    public static function simple_linux_command($parser, $file, $output)
    {

        $command = escapeshellcmd("python3 $parser $file $output");

        return $command;

    }

    public static function custom_command($file, $output, $logo)
    {

        $isWin = self::isWin();

        $script = self::script_path(false);

        $command = ($isWin) ? self::custom_win_command($script, $file, $output, $logo) : self::custom_linux_command($script, $file, $output, $logo);

        return $command;

    }

    public static function custom_win_command($parser, $file, $output, $logo)
    {

        $pyPath = self::pythonPath();

        $command = escapeshellcmd("$pyPath $parser $file $output $logo");

        return $command;

    }

    public static function custom_linux_command($parser, $file, $output, $logo)
    {

        $command = escapeshellcmd("python3 $parser $file $output $logo");

        return $command;

    }


    public static function execute_command($command)
    {

        $output = shell_exec($command);

        return $output;

    }


}
