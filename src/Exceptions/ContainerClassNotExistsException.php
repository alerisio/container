<?php

namespace Aleris\Container\Exceptions;

use Psr\Container\NotFoundExceptionInterface;

class ContainerClassNotExistsException extends \RuntimeException implements NotFoundExceptionInterface
{

}

