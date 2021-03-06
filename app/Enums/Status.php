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
    const Editting = 0;
    const Applying = 1;
    const Approved = 2;
}
