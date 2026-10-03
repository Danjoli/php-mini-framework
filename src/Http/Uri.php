<?php

declare(strict_types=1);

namespace Mini\Http;

use Psr\Http\Message\UriInterface;

final class Uri implements UriInterface
{
    public function __construct(private string $scheme = '', private string $host = '', private ?int $port = null, private string $path = '', private string $query = '', private string $fragment = '', private string $userInfo = '') {}

    public static function fromString(string $uri): self
    {
        $parts = parse_url($uri);
        if ($parts === false) {
            throw new \InvalidArgumentException("Invalid URI: {$uri}");
        }
        $userInfo = $parts['user'] ?? '';
        if (isset($parts['pass'])) {
            $userInfo .= ':' . $parts['pass'];
        }
        return new self($parts['scheme'] ?? '', $parts['host'] ?? '', $parts['port'] ?? null, $parts['path'] ?? '', $parts['query'] ?? '', $parts['fragment'] ?? '', $userInfo);
    }

    public function getScheme(): string
    {
        return $this->scheme;
    }
    public function getAuthority(): string
    {
        $authority = $this->host;
        if ($this->userInfo !== '') {
            $authority = $this->userInfo . '@' . $authority;
        } if ($this->port !== null) {
            $authority .= ':' . $this->port;
        } return $authority;
    }
    public function getUserInfo(): string
    {
        return $this->userInfo;
    }
    public function getHost(): string
    {
        return $this->host;
    }
    public function getPort(): ?int
    {
        return $this->port;
    }
    public function getPath(): string
    {
        return $this->path;
    }
    public function getQuery(): string
    {
        return $this->query;
    }
    public function getFragment(): string
    {
        return $this->fragment;
    }
    public function withScheme(string $scheme): UriInterface
    {
        $clone = clone $this;
        $clone->scheme = strtolower($scheme);
        return $clone;
    }
    public function withUserInfo(string $user, ?string $password = null): UriInterface
    {
        $clone = clone $this;
        $clone->userInfo = $user . ($password !== null ? ':' . $password : '');
        return $clone;
    }
    public function withHost(string $host): UriInterface
    {
        $clone = clone $this;
        $clone->host = strtolower($host);
        return $clone;
    }
    public function withPort(?int $port): UriInterface
    {
        if ($port !== null && ($port < 1 || $port > 65535)) {
            throw new \InvalidArgumentException('Port must be between 1 and 65535.');
        } $clone = clone $this;
        $clone->port = $port;
        return $clone;
    }
    public function withPath(string $path): UriInterface
    {
        $clone = clone $this;
        $clone->path = $path;
        return $clone;
    }
    public function withQuery(string $query): UriInterface
    {
        $clone = clone $this;
        $clone->query = ltrim($query, '?');
        return $clone;
    }
    public function withFragment(string $fragment): UriInterface
    {
        $clone = clone $this;
        $clone->fragment = ltrim($fragment, '#');
        return $clone;
    }
    public function __toString(): string
    {
        $uri = $this->scheme !== '' ? $this->scheme . '://' : '';
        $uri .= $this->getAuthority();
        $uri .= $this->path;
        if ($this->query !== '') {
            $uri .= '?' . $this->query;
        } if ($this->fragment !== '') {
            $uri .= '#' . $this->fragment;
        } return $uri;
    }
}
