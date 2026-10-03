<?php

declare(strict_types=1);

namespace Mini\Http;

use Psr\Http\Message\StreamInterface;
use RuntimeException;

final class Stream implements StreamInterface
{
    /** @var resource|null */
    private $resource;

    /** @param resource $resource */
    public function __construct($resource)
    {
        if (!is_resource($resource)) {
            throw new RuntimeException('Stream requires a resource.');
        }
        $this->resource = $resource;
    }

    public static function fromString(string $content = ''): self
    {
        $resource = fopen('php://temp', 'r+');
        if ($resource === false) {
            throw new RuntimeException('Unable to create temporary stream.');
        }
        fwrite($resource, $content);
        rewind($resource);

        return new self($resource);
    }

    public function __toString(): string
    {
        if ($this->resource === null) {
            return '';
        }
        try {
            $this->rewind();
            $resource = $this->resource;
            return $resource === null ? '' : (stream_get_contents($resource) ?: '');
        } catch (RuntimeException) {
            return '';
        }
    }

    public function close(): void { if ($this->resource !== null) { fclose($this->resource); $this->resource = null; } }
    public function detach() { $resource = $this->resource; $this->resource = null; return $resource; }
    public function getSize(): ?int { if ($this->resource === null) { return null; } $stats = fstat($this->resource); return $stats === false ? null : $stats['size']; }
    public function tell(): int { $position = $this->resource === null ? false : ftell($this->resource); if ($position === false) { throw new RuntimeException('Unable to determine stream position.'); } return $position; }
    public function eof(): bool { return $this->resource === null || feof($this->resource); }
    public function isSeekable(): bool { return $this->resource !== null && (bool) stream_get_meta_data($this->resource)['seekable']; }
    public function seek(int $offset, int $whence = SEEK_SET): void { if ($this->resource === null || fseek($this->resource, $offset, $whence) !== 0) { throw new RuntimeException('Unable to seek stream.'); } }
    public function rewind(): void { $this->seek(0); }
    public function isWritable(): bool { if ($this->resource === null) { return false; } return (bool) preg_match('/[waxc+]/', stream_get_meta_data($this->resource)['mode']); }
    public function write(string $string): int { if (!$this->isWritable() || $this->resource === null) { throw new RuntimeException('Stream is not writable.'); } $written = fwrite($this->resource, $string); if ($written === false) { throw new RuntimeException('Unable to write stream.'); } return $written; }
    public function isReadable(): bool { if ($this->resource === null) { return false; } return (bool) preg_match('/[r+]/', stream_get_meta_data($this->resource)['mode']); }
    public function read(int $length): string { if ($length < 1) { return ''; } if (!$this->isReadable() || $this->resource === null) { throw new RuntimeException('Stream is not readable.'); } $data = fread($this->resource, $length); if ($data === false) { throw new RuntimeException('Unable to read stream.'); } return $data; }
    public function getContents(): string { if ($this->resource === null) { throw new RuntimeException('Stream is detached.'); } $data = stream_get_contents($this->resource); if ($data === false) { throw new RuntimeException('Unable to read stream.'); } return $data; }
    public function getMetadata(?string $key = null): mixed { if ($this->resource === null) { return $key === null ? [] : null; } $metadata = stream_get_meta_data($this->resource); return $key === null ? $metadata : ($metadata[$key] ?? null); }
}
