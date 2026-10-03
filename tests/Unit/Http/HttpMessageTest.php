<?php

declare(strict_types=1);

namespace Tests\Unit\Http;

use Mini\Http\Response;
use Mini\Http\ServerRequest;
use Mini\Http\Stream;
use Mini\Http\Uri;
use PHPUnit\Framework\TestCase;

final class HttpMessageTest extends TestCase
{
    public function testJsonResponseIsImmutable(): void
    {
        $response = Response::json(['ok' => true]);
        $modified = $response->withStatus(201)->withHeader('X-Test', 'yes');
        self::assertSame(200, $response->getStatusCode());
        self::assertSame(201, $modified->getStatusCode());
        self::assertSame('{"ok":true}', (string) $modified->getBody());
        self::assertSame('application/json; charset=utf-8', $modified->getHeaderLine('Content-Type'));
    }
    public function testRequestCarriesUriQueryAndAttributes(): void
    {
        $request = new ServerRequest('GET', Uri::fromString('https://example.test/tasks?done=1'));
        $modified = $request->withQueryParams(['done' => '1'])->withAttribute('id', 42);
        self::assertSame('/tasks?done=1', $modified->getRequestTarget());
        self::assertSame('1', $modified->getQueryParams()['done']);
        self::assertSame(42, $modified->getAttribute('id'));
    }
    public function testStreamCanBeReadAndWritten(): void
    {
        $stream = Stream::fromString('Mini');
        $stream->seek(0, SEEK_END);
        $stream->write(' Framework');
        self::assertSame('Mini Framework', (string) $stream);
    }
    public function testUriMutationsDoNotChangeOriginal(): void
    {
        $uri = Uri::fromString('https://example.test/api');
        $changed = $uri->withPath('/tasks')->withQuery('page=2');
        self::assertSame('/api', $uri->getPath());
        self::assertSame('https://example.test/tasks?page=2', (string) $changed);
    }
}
