<?php

namespace Railken\LaraOre\Config\Attributes\Visibility\Exceptions;

use Railken\LaraOre\Config\Exceptions\ConfigAttributeException;

class ConfigVisibilityNotValidException extends ConfigAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'visibility';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'CONFIG_VISIBILITY_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}