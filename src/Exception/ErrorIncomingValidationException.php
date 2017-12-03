<?php

namespace SSitdikov\ATOL\Exception;

use SSitdikov\ATOL\Code\ErrorCode;
use Throwable;

class ErrorIncomingValidationException extends \Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct(
            'Ошибка валидации JSON. Необходимо повторить запрос с новым уникальным значением <external_id>, ' .
            'указав корректные данные.' . ($message ? ' ' . $message : ''),
            $code,
            $previous
        );
    }
}
