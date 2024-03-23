<?php
declare(strict_types=1);

use Cl\Enum\EnumValuesTrait;
use PHPUnit\Framework\TestCase;



/**
 * @covers Cl\Enum\EnumValuesTrait
 */
class EnumJsonTraitTest extends TestCase
{
    /**
     * @dataProvider enumDataProvider
     */
    #[DataProvider('enumDataProvider')]
    public function testNamesEnum($enumClass): void
    {
        
        $json = $enumClass::jsonSerialize();
        $jsonFromArray = json_encode($enumClass::array());

        // Act & Assert
        $this->assertIsString($json);
        $this->assertIsString($jsonFromArray);
        $this->assertSame($json, $jsonFromArray);
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
