<?php
declare(strict_types=1);

use Cl\Enum\EnumValuesTrait;
use PHPUnit\Framework\TestCase;



/**
 * @covers Cl\Enum\EnumValuesTrait
 */
class EnumNamesTraitTest extends TestCase
{
    /**
     * @dataProvider enumDataProvider
     */
    #[DataProvider('enumDataProvider')]
    public function testNamesEnum($enumClass): void
    {
        // Arrange
        $enumValues = $enumClass::names();
        $caseValues = [];
        foreach ($enumClass::cases() as $case) {
            $caseValues[] = $case->name;
        }

        // Act & Assert
        $this->assertIsArray($enumValues);
        $this->assertCount(count(array_unique($enumValues)), $caseValues);
        $this->assertSame($enumValues, $caseValues);
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
