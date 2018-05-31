<?php

namespace Railken\LaraOre\Config\Attributes\Value\Exceptions;

use Railken\LaraOre\Config\Exceptions\ConfigAttributeException;

class ConfigValueNotDefinedException extends ConfigAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'value';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'CONFIG_VALUE_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}