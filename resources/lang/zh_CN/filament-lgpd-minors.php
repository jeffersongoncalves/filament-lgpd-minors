<?php

return [
    'assurances' => [
        'label' => '年龄核验',
        'plural_label' => '年龄核验',
    ],

    'guardians' => [
        'label' => '监护人关联',
        'plural_label' => '监护人关联',
    ],

    'suspensions' => [
        'label' => '停用',
        'plural_label' => '停用记录',
    ],

    'fields' => [
        'subject' => '账户',
        'band' => '年龄段',
        'method' => '方式',
        'reliable' => '可靠',
        'not_reliable' => '不可靠',
        'provider' => '提供方',
        'assured_at' => '核验时间',
        'expires_at' => '有效期至',
        'never' => '长期有效',
        'minor' => '未成年人',
        'guardian' => '监护人',
        'relationship' => '关系',
        'verified' => '监护人已核实',
        'status' => '状态',
        'verified_at' => '核实时间',
        'created_at' => '创建时间',
        'reason' => '原因',
        'suspended_at' => '停用时间',
        'appealed_at' => '申诉时间',
        'appeal' => '申诉',
        'decision' => '决定',
    ],

    'filters' => [
        'valid' => '仍有效',
    ],

    'bands' => [
        'child' => '儿童（12岁以下）',
        'young_adolescent' => '青少年（12至16岁）',
        'adolescent' => '青少年（17岁）',
        'adult' => '成年人',
        'unknown' => '未知',
    ],

    'methods' => [
        'self_declaration' => '自我声明',
        'os_signal' => '操作系统信号',
        'store_signal' => '应用商店信号',
        'document' => '证件',
        'facial_estimation' => '人脸年龄估计',
        'verifiable_credential' => '可验证凭证',
        'guardian' => '由监护人提供',
    ],

    'status' => [
        'pending' => '待核实',
        'active' => '有效',
        'revoked' => '已撤销',
        'in_force' => '已停用',
        'appealed' => '申诉待决定',
        'lifted' => '已解除',
        'upheld' => '维持',
    ],

    'help' => [
        'verified' => '请在核实此人是该未成年人的法定监护人后再确认。16岁及以下的账户必须关联监护人（第15.211/2025号法律第24条）。',
        'revoke' => '在降低任何保护设置之前，该未成年人需要另一位已核实的监护人（第24条第5款）。',
        'reason' => '有充分迹象表明未成年人违反规则使用此账户（第24条第4款）。账户持有人可以申诉。',
        'no_appeal' => '尚无申诉记录。',
    ],

    'actions' => [
        'verify' => '核实监护人',
        'revoke' => '撤销关联',
        'appeal' => '记录申诉',
        'lift' => '解除停用',
        'uphold' => '维持停用',
    ],

    'notifications' => [
        'verified' => '监护人已核实。',
        'revoked' => '关联已撤销。',
        'appealed' => '申诉已记录。',
        'lift' => '停用已解除。',
        'uphold' => '停用已维持。',
    ],
];
