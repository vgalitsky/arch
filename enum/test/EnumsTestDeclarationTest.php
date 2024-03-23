<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use Cl\Enum\EnumJsonSerializableTrait;

use function PHPUnit\Framework\assertNull;

enum testEnum
{
    use EnumJsonSerializableTrait;
    case COMMON_CASE;
    case TEST_CASE_1;
    case TEST_CASE_2;
};
enum testEnumInt: int
{
    use EnumJsonSerializableTrait;
    case COMMON_CASE = 0;
    case TEST_CASE_INT_1 = 1;
    case TEST_CASE_INT_2 = 2;
};
enum testEnumString: string
{
    use EnumJsonSerializableTrait;
    case COMMON_CASE = 'common';
    case TEST_CASE_STRING_1 = 'string 1';
    case TEST_CASE_STRING_2 = 'string 2';
};

/**
 * @covers EnumsTestDeclaration
 */
class EnumsTestDeclarationTest extends TestCase
{
    //used to declare test enums
    public function testNull()
    {
        assertNull(null);
    }
}

