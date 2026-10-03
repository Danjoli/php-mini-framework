<?php

declare(strict_types=1);

namespace Mini\Http;

use Psr\Http\Message\ResponseInterface;

final class ResponseEmitter
{
    public function emit(ResponseInterface $response): void
    {
        if (headers_sent()) {
            return;
        }
        http_response_code($response->getStatusCode());
        foreach ($response->getHeaders() as $name => $values) {
            foreach ($values as $index => $value) {
                header($name . ': ' . $value, $index === 0);
            }
        }
        echo $response->getBody();
    }
}
