<?php

return [
    'assurances' => [
        'label' => 'Altersprüfung',
        'plural_label' => 'Altersprüfungen',
    ],

    'guardians' => [
        'label' => 'Verknüpfung mit Erziehungsberechtigten',
        'plural_label' => 'Verknüpfungen mit Erziehungsberechtigten',
    ],

    'suspensions' => [
        'label' => 'Sperre',
        'plural_label' => 'Sperren',
    ],

    'fields' => [
        'subject' => 'Konto',
        'band' => 'Altersgruppe',
        'method' => 'Methode',
        'reliable' => 'Zuverlässig',
        'not_reliable' => 'Nicht zuverlässig',
        'provider' => 'Anbieter',
        'assured_at' => 'Geprüft am',
        'expires_at' => 'Gültig bis',
        'never' => 'Kein Ablauf',
        'minor' => 'Minderjährige Person',
        'guardian' => 'Erziehungsberechtigte Person',
        'relationship' => 'Beziehung',
        'verified' => 'Erziehungsberechtigung geprüft',
        'status' => 'Status',
        'verified_at' => 'Geprüft am',
        'created_at' => 'Erstellt am',
        'reason' => 'Grund',
        'suspended_at' => 'Gesperrt am',
        'appealed_at' => 'Einspruch am',
        'appeal' => 'Einspruch',
        'decision' => 'Entscheidung',
    ],

    'filters' => [
        'valid' => 'Noch gültig',
    ],

    'bands' => [
        'child' => 'Kind (unter 12)',
        'young_adolescent' => 'Jugendlich (12 bis 16)',
        'adolescent' => 'Jugendlich (17)',
        'adult' => 'Erwachsen',
        'unknown' => 'Unbekannt',
    ],

    'methods' => [
        'self_declaration' => 'Selbstauskunft',
        'os_signal' => 'Betriebssystem-Signal',
        'store_signal' => 'App-Store-Signal',
        'document' => 'Ausweisdokument',
        'facial_estimation' => 'Gesichtsbasierte Altersschätzung',
        'verifiable_credential' => 'Überprüfbarer Nachweis',
        'guardian' => 'Von Erziehungsberechtigten angegeben',
    ],

    'status' => [
        'pending' => 'Prüfung ausstehend',
        'active' => 'Aktiv',
        'revoked' => 'Widerrufen',
        'in_force' => 'Gesperrt',
        'appealed' => 'Einspruch zu entscheiden',
        'lifted' => 'Aufgehoben',
        'upheld' => 'Bestätigt',
    ],

    'help' => [
        'verified' => 'Bestätigen Sie erst, nachdem Sie geprüft haben, dass diese Person gesetzlich erziehungsberechtigt ist. Konten bis 16 Jahre müssen mit einer solchen Person verknüpft sein (Lei 15.211/2025, Art. 24).',
        'revoke' => 'Die minderjährige Person braucht eine andere geprüfte erziehungsberechtigte Person, bevor Schutzeinstellungen gelockert werden können (Art. 24, §5).',
        'reason' => 'Die begründeten Hinweise, dass eine minderjährige Person dieses Konto regelwidrig nutzt (Art. 24, §4). Die kontoinhabende Person kann Einspruch einlegen.',
        'no_appeal' => 'Noch kein Einspruch erfasst.',
    ],

    'actions' => [
        'verify' => 'Erziehungsberechtigung bestätigen',
        'revoke' => 'Verknüpfung widerrufen',
        'appeal' => 'Einspruch erfassen',
        'lift' => 'Sperre aufheben',
        'uphold' => 'Sperre bestätigen',
    ],

    'notifications' => [
        'verified' => 'Erziehungsberechtigung bestätigt.',
        'revoked' => 'Verknüpfung widerrufen.',
        'appealed' => 'Einspruch erfasst.',
        'lift' => 'Sperre aufgehoben.',
        'uphold' => 'Sperre bestätigt.',
    ],
];
