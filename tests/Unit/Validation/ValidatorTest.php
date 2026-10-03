<?php

declare(strict_types=1);

namespace Tests\Unit\Validation;

use Mini\Validation\ValidationException;
use Mini\Validation\Validator;
use PHPUnit\Framework\TestCase;

final class ValidatorTest extends TestCase
{
    public function testItReturnsOnlyValidatedData(): void
    {
        $data = (new Validator())->validate(['title' => 'Task', 'ignored' => true], ['title' => 'required|string|min:3']);
        self::assertSame(['title' => 'Task'], $data);
    }
    public function testItCollectsValidationErrors(): void
    {
        try {
            (new Validator())->validate(['email' => 'invalid'], ['title' => 'required', 'email' => 'email']);
            self::fail('Expected validation failure.');
        } catch (ValidationException $exception) {
            self::assertArrayHasKey('title', $exception->errors);
            self::assertArrayHasKey('email', $exception->errors);
        }
    }
}
