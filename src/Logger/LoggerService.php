<?php

namespace Core\src\Logger;

class LoggerService
{
    const string STORAGE_LOGS = './../Storage/Logs/';

    public static function error(string $message): void
    {
        $file = self::STORAGE_LOGS . 'errors.txt';
        $log = '[' . date('Y-m-d H:i:s') . '] [ERROR] ' . $message . PHP_EOL;
        file_put_contents($file, $log, FILE_APPEND | LOCK_EX);
    }

    public static function info(string $message): void
    {
        $file = self::STORAGE_LOGS . 'info.txt';
        $log = '[' . date('Y-m-d H:i:s') . '] [INFO] ' . $message . PHP_EOL;
        file_put_contents($file, $log, FILE_APPEND | LOCK_EX);
    }
}