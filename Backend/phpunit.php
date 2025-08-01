<?php

/**
 * @package   Catalogo Simples
 * @author    Nícola Serafim <nicola@seraf.im>
 * @copyright 2025 Nícola Serafim
 * @license   MIT License
 * @link      http://www.pnhs.com.br
 */

declare(strict_types=1);

ini_set('display_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');

set_include_path(
    implode(
        PATH_SEPARATOR,
        [
            __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Controllers',
            __DIR__ . DIRECTORY_SEPARATOR . 'tests' . DIRECTORY_SEPARATOR . 'Controllers',
            get_include_path(),
        ]
    )
);

spl_autoload_register(
    function ($className) {
        $filename = str_replace(['\\', '_'], DIRECTORY_SEPARATOR, $className) . '.php';
        foreach (explode(PATH_SEPARATOR, get_include_path()) as $path) {
            $path = $path . DIRECTORY_SEPARATOR . $filename;
            if (is_file($path)) {
                include $path;
                return true;
            }
        }
        return false;
    }
);
