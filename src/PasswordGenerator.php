<?php

namespace Kosipov\Ttteeesst;

class PasswordGenerator
{
    public const NUMBERS = "number";
    public const SYMBOLS = "symbol";
    public const LETTER = "letter";

    public function generate(string $rule, int $length): string
    {
        $letter = "qa";
        if ($rule === self::NUMBERS) {
            return 1234;
        }

        is_numeric('1111');

        if ($rule === self::SYMBOLS) {
            return "@#$^@";
        }

        if ($rule === self::LETTER) {
            return "ashjdkashdjksahdkjas";
        }

        return "gen_password";
    }
}