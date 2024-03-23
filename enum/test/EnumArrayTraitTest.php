<?php
declare(strict_types=1);

use Cl\Enum\EnumValuesTrait;
use PHPUnit\Framework\TestCase;



/**
 * @covers Cl\Enum\EnumValuesTrait
 */
class EnumArrayTraitTest extends TestCase
{
    /**
     * @dataProvider enumDataProvider
     */
    #[DataProvider('enumDataProvider')]
    public function testNamesEnum($enumClass): void
    {
        
        $enumArray = $enumClass::array();
        $cases = [];
        foreach ($enumClass::cases() as $case) {
            $cases[$case->name] = property_exists($case, 'value') ? $case->value : $case->name;
        }

        // Act & Assert
        $this->assertIsArray($enumArray);
        $this->assertCount(count(array_unique($enumArray)), $cases);
        $this->assertSame($cases, $enumArray);
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
