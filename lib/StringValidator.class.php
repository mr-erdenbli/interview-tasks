<?php

class StringValidator {
    public string $str;

    public function __construct(string $str) {
        $this->str = $str;
    }

    public function isValidPhpCode(): bool {
        $bracesOnlyStr = preg_replace('/[^{}]/', '', $this->str);

        while (str_contains($bracesOnlyStr, '{}')) {
            $bracesOnlyStr = str_replace('{}', '', $bracesOnlyStr);
        }

        return $bracesOnlyStr === '';
    }
}