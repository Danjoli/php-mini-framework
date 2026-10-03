<?php

declare(strict_types=1);

namespace Mini\Http;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;

final class ServerRequest implements ServerRequestInterface
{
    use MessageTrait;
    private string $requestTarget = '';
    /** @var array<string, mixed> */
    private array $attributes = [];
    private mixed $parsedBody = null;
    /** @var array<string, mixed> */
    private array $queryParams = [];
    /** @var array<string, mixed> */
    private array $cookieParams = [];
    /** @var array<string, mixed> */
    private array $uploadedFiles = [];
    /** @param array<string, string|list<string>> $headers
     *  @param array<string, mixed> $serverParams
     */
    public function __construct(private string $method, private UriInterface $uri, array $headers = [], ?StreamInterface $body = null, private array $serverParams = []) { $this->initializeMessage($headers, $body); }
    public static function fromGlobals(): self { $method = $_SERVER['REQUEST_METHOD'] ?? 'GET'; $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http'; $host = $_SERVER['HTTP_HOST'] ?? 'localhost'; $target = $_SERVER['REQUEST_URI'] ?? '/'; $headers = function_exists('getallheaders') ? getallheaders() : []; $request = new self($method, Uri::fromString($scheme.'://'.$host.$target), $headers, Stream::fromString(file_get_contents('php://input') ?: ''), $_SERVER); return $request->withQueryParams($_GET)->withCookieParams($_COOKIE)->withUploadedFiles($_FILES); }
    public function getRequestTarget(): string { return $this->requestTarget !== '' ? $this->requestTarget : ($this->uri->getPath().($this->uri->getQuery() !== '' ? '?'.$this->uri->getQuery() : '')); }
    public function withRequestTarget(string $requestTarget): self { $clone = clone $this; $clone->requestTarget = $requestTarget; return $clone; }
    public function getMethod(): string { return $this->method; }
    public function withMethod(string $method): self { $clone = clone $this; $clone->method = strtoupper($method); return $clone; }
    public function getUri(): UriInterface { return $this->uri; }
    public function withUri(UriInterface $uri, bool $preserveHost = false): self { $clone = clone $this; $clone->uri = $uri; if (!$preserveHost || !$this->hasHeader('Host')) { $clone = $clone->withHeader('Host', $uri->getHost()); } return $clone; }
    /** @return array<string, mixed> */
    public function getServerParams(): array { return $this->serverParams; }
    /** @return array<string, mixed> */
    public function getCookieParams(): array { return $this->cookieParams; }
    /** @param array<string, mixed> $cookies */
    public function withCookieParams(array $cookies): self { $clone = clone $this; $clone->cookieParams = $cookies; return $clone; }
    /** @return array<string, mixed> */
    public function getQueryParams(): array { return $this->queryParams; }
    /** @param array<string, mixed> $query */
    public function withQueryParams(array $query): self { $clone = clone $this; $clone->queryParams = $query; return $clone; }
    /** @return array<string, mixed> */
    public function getUploadedFiles(): array { return $this->uploadedFiles; }
    /** @param array<string, mixed> $uploadedFiles */
    public function withUploadedFiles(array $uploadedFiles): self { $clone = clone $this; $clone->uploadedFiles = $uploadedFiles; return $clone; }
    /** @return object|array<string, mixed>|null */
    public function getParsedBody(): object|array|null { return $this->parsedBody; }
    /** @param object|array<string, mixed>|null $data */
    public function withParsedBody($data): self { if ($data !== null && !is_array($data) && !is_object($data)) { throw new \InvalidArgumentException('Parsed body must be an array, object or null.'); } $clone = clone $this; $clone->parsedBody = $data; return $clone; }
    /** @return array<string, mixed> */
    public function getAttributes(): array { return $this->attributes; }
    public function getAttribute(string $name, mixed $default = null): mixed { return $this->attributes[$name] ?? $default; }
    public function withAttribute(string $name, mixed $value): self { $clone = clone $this; $clone->attributes[$name] = $value; return $clone; }
    public function withoutAttribute(string $name): self { $clone = clone $this; unset($clone->attributes[$name]); return $clone; }
}
