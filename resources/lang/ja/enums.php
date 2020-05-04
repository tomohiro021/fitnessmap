<?php

use App\Enums\Gender;
use App\Enums\Status;

return [
    Gender::class => [
        Gender::Unknown => '未指定',
        Gender::Male => '男性',
        Gender::Female => '女性',
    ],
];

return [
    Status::class => [
        Status::Private => '非公開',
        Status::Public => '公開',
    ],
];
