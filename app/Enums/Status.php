<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

/**
 * @method static static Private()
 * @method static static Public()
 */
final class Status extends Enum implements LocalizedEnum
{
    const Private = 0;
    const Public = 1;
}
