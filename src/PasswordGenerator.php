<?php

namespace Kosipov\Ttteeesst;

class PasswordGenerator
{
    public const NUMBERS = "number";
    public const SYMBOLS = "symbol";
    public const LETTER = "letter";

    public const MAX_LENGTH_PASSWORD = 128;

    public function generate(int $length, bool $number = false, bool $letter = true, bool $symbol = false): string
    {
        if ($length > self::MAX_LENGTH_PASSWORD) {
            throw new \Exception("Неверная длина пароля");
        }


        /** Здесь надо описать те if в которых генерируется пароль */

        return "gen_password";
    }
}