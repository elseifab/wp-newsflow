<?php
/**
 * Legacy Autoloader
 * Simple autoloader, so we don't need Composer just for this.
 */

spl_autoload_register(function ($class) {

    if (0 !== strpos($class, 'Newsflow\\WP\\', 0)) {
        return false;
    }

    static $loaded = array();

    if (isset($loaded[$class])) {
        return $loaded[$class];
    }

    $path = __DIR__;
    $extension = '.php';

    $_class = str_replace('Newsflow\\WP', '', $class);
    $_class = str_replace('_', '-', $_class);
    $_class = str_replace('\\', DIRECTORY_SEPARATOR, $_class);

    return $loaded[$class] = (bool)require $path . $_class . $extension;
});
