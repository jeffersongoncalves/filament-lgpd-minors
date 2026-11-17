<?php

return [
    'assurances' => [
        'label' => 'Leeftijdscontrole',
        'plural_label' => 'Leeftijdscontroles',
    ],

    'guardians' => [
        'label' => 'Koppeling met voogd',
        'plural_label' => 'Koppelingen met voogden',
    ],

    'suspensions' => [
        'label' => 'Schorsing',
        'plural_label' => 'Schorsingen',
    ],

    'fields' => [
        'subject' => 'Account',
        'band' => 'Leeftijdsgroep',
        'method' => 'Methode',
        'reliable' => 'Betrouwbaar',
        'not_reliable' => 'Niet betrouwbaar',
        'provider' => 'Aanbieder',
        'assured_at' => 'Gecontroleerd op',
        'expires_at' => 'Geldig tot',
        'never' => 'Verloopt niet',
        'minor' => 'Minderjarige',
        'guardian' => 'Voogd',
        'relationship' => 'Relatie',
        'verified' => 'Voogd geverifieerd',
        'status' => 'Status',
        'verified_at' => 'Geverifieerd op',
        'created_at' => 'Aangemaakt op',
        'reason' => 'Reden',
        'suspended_at' => 'Geschorst op',
        'appealed_at' => 'Bezwaar op',
        'appeal' => 'Bezwaar',
        'decision' => 'Beslissing',
    ],

    'filters' => [
        'valid' => 'Nog geldig',
    ],

    'bands' => [
        'child' => 'Kind (onder 12)',
        'young_adolescent' => 'Adolescent (12 tot 16)',
        'adolescent' => 'Adolescent (17)',
        'adult' => 'Volwassene',
        'unknown' => 'Onbekend',
    ],

    'methods' => [
        'self_declaration' => 'Zelfverklaring',
        'os_signal' => 'Signaal van het besturingssysteem',
        'store_signal' => 'Signaal van de app store',
        'document' => 'Identiteitsdocument',
        'facial_estimation' => 'Leeftijdsschatting via gezicht',
        'verifiable_credential' => 'Verifieerbaar bewijs',
        'guardian' => 'Opgegeven door de voogd',
    ],

    'status' => [
        'pending' => 'Verificatie in afwachting',
        'active' => 'Actief',
        'revoked' => 'Ingetrokken',
        'in_force' => 'Geschorst',
        'appealed' => 'Bezwaar te beoordelen',
        'lifted' => 'Opgeheven',
        'upheld' => 'Gehandhaafd',
    ],

    'help' => [
        'verified' => 'Bevestig pas nadat je hebt gecontroleerd dat deze persoon de wettelijke voogd van de minderjarige is. Accounts tot 16 jaar moeten aan een voogd gekoppeld zijn (Wet 15.211/2025, art. 24).',
        'revoke' => 'De minderjarige heeft een andere geverifieerde voogd nodig voordat beschermende instellingen verlaagd kunnen worden (art. 24, §5).',
        'reason' => 'De gegronde aanwijzingen dat een minderjarige dit account buiten de regels gebruikt (art. 24, §4). De accounthouder kan bezwaar maken.',
        'no_appeal' => 'Nog geen bezwaar vastgelegd.',
    ],

    'actions' => [
        'verify' => 'Voogd verifiëren',
        'revoke' => 'Koppeling intrekken',
        'appeal' => 'Bezwaar vastleggen',
        'lift' => 'Schorsing opheffen',
        'uphold' => 'Schorsing handhaven',
    ],

    'notifications' => [
        'verified' => 'Voogd geverifieerd.',
        'revoked' => 'Koppeling ingetrokken.',
        'appealed' => 'Bezwaar vastgelegd.',
        'lift' => 'Schorsing opgeheven.',
        'uphold' => 'Schorsing gehandhaafd.',
    ],
];
