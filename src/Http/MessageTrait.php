<?php

declare(strict_types=1);

namespace Mini\Http;

use Psr\Http\Message\StreamInterface;

trait MessageTrait
{
    private string $protocolVersion = '1.1';
    /** @var array<string, array{name: string, values: list<string>}> */
    private array $headers = [];
    private StreamInterface $body;

    public function getProtocolVersion(): string { return $this->protocolVersion; }
    public function withProtocolVersion(string $version): static { $clone = clone $this; $clone->protocolVersion = $version; return $clone; }
    public function getHeaders(): array { $headers = []; foreach ($this->headers as $header) { $headers[$header['name']] = $header['values']; } return $headers; }
    public function hasHeader(string $name): bool { return isset($this->headers[strtolower($name)]); }
    public function getHeader(string $name): array { return $this->headers[strtolower($name)]['values'] ?? []; }
    public function getHeaderLine(string $name): string { return implode(', ', $this->getHeader($name)); }
    public function withHeader(string $name, $value): static { $clone = clone $this; $clone->headers[strtolower($name)] = ['name' => $name, 'values' => $this->normalizeHeader($value)]; return $clone; }
    public function withAddedHeader(string $name, $value): static { $clone = clone $this; $key = strtolower($name); $values = $this->normalizeHeader($value); $clone->headers[$key] = ['name' => $clone->headers[$key]['name'] ?? $name, 'values' => [...($clone->headers[$key]['values'] ?? []), ...$values]]; return $clone; }
    public function withoutHeader(string $name): static { $clone = clone $this; unset($clone->headers[strtolower($name)]); return $clone; }
    public function getBody(): StreamInterface { return $this->body; }
    public function withBody(StreamInterface $body): static { $clone = clone $this; $clone->body = $body; return $clone; }
    /** @return list<string> */
    private function normalizeHeader(mixed $value): array { $values = is_array($value) ? $value : [$value]; return array_map(static fn (mixed $item): string => (string) $item, array_values($values)); }
    /** @param array<string, string|list<string>> $headers */
    private function initializeMessage(array $headers, ?StreamInterface $body): void { $this->body = $body ?? Stream::fromString(); foreach ($headers as $name => $value) { $this->headers[strtolower($name)] = ['name' => $name, 'values' => $this->normalizeHeader($value)]; } }
}
