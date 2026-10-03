<?php

declare(strict_types=1);

namespace Mini\Validation;

use Mini\Exception\HttpException;

final class ValidationException extends HttpException
{
    /** @param array<string, list<string>> $errors */
    public function __construct(public readonly array $errors)
    {
        parent::__construct(422, 'The submitted data is invalid.');
    }
}
