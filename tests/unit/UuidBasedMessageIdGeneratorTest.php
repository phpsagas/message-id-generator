<?php

namespace PhpSagas\MessageIdGenerator\Tests;

use PhpSagas\MessageIdGenerator\UuidBasedMessageIdGenerator;
use PHPUnit\Framework\TestCase;

class UuidBasedMessageIdGeneratorTest extends TestCase
{
    public function testGeneratedIdIsValidUuid4(): void
    {
        $uuidRegex = '/^[0-9a-fA-F]{8}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{12}$/';

        $generator = new UuidBasedMessageIdGenerator();
        $id = $generator->generateId();

        $isUuid = preg_match($uuidRegex, $id);
        self::assertEquals(1, $isUuid);
    }
}
