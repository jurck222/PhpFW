<?php

declare(strict_types=1);

namespace Framework\Exceptions;

use Exception;

class ValidationException extends Exception
{

    public function __construct(public array $errors, int $code = 422)
    {
        parent::__construct(code: $code);
    }
}
