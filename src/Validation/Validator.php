<?php

declare(strict_types=1);

namespace Mini\Validation;

final class Validator
{
    /** @param array<string, mixed> $data
     *  @param array<string, list<string>|string> $rules
     *  @return array<string, mixed>
     */
    public function validate(array $data, array $rules): array
    {
        $errors = [];
        foreach ($rules as $field => $fieldRules) {
            $value = $data[$field] ?? null;
            foreach (is_array($fieldRules) ? $fieldRules : explode('|', $fieldRules) as $rule) {
                $parts = explode(':', $rule, 2);
                $name = $parts[0];
                $parameter = $parts[1] ?? null;
                $message = $this->check($name, $parameter, $field, $value, $data);
                if ($message !== null) { $errors[$field][] = $message; }
            }
        }
        if ($errors !== []) { throw new ValidationException($errors); }
        return array_intersect_key($data, $rules);
    }

    /** @param array<string, mixed> $data */
    private function check(string $rule, ?string $parameter, string $field, mixed $value, array $data): ?string
    {
        $empty = $value === null || $value === '';
        if ($rule !== 'required' && $empty) { return null; }
        $valid = match ($rule) {
            'required' => !$empty,
            'string' => is_string($value),
            'integer' => is_int($value) || (is_string($value) && filter_var($value, FILTER_VALIDATE_INT) !== false),
            'boolean' => is_bool($value) || in_array($value, [0, 1, '0', '1'], true),
            'email' => is_string($value) && filter_var($value, FILTER_VALIDATE_EMAIL) !== false,
            'min' => is_string($value) && mb_strlen($value) >= (int) $parameter,
            'max' => is_string($value) && mb_strlen($value) <= (int) $parameter,
            'in' => in_array($value, explode(',', (string) $parameter), true),
            'confirmed' => $value === ($data[$field.'_confirmation'] ?? null),
            default => throw new \InvalidArgumentException("Unknown validation rule: {$rule}"),
        };
        return $valid ? null : "The {$field} field failed the {$rule} rule.";
    }
}
