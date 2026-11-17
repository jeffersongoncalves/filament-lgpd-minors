<?php

return [
    'assurances' => [
        'label' => '年齢確認',
        'plural_label' => '年齢確認',
    ],

    'guardians' => [
        'label' => '保護者リンク',
        'plural_label' => '保護者リンク',
    ],

    'suspensions' => [
        'label' => '利用停止',
        'plural_label' => '利用停止',
    ],

    'fields' => [
        'subject' => 'アカウント',
        'band' => '年齢区分',
        'method' => '方法',
        'reliable' => '信頼できる',
        'not_reliable' => '信頼できない',
        'provider' => 'プロバイダー',
        'assured_at' => '確認日時',
        'expires_at' => '有効期限',
        'never' => '期限なし',
        'minor' => '未成年者',
        'guardian' => '保護者',
        'relationship' => '続柄',
        'verified' => '保護者確認済み',
        'status' => 'ステータス',
        'verified_at' => '確認日時',
        'created_at' => '作成日時',
        'reason' => '理由',
        'suspended_at' => '停止日時',
        'appealed_at' => '異議申立日時',
        'appeal' => '異議申立て',
        'decision' => '決定',
    ],

    'filters' => [
        'valid' => '有効なもののみ',
    ],

    'bands' => [
        'child' => '子ども（12歳未満）',
        'young_adolescent' => '青少年（12〜16歳）',
        'adolescent' => '青少年（17歳）',
        'adult' => '成人',
        'unknown' => '不明',
    ],

    'methods' => [
        'self_declaration' => '自己申告',
        'os_signal' => 'OSのシグナル',
        'store_signal' => 'アプリストアのシグナル',
        'document' => '本人確認書類',
        'facial_estimation' => '顔による年齢推定',
        'verifiable_credential' => '検証可能な資格情報',
        'guardian' => '保護者による申告',
    ],

    'status' => [
        'pending' => '確認待ち',
        'active' => '有効',
        'revoked' => '取消済み',
        'in_force' => '停止中',
        'appealed' => '異議の判断待ち',
        'lifted' => '解除',
        'upheld' => '維持',
    ],

    'help' => [
        'verified' => 'この人物が未成年者の法定保護者であることを確認してから承認してください。16歳以下のアカウントは保護者とのリンクが必要です（法律15.211/2025 第24条）。',
        'revoke' => '保護設定を下げる前に、未成年者には別の確認済み保護者が必要になります（第24条 第5項）。',
        'reason' => '未成年者がルールに反してこのアカウントを利用していると考える十分な根拠（第24条 第4項）。アカウント所有者は異議を申し立てられます。',
        'no_appeal' => '異議申立てはまだ記録されていません。',
    ],

    'actions' => [
        'verify' => '保護者を確認',
        'revoke' => 'リンクを取り消す',
        'appeal' => '異議申立てを記録',
        'lift' => '停止を解除',
        'uphold' => '停止を維持',
    ],

    'notifications' => [
        'verified' => '保護者を確認しました。',
        'revoked' => 'リンクを取り消しました。',
        'appealed' => '異議申立てを記録しました。',
        'lift' => '停止を解除しました。',
        'uphold' => '停止を維持しました。',
    ],
];
