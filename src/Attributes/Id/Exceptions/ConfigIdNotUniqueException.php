<?php

namespace Railken\LaraOre\Config\Attributes\Id\Exceptions;

use Railken\LaraOre\Config\Exceptions\ConfigAttributeException;

class ConfigIdNotUniqueException extends ConfigAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'id';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'CONFIG_ID_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}
