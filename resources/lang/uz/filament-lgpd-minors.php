<?php

return [
    'assurances' => [
        'label' => 'Yosh tekshiruvi',
        'plural_label' => 'Yosh tekshiruvlari',
    ],

    'guardians' => [
        'label' => 'Vasiy bilan bog\'lanish',
        'plural_label' => 'Vasiylar bilan bog\'lanishlar',
    ],

    'suspensions' => [
        'label' => 'To\'xtatish',
        'plural_label' => 'To\'xtatishlar',
    ],

    'fields' => [
        'subject' => 'Hisob',
        'band' => 'Yosh guruhi',
        'method' => 'Usul',
        'reliable' => 'Ishonchli',
        'not_reliable' => 'Ishonchsiz',
        'provider' => 'Provayder',
        'assured_at' => 'Tekshirilgan sana',
        'expires_at' => 'Amal qiladi',
        'never' => 'Muddatsiz',
        'minor' => 'Voyaga yetmagan',
        'guardian' => 'Vasiy',
        'relationship' => 'Qarindoshlik',
        'verified' => 'Vasiy tasdiqlangan',
        'status' => 'Holat',
        'verified_at' => 'Tasdiqlangan sana',
        'created_at' => 'Yaratilgan',
        'reason' => 'Sabab',
        'suspended_at' => 'To\'xtatilgan sana',
        'appealed_at' => 'Shikoyat sanasi',
        'appeal' => 'Shikoyat',
        'decision' => 'Qaror',
    ],

    'filters' => [
        'valid' => 'Hali amal qiladi',
    ],

    'bands' => [
        'child' => 'Bola (12 yoshgacha)',
        'young_adolescent' => 'O\'smir (12–16)',
        'adolescent' => 'O\'smir (17)',
        'adult' => 'Kattalar',
        'unknown' => 'Noma\'lum',
    ],

    'methods' => [
        'self_declaration' => 'O\'zini bayon qilish',
        'os_signal' => 'Operatsion tizim signali',
        'store_signal' => 'Ilovalar do\'koni signali',
        'document' => 'Hujjat',
        'facial_estimation' => 'Yuz orqali yoshni baholash',
        'verifiable_credential' => 'Tekshiriladigan guvohnoma',
        'guardian' => 'Vasiy ko\'rsatgan',
    ],

    'status' => [
        'pending' => 'Tasdiq kutilmoqda',
        'active' => 'Faol',
        'revoked' => 'Bekor qilingan',
        'in_force' => 'To\'xtatilgan',
        'appealed' => 'Shikoyat qaror kutmoqda',
        'lifted' => 'Olib tashlangan',
        'upheld' => 'Kuchda qoldirilgan',
    ],

    'help' => [
        'verified' => 'Faqat bu shaxs voyaga yetmaganning qonuniy vasiysi ekanini tekshirganingizdan keyin tasdiqlang. 16 yoshgacha bo\'lgan hisoblar vasiyga bog\'langan bo\'lishi kerak (Qonun 15.211/2025, 24-modda).',
        'revoke' => 'Voyaga yetmagan har qanday himoya sozlamasini pasaytirishdan oldin boshqa tasdiqlangan vasiyga muhtoj bo\'ladi (24-modda, §5).',
        'reason' => 'Voyaga yetmagan shaxs bu hisobdan qoidalardan tashqari foydalanayotgani haqidagi asosli belgilar (24-modda, §4). Hisob egasi shikoyat qilishi mumkin.',
        'no_appeal' => 'Hali shikoyat qayd etilmagan.',
    ],

    'actions' => [
        'verify' => 'Vasiyni tasdiqlash',
        'revoke' => 'Bog\'lanishni bekor qilish',
        'appeal' => 'Shikoyatni qayd etish',
        'lift' => 'To\'xtatishni olib tashlash',
        'uphold' => 'To\'xtatishni qoldirish',
    ],

    'notifications' => [
        'verified' => 'Vasiy tasdiqlandi.',
        'revoked' => 'Bog\'lanish bekor qilindi.',
        'appealed' => 'Shikoyat qayd etildi.',
        'lift' => 'To\'xtatish olib tashlandi.',
        'uphold' => 'To\'xtatish kuchda qoldirildi.',
    ],
];
