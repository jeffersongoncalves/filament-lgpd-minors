<?php

return [
    'assurances' => [
        'label' => 'Verifica dell\'età',
        'plural_label' => 'Verifiche dell\'età',
    ],

    'guardians' => [
        'label' => 'Collegamento con il tutore',
        'plural_label' => 'Collegamenti con i tutori',
    ],

    'suspensions' => [
        'label' => 'Sospensione',
        'plural_label' => 'Sospensioni',
    ],

    'fields' => [
        'subject' => 'Account',
        'band' => 'Fascia d\'età',
        'method' => 'Metodo',
        'reliable' => 'Affidabile',
        'not_reliable' => 'Non affidabile',
        'provider' => 'Fornitore',
        'assured_at' => 'Verificata il',
        'expires_at' => 'Valida fino al',
        'never' => 'Nessuna scadenza',
        'minor' => 'Minore',
        'guardian' => 'Tutore',
        'relationship' => 'Parentela',
        'verified' => 'Tutore verificato',
        'status' => 'Stato',
        'verified_at' => 'Verificato il',
        'created_at' => 'Creato il',
        'reason' => 'Motivo',
        'suspended_at' => 'Sospeso il',
        'appealed_at' => 'Ricorso il',
        'appeal' => 'Ricorso',
        'decision' => 'Decisione',
    ],

    'filters' => [
        'valid' => 'Ancora valide',
    ],

    'bands' => [
        'child' => 'Bambino (sotto i 12)',
        'young_adolescent' => 'Adolescente (12–16)',
        'adolescent' => 'Adolescente (17)',
        'adult' => 'Adulto',
        'unknown' => 'Sconosciuta',
    ],

    'methods' => [
        'self_declaration' => 'Autodichiarazione',
        'os_signal' => 'Segnale del sistema operativo',
        'store_signal' => 'Segnale dello store di app',
        'document' => 'Documento',
        'facial_estimation' => 'Stima facciale dell\'età',
        'verifiable_credential' => 'Credenziale verificabile',
        'guardian' => 'Indicata dal tutore',
    ],

    'status' => [
        'pending' => 'Verifica in attesa',
        'active' => 'Attivo',
        'revoked' => 'Revocato',
        'in_force' => 'Sospeso',
        'appealed' => 'Ricorso da decidere',
        'lifted' => 'Revocata',
        'upheld' => 'Confermata',
    ],

    'help' => [
        'verified' => 'Conferma solo dopo aver verificato che questa persona è il tutore legale del minore. Gli account fino a 16 anni devono essere collegati a un tutore (Legge 15.211/2025, art. 24).',
        'revoke' => 'Il minore avrà bisogno di un altro tutore verificato prima di ridurre qualsiasi impostazione di protezione (art. 24, §5).',
        'reason' => 'Gli indizi fondati che un minore usa questo account fuori dalle regole (art. 24, §4). Il titolare può fare ricorso.',
        'no_appeal' => 'Nessun ricorso registrato finora.',
    ],

    'actions' => [
        'verify' => 'Verifica tutore',
        'revoke' => 'Revoca collegamento',
        'appeal' => 'Registra ricorso',
        'lift' => 'Revoca sospensione',
        'uphold' => 'Conferma sospensione',
    ],

    'notifications' => [
        'verified' => 'Tutore verificato.',
        'revoked' => 'Collegamento revocato.',
        'appealed' => 'Ricorso registrato.',
        'lift' => 'Sospensione revocata.',
        'uphold' => 'Sospensione confermata.',
    ],
];
