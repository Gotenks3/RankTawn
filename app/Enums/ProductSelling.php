<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ProductSelling extends Enum
{
    const Sell = 0;
    const Stop = 1;

     /**
     * Get the description for an enum value
     *
     * @param $value
     * @return string
     */
    public static function getDescription($value): string
    {
        switch ($value){
            case self::Sell:
                return '販売中';
                brake;
            case self::Stop:
                return '停止中';
                brake;
            default:
                return self::getKey($value);
        }
    }
}
