<?php

return [
    'assurances' => [
        'label' => 'Yaş yoxlaması',
        'plural_label' => 'Yaş yoxlamaları',
    ],

    'guardians' => [
        'label' => 'Valideyn bağlantısı',
        'plural_label' => 'Valideyn bağlantıları',
    ],

    'suspensions' => [
        'label' => 'Dayandırma',
        'plural_label' => 'Dayandırmalar',
    ],

    'fields' => [
        'subject' => 'Hesab',
        'band' => 'Yaş qrupu',
        'method' => 'Üsul',
        'reliable' => 'Etibarlı',
        'not_reliable' => 'Etibarsız',
        'provider' => 'Provayder',
        'assured_at' => 'Yoxlanılıb',
        'expires_at' => 'Etibarlıdır',
        'never' => 'Müddətsiz',
        'minor' => 'Azyaşlı',
        'guardian' => 'Valideyn',
        'relationship' => 'Qohumluq',
        'verified' => 'Valideyn təsdiqlənib',
        'status' => 'Status',
        'verified_at' => 'Təsdiqlənib',
        'created_at' => 'Yaradılıb',
        'reason' => 'Səbəb',
        'suspended_at' => 'Dayandırılıb',
        'appealed_at' => 'Şikayət tarixi',
        'appeal' => 'Şikayət',
        'decision' => 'Qərar',
    ],

    'filters' => [
        'valid' => 'Hələ etibarlı',
    ],

    'bands' => [
        'child' => 'Uşaq (12-dən kiçik)',
        'young_adolescent' => 'Yeniyetmə (12–16)',
        'adolescent' => 'Yeniyetmə (17)',
        'adult' => 'Yetkin',
        'unknown' => 'Naməlum',
    ],

    'methods' => [
        'self_declaration' => 'Özünü bəyan',
        'os_signal' => 'Əməliyyat sistemi siqnalı',
        'store_signal' => 'Tətbiq mağazası siqnalı',
        'document' => 'Sənəd',
        'facial_estimation' => 'Üzlə yaş təxmini',
        'verifiable_credential' => 'Yoxlanıla bilən etimadnamə',
        'guardian' => 'Valideyn tərəfindən bildirilib',
    ],

    'status' => [
        'pending' => 'Təsdiq gözlənilir',
        'active' => 'Aktiv',
        'revoked' => 'Ləğv edilib',
        'in_force' => 'Dayandırılıb',
        'appealed' => 'Şikayət baxılmalıdır',
        'lifted' => 'Götürülüb',
        'upheld' => 'Qüvvədə saxlanılıb',
    ],

    'help' => [
        'verified' => 'Yalnız bu şəxsin azyaşlının qanuni nümayəndəsi olduğunu yoxladıqdan sonra təsdiqləyin. 16 yaşadək hesablar valideynə bağlanmalıdır (Qanun 15.211/2025, maddə 24).',
        'revoke' => 'Azyaşlı hər hansı qoruma ayarını azaltmazdan əvvəl başqa təsdiqlənmiş valideynə ehtiyac duyacaq (maddə 24, §5).',
        'reason' => 'Azyaşlının bu hesabı qaydalardan kənar istifadə etdiyinə dair əsaslı əlamətlər (maddə 24, §4). Hesab sahibi şikayət edə bilər.',
        'no_appeal' => 'Hələ şikayət qeydə alınmayıb.',
    ],

    'actions' => [
        'verify' => 'Valideyni təsdiqlə',
        'revoke' => 'Bağlantını ləğv et',
        'appeal' => 'Şikayəti qeydə al',
        'lift' => 'Dayandırmanı götür',
        'uphold' => 'Dayandırmanı saxla',
    ],

    'notifications' => [
        'verified' => 'Valideyn təsdiqləndi.',
        'revoked' => 'Bağlantı ləğv edildi.',
        'appealed' => 'Şikayət qeydə alındı.',
        'lift' => 'Dayandırma götürüldü.',
        'uphold' => 'Dayandırma saxlanıldı.',
    ],
];
