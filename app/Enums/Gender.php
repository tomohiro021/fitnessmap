<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

/**
 * @method static static Unknown()
 * @method static static Male()
 * @method static static Female()
 */
final class Gender extends Enum implements LocalizedEnum
{
    const Unknown =   0;
    const Male =   1;
    const Female = 2;
}
