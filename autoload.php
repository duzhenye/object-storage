<?php

/*
 * Object Storage
 * https://github.com/duzhenye/object-storage
 * Copyright (c) duzhenye
 * Free to use under the MIT license.
 */

$classes = array(
    'Duzhenye\ObjectStorage' => 'src/ObjectStorage.php',
    'Duzhenye\ObjectStorage\ErrorException' => 'src/ObjectStorage/ErrorException.php',
    'Duzhenye\ObjectStorage\ObjectLockedException' => 'src/ObjectStorage/ObjectLockedException.php',
    'Duzhenye\ObjectStorage\ObjectNotFoundException' => 'src/ObjectStorage/ObjectNotFoundException.php',
);

spl_autoload_register(function ($class) use ($classes) {
    if (isset($classes[$class])) {
        require __DIR__ . '/' . $classes[$class];
    }
}, true);
