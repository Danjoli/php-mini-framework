<?php

declare(strict_types=1);

namespace Mini\Routing;

final class RouteMatch
{
    /** @param array<string, string> $parameters */
    public function __construct(public readonly Route $route, public readonly array $parameters) {}
}
