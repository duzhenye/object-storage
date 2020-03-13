<?php

/*
 * Object Storage
 * https://github.com/duzhenye/object-storage
 * Copyright (c) Duzhenye
 * Free to use under the MIT license.
 */

namespace Duzhenye\ObjectStorage;

/**
 * Exception that will be thrown when trying to modify an object that is used by other process.
 */
class ObjectLockedException extends \Duzhenye\ObjectStorage\ErrorException
{
    
}
