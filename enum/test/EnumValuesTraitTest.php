<?php
declare(strict_types=1);

use Cl\Enum\EnumValuesTrait;
use PHPUnit\Framework\TestCase;



/**
 * @covers Cl\Enum\EnumValuesTrait
 */
class EnumValuesTraitTest extends TestCase
{
    /**
     * @dataProvider enumDataProvider
     */
    #[DataProvider('enumDataProvider')]
    public function testValuesEnum($enumClass): void
    {
        // Arrange
        $enumValues = $enumClass::values();
        $caseValues = [];
        foreach ($enumClass::cases() as $case) {
            $caseValues[] = property_exists($case, 'value') ? $case->value : $case->name;
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
