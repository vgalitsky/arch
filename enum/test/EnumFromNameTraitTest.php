<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;



/**
 * @covers Cl\Enum\EnumValuesTrait
 */
class EnumFromNameTraitTest extends TestCase
{
    /**
     * @dataProvider enumDataProvider
     */
    #[DataProvider('enumDataProvider')]
    public function testFromNameEnum($enumClass): void
    {
        $caseName = 'COMMON_CASE';
        $case = $enumClass::fromName($caseName);
        $this->assertSame($caseName, $case->name);
    }

    public static function enumDataProvider(): array
    {
        return [
            'enum' => [testEnum::class],
            'typed int enum' => [testEnumInt::class],
            'typed string enum' => [testEnumString::class],
        ];
    }
}
