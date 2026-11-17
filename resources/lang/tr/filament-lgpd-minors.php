<?php

return [
    'assurances' => [
        'label' => 'Yaş doğrulama',
        'plural_label' => 'Yaş doğrulamaları',
    ],

    'guardians' => [
        'label' => 'Veli bağlantısı',
        'plural_label' => 'Veli bağlantıları',
    ],

    'suspensions' => [
        'label' => 'Askıya alma',
        'plural_label' => 'Askıya almalar',
    ],

    'fields' => [
        'subject' => 'Hesap',
        'band' => 'Yaş grubu',
        'method' => 'Yöntem',
        'reliable' => 'Güvenilir',
        'not_reliable' => 'Güvenilir değil',
        'provider' => 'Sağlayıcı',
        'assured_at' => 'Doğrulama tarihi',
        'expires_at' => 'Geçerlilik sonu',
        'never' => 'Süresiz',
        'minor' => 'Reşit olmayan',
        'guardian' => 'Veli',
        'relationship' => 'Yakınlık',
        'verified' => 'Veli doğrulandı',
        'status' => 'Durum',
        'verified_at' => 'Doğrulama tarihi',
        'created_at' => 'Oluşturulma',
        'reason' => 'Gerekçe',
        'suspended_at' => 'Askıya alınma',
        'appealed_at' => 'İtiraz tarihi',
        'appeal' => 'İtiraz',
        'decision' => 'Karar',
    ],

    'filters' => [
        'valid' => 'Hâlâ geçerli',
    ],

    'bands' => [
        'child' => 'Çocuk (12 yaş altı)',
        'young_adolescent' => 'Ergen (12–16)',
        'adolescent' => 'Ergen (17)',
        'adult' => 'Yetişkin',
        'unknown' => 'Bilinmiyor',
    ],

    'methods' => [
        'self_declaration' => 'Beyan',
        'os_signal' => 'İşletim sistemi sinyali',
        'store_signal' => 'Uygulama mağazası sinyali',
        'document' => 'Belge',
        'facial_estimation' => 'Yüzden yaş tahmini',
        'verifiable_credential' => 'Doğrulanabilir kimlik bilgisi',
        'guardian' => 'Veli tarafından bildirildi',
    ],

    'status' => [
        'pending' => 'Doğrulama bekliyor',
        'active' => 'Etkin',
        'revoked' => 'İptal edildi',
        'in_force' => 'Askıda',
        'appealed' => 'İtiraz karar bekliyor',
        'lifted' => 'Kaldırıldı',
        'upheld' => 'Sürdürüldü',
    ],

    'help' => [
        'verified' => 'Yalnızca bu kişinin reşit olmayanın yasal velisi olduğunu kontrol ettikten sonra onaylayın. 16 yaşa kadar olan hesaplar bir veliye bağlı olmalıdır (Kanun 15.211/2025, md. 24).',
        'revoke' => 'Reşit olmayan, herhangi bir koruma ayarını düşürmeden önce doğrulanmış başka bir veliye ihtiyaç duyacaktır (md. 24, §5).',
        'reason' => 'Reşit olmayan birinin bu hesabı kurallar dışında kullandığına dair ciddi belirtiler (md. 24, §4). Hesap sahibi itiraz edebilir.',
        'no_appeal' => 'Henüz itiraz kaydedilmedi.',
    ],

    'actions' => [
        'verify' => 'Veliyi doğrula',
        'revoke' => 'Bağlantıyı iptal et',
        'appeal' => 'İtirazı kaydet',
        'lift' => 'Askıyı kaldır',
        'uphold' => 'Askıyı sürdür',
    ],

    'notifications' => [
        'verified' => 'Veli doğrulandı.',
        'revoked' => 'Bağlantı iptal edildi.',
        'appealed' => 'İtiraz kaydedildi.',
        'lift' => 'Askı kaldırıldı.',
        'uphold' => 'Askı sürdürüldü.',
    ],
];
