<?php

namespace PhpSagas\MessageIdGenerator;

use PhpSagas\Contracts\MessageIdGeneratorInterface;
use Ramsey\Uuid\Uuid;

/**
 * Version 4 UUID generator.
 */
class UuidBasedMessageIdGenerator implements MessageIdGeneratorInterface
{
    /**
     * @return string
     */
    public function generateId(): string
    {
        return Uuid::uuid4()->toString();
    }
}
