<?php

declare(strict_types=1);

namespace Mini\Http;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

final class Response implements ResponseInterface
{
    use MessageTrait;
    private const REASONS = [200 => 'OK', 201 => 'Created', 204 => 'No Content', 400 => 'Bad Request', 404 => 'Not Found', 405 => 'Method Not Allowed', 422 => 'Unprocessable Content', 500 => 'Internal Server Error'];
    /** @param array<string, string|list<string>> $headers */
    public function __construct(private int $statusCode = 200, array $headers = [], ?StreamInterface $body = null, private string $reasonPhrase = '') { $this->initializeMessage($headers, $body); }
    /** @param array<string, string|list<string>> $headers */
    public static function json(mixed $data, int $status = 200, array $headers = []): self { $json = json_encode($data, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); return new self($status, ['Content-Type' => 'application/json; charset=utf-8', ...$headers], Stream::fromString($json)); }
    public static function html(string $html, int $status = 200): self { return new self($status, ['Content-Type' => 'text/html; charset=utf-8'], Stream::fromString($html)); }
    public function getStatusCode(): int { return $this->statusCode; }
    public function withStatus(int $code, string $reasonPhrase = ''): ResponseInterface { if ($code < 100 || $code > 599) { throw new \InvalidArgumentException('Invalid HTTP status code.'); } $clone = clone $this; $clone->statusCode = $code; $clone->reasonPhrase = $reasonPhrase; return $clone; }
    public function getReasonPhrase(): string { return $this->reasonPhrase !== '' ? $this->reasonPhrase : (self::REASONS[$this->statusCode] ?? ''); }
}
