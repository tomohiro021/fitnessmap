<?php

use App\Enums\Gender;
use App\Enums\Status;
use App\Enums\Address;

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

return [
    Address::class => [
        Address::Hokkaido => '北海道',
        Address::Aomori => '青森県',
        Address::Iwate => '岩手県',
        Address::Miyagi => '宮城県',
        Address::Akita => '秋田県',
        Address::Yamagata => '山形県',
        Address::Fukushima => '福島県',
        Address::Ibaraki => '茨城県',
        Address::Tochigi => '栃木県',
        Address::Gumma => '群馬県',
        Address::Saitama => '埼玉県',
        Address::Chiba => '千葉県',
        Address::Tokyo => '東京都',
        Address::Kanagawa => '神奈川県',
        Address::Niigata => '新潟県',
        Address::Toyama => '富山県',
        Address::Ishikawa => '石川県',
        Address::Yamanashi => '山梨県',
        Address::Nagano => '長野県',
        Address::Gifu => '岐阜県',
        Address::Shizuoka => '静岡県',
        Address::Aichi => '愛知県',
        Address::Mie => '三重県',
        Address::Shiga => '滋賀県',
        Address::Kyoto => '京都府',
        Address::Osaka => '大阪府',
        Address::Hyogo => '兵庫県',
        Address::Nara => '奈良県',
        Address::Wakayama => '和歌山県',
        Address::Tottori => '鳥取県',
        Address::Shimane => '島根県',
        Address::Okayama => '岡山県',
        Address::Hiroshima => '広島県',
        Address::Yamaguchi => '山口県',
        Address::Tokushima => '徳島県',
        Address::Kagawa => '香川県',
        Address::Ehime => '愛媛県',
        Address::Kochi => '高知県',
        Address::Fukuoka => '福岡県',
        Address::Saga => '佐賀県',
        Address::Nagasaki => '長崎県',
        Address::Kumamoto => '熊本県',
        Address::Oita => '大分県',
        Address::Miyazaki => '宮崎県',
        Address::Kagoshima => '鹿児島県',
        Address::Okinawa => '沖縄県',
    ],
];
