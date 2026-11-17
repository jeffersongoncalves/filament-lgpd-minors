<?php

return [
    'assurances' => [
        'label' => 'Verificação de idade',
        'plural_label' => 'Verificações de idade',
    ],

    'guardians' => [
        'label' => 'Ligação a responsável',
        'plural_label' => 'Ligações a responsáveis',
    ],

    'suspensions' => [
        'label' => 'Suspensão',
        'plural_label' => 'Suspensões',
    ],

    'fields' => [
        'subject' => 'Conta',
        'band' => 'Faixa etária',
        'method' => 'Método',
        'reliable' => 'Fiável',
        'not_reliable' => 'Não fiável',
        'provider' => 'Fornecedor',
        'assured_at' => 'Verificada em',
        'expires_at' => 'Válida até',
        'never' => 'Sem validade',
        'minor' => 'Menor',
        'guardian' => 'Responsável',
        'relationship' => 'Parentesco',
        'verified' => 'Responsável verificado',
        'status' => 'Estado',
        'verified_at' => 'Verificado em',
        'created_at' => 'Criado em',
        'reason' => 'Motivo',
        'suspended_at' => 'Suspensa em',
        'appealed_at' => 'Recurso em',
        'appeal' => 'Recurso',
        'decision' => 'Decisão',
    ],

    'filters' => [
        'valid' => 'Ainda válidas',
    ],

    'bands' => [
        'child' => 'Criança (até 11)',
        'young_adolescent' => 'Adolescente (12 a 16)',
        'adolescent' => 'Adolescente (17)',
        'adult' => 'Adulto',
        'unknown' => 'Desconhecida',
    ],

    'methods' => [
        'self_declaration' => 'Autodeclaração',
        'os_signal' => 'Sinal do sistema operativo',
        'store_signal' => 'Sinal da loja de aplicações',
        'document' => 'Documento',
        'facial_estimation' => 'Estimativa facial da idade',
        'verifiable_credential' => 'Credencial verificável',
        'guardian' => 'Indicada pelo responsável',
    ],

    'status' => [
        'pending' => 'Verificação pendente',
        'active' => 'Ativo',
        'revoked' => 'Revogado',
        'in_force' => 'Suspensa',
        'appealed' => 'Recurso por decidir',
        'lifted' => 'Levantada',
        'upheld' => 'Mantida',
    ],

    'help' => [
        'verified' => 'Confirme apenas depois de verificar que esta pessoa é o responsável legal do menor. Contas de até 16 anos têm de estar ligadas a um (Lei 15.211/2025, art. 24).',
        'revoke' => 'O menor vai precisar de outro responsável verificado antes de reduzir qualquer definição de proteção (art. 24, §5).',
        'reason' => 'Os indícios fundados de que um menor usa esta conta fora das regras (art. 24, §4). O titular pode recorrer.',
        'no_appeal' => 'Ainda não foi registado nenhum recurso.',
    ],

    'actions' => [
        'verify' => 'Verificar responsável',
        'revoke' => 'Revogar ligação',
        'appeal' => 'Registar recurso',
        'lift' => 'Levantar suspensão',
        'uphold' => 'Manter suspensão',
    ],

    'notifications' => [
        'verified' => 'Responsável verificado.',
        'revoked' => 'Ligação revogada.',
        'appealed' => 'Recurso registado.',
        'lift' => 'Suspensão levantada.',
        'uphold' => 'Suspensão mantida.',
    ],
];
