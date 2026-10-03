<?php

declare(strict_types=1);

namespace Mini\Exception;

final class NotFoundHttpException extends HttpException
{
    public function __construct(string $message = 'Resource not found.')
    {
        parent::__construct(404, $message);
    }
}
