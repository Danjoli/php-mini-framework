<?php

declare(strict_types=1);

namespace Mini\Exception;

final class MethodNotAllowedHttpException extends HttpException
{
    /** @param list<string> $allowed */
    public function __construct(array $allowed)
    {
        parent::__construct(405, 'Method not allowed.', ['Allow' => implode(', ', $allowed)]);
    }
}
