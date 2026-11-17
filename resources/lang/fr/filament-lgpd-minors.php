<?php

return [
    'assurances' => [
        'label' => 'Vérification d\'âge',
        'plural_label' => 'Vérifications d\'âge',
    ],

    'guardians' => [
        'label' => 'Lien avec un responsable légal',
        'plural_label' => 'Liens avec des responsables légaux',
    ],

    'suspensions' => [
        'label' => 'Suspension',
        'plural_label' => 'Suspensions',
    ],

    'fields' => [
        'subject' => 'Compte',
        'band' => 'Tranche d\'âge',
        'method' => 'Méthode',
        'reliable' => 'Fiable',
        'not_reliable' => 'Non fiable',
        'provider' => 'Fournisseur',
        'assured_at' => 'Vérifiée le',
        'expires_at' => 'Valide jusqu\'au',
        'never' => 'Sans expiration',
        'minor' => 'Mineur',
        'guardian' => 'Responsable légal',
        'relationship' => 'Lien de parenté',
        'verified' => 'Responsable vérifié',
        'status' => 'Statut',
        'verified_at' => 'Vérifié le',
        'created_at' => 'Créé le',
        'reason' => 'Motif',
        'suspended_at' => 'Suspendu le',
        'appealed_at' => 'Recours le',
        'appeal' => 'Recours',
        'decision' => 'Décision',
    ],

    'filters' => [
        'valid' => 'Encore valides',
    ],

    'bands' => [
        'child' => 'Enfant (moins de 12 ans)',
        'young_adolescent' => 'Adolescent (12 à 16 ans)',
        'adolescent' => 'Adolescent (17 ans)',
        'adult' => 'Adulte',
        'unknown' => 'Inconnue',
    ],

    'methods' => [
        'self_declaration' => 'Autodéclaration',
        'os_signal' => 'Signal du système d\'exploitation',
        'store_signal' => 'Signal de la boutique d\'applications',
        'document' => 'Pièce d\'identité',
        'facial_estimation' => 'Estimation faciale de l\'âge',
        'verifiable_credential' => 'Attestation vérifiable',
        'guardian' => 'Déclarée par le responsable',
    ],

    'status' => [
        'pending' => 'Vérification en attente',
        'active' => 'Actif',
        'revoked' => 'Révoqué',
        'in_force' => 'Suspendu',
        'appealed' => 'Recours à trancher',
        'lifted' => 'Levée',
        'upheld' => 'Maintenue',
    ],

    'help' => [
        'verified' => 'Ne confirmez qu\'après avoir vérifié que cette personne est le responsable légal du mineur. Les comptes jusqu\'à 16 ans doivent y être liés (Loi 15.211/2025, art. 24).',
        'revoke' => 'Le mineur aura besoin d\'un autre responsable vérifié avant de réduire tout réglage de protection (art. 24, §5).',
        'reason' => 'Les indices sérieux qu\'un mineur utilise ce compte en dehors des règles (art. 24, §4). Le titulaire peut faire un recours.',
        'no_appeal' => 'Aucun recours enregistré pour l\'instant.',
    ],

    'actions' => [
        'verify' => 'Vérifier le responsable',
        'revoke' => 'Révoquer le lien',
        'appeal' => 'Enregistrer un recours',
        'lift' => 'Lever la suspension',
        'uphold' => 'Maintenir la suspension',
    ],

    'notifications' => [
        'verified' => 'Responsable vérifié.',
        'revoked' => 'Lien révoqué.',
        'appealed' => 'Recours enregistré.',
        'lift' => 'Suspension levée.',
        'uphold' => 'Suspension maintenue.',
    ],
];
