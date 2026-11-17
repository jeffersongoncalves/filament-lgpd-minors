<?php

return [
    'assurances' => [
        'label' => 'Verificación de edad',
        'plural_label' => 'Verificaciones de edad',
    ],

    'guardians' => [
        'label' => 'Vínculo con tutor',
        'plural_label' => 'Vínculos con tutores',
    ],

    'suspensions' => [
        'label' => 'Suspensión',
        'plural_label' => 'Suspensiones',
    ],

    'fields' => [
        'subject' => 'Cuenta',
        'band' => 'Franja de edad',
        'method' => 'Método',
        'reliable' => 'Fiable',
        'not_reliable' => 'No fiable',
        'provider' => 'Proveedor',
        'assured_at' => 'Verificada el',
        'expires_at' => 'Válida hasta',
        'never' => 'Sin vencimiento',
        'minor' => 'Menor',
        'guardian' => 'Tutor',
        'relationship' => 'Parentesco',
        'verified' => 'Tutor verificado',
        'status' => 'Estado',
        'verified_at' => 'Verificado el',
        'created_at' => 'Creado el',
        'reason' => 'Motivo',
        'suspended_at' => 'Suspendida el',
        'appealed_at' => 'Recurso el',
        'appeal' => 'Recurso',
        'decision' => 'Decisión',
    ],

    'filters' => [
        'valid' => 'Aún válidas',
    ],

    'bands' => [
        'child' => 'Niño (menor de 12)',
        'young_adolescent' => 'Adolescente (12 a 16)',
        'adolescent' => 'Adolescente (17)',
        'adult' => 'Adulto',
        'unknown' => 'Desconocida',
    ],

    'methods' => [
        'self_declaration' => 'Autodeclaración',
        'os_signal' => 'Señal del sistema operativo',
        'store_signal' => 'Señal de la tienda de aplicaciones',
        'document' => 'Documento',
        'facial_estimation' => 'Estimación facial de edad',
        'verifiable_credential' => 'Credencial verificable',
        'guardian' => 'Indicada por el tutor',
    ],

    'status' => [
        'pending' => 'Verificación pendiente',
        'active' => 'Activo',
        'revoked' => 'Revocado',
        'in_force' => 'Suspendida',
        'appealed' => 'Recurso por decidir',
        'lifted' => 'Levantada',
        'upheld' => 'Mantenida',
    ],

    'help' => [
        'verified' => 'Confirma solo después de comprobar que esta persona es el tutor legal del menor. Las cuentas de hasta 16 años deben estar vinculadas a uno (Ley 15.211/2025, art. 24).',
        'revoke' => 'El menor necesitará otro tutor verificado antes de reducir cualquier ajuste de protección (art. 24, §5).',
        'reason' => 'Los indicios fundados de que un menor usa esta cuenta fuera de las reglas (art. 24, §4). El titular puede recurrir.',
        'no_appeal' => 'Aún no hay recurso registrado.',
    ],

    'actions' => [
        'verify' => 'Verificar tutor',
        'revoke' => 'Revocar vínculo',
        'appeal' => 'Registrar recurso',
        'lift' => 'Levantar suspensión',
        'uphold' => 'Mantener suspensión',
    ],

    'notifications' => [
        'verified' => 'Tutor verificado.',
        'revoked' => 'Vínculo revocado.',
        'appealed' => 'Recurso registrado.',
        'lift' => 'Suspensión levantada.',
        'uphold' => 'Suspensión mantenida.',
    ],
];
