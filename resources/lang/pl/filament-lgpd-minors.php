<?php

return [
    'assurances' => [
        'label' => 'Weryfikacja wieku',
        'plural_label' => 'Weryfikacje wieku',
    ],

    'guardians' => [
        'label' => 'Powiązanie z opiekunem',
        'plural_label' => 'Powiązania z opiekunami',
    ],

    'suspensions' => [
        'label' => 'Zawieszenie',
        'plural_label' => 'Zawieszenia',
    ],

    'fields' => [
        'subject' => 'Konto',
        'band' => 'Przedział wiekowy',
        'method' => 'Metoda',
        'reliable' => 'Wiarygodna',
        'not_reliable' => 'Niewiarygodna',
        'provider' => 'Dostawca',
        'assured_at' => 'Zweryfikowano',
        'expires_at' => 'Ważna do',
        'never' => 'Bez wygaśnięcia',
        'minor' => 'Małoletni',
        'guardian' => 'Opiekun',
        'relationship' => 'Pokrewieństwo',
        'verified' => 'Opiekun zweryfikowany',
        'status' => 'Status',
        'verified_at' => 'Zweryfikowano',
        'created_at' => 'Utworzono',
        'reason' => 'Powód',
        'suspended_at' => 'Zawieszono',
        'appealed_at' => 'Odwołanie z dnia',
        'appeal' => 'Odwołanie',
        'decision' => 'Decyzja',
    ],

    'filters' => [
        'valid' => 'Nadal ważne',
    ],

    'bands' => [
        'child' => 'Dziecko (poniżej 12)',
        'young_adolescent' => 'Nastolatek (12–16)',
        'adolescent' => 'Nastolatek (17)',
        'adult' => 'Dorosły',
        'unknown' => 'Nieznany',
    ],

    'methods' => [
        'self_declaration' => 'Oświadczenie własne',
        'os_signal' => 'Sygnał systemu operacyjnego',
        'store_signal' => 'Sygnał sklepu z aplikacjami',
        'document' => 'Dokument',
        'facial_estimation' => 'Szacowanie wieku na podstawie twarzy',
        'verifiable_credential' => 'Weryfikowalne poświadczenie',
        'guardian' => 'Podany przez opiekuna',
    ],

    'status' => [
        'pending' => 'Oczekuje na weryfikację',
        'active' => 'Aktywne',
        'revoked' => 'Odwołane',
        'in_force' => 'Zawieszone',
        'appealed' => 'Odwołanie do rozpatrzenia',
        'lifted' => 'Uchylone',
        'upheld' => 'Utrzymane',
    ],

    'help' => [
        'verified' => 'Potwierdź dopiero po sprawdzeniu, że ta osoba jest opiekunem prawnym małoletniego. Konta osób do 16 lat muszą być z nim powiązane (Ustawa 15.211/2025, art. 24).',
        'revoke' => 'Małoletni będzie potrzebował innego zweryfikowanego opiekuna, zanim obniży jakiekolwiek ustawienie ochrony (art. 24, §5).',
        'reason' => 'Uzasadnione przesłanki, że małoletni korzysta z tego konta niezgodnie z zasadami (art. 24, §4). Właściciel konta może się odwołać.',
        'no_appeal' => 'Nie zarejestrowano jeszcze odwołania.',
    ],

    'actions' => [
        'verify' => 'Zweryfikuj opiekuna',
        'revoke' => 'Odwołaj powiązanie',
        'appeal' => 'Zarejestruj odwołanie',
        'lift' => 'Uchyl zawieszenie',
        'uphold' => 'Utrzymaj zawieszenie',
    ],

    'notifications' => [
        'verified' => 'Opiekun zweryfikowany.',
        'revoked' => 'Powiązanie odwołane.',
        'appealed' => 'Odwołanie zarejestrowane.',
        'lift' => 'Zawieszenie uchylone.',
        'uphold' => 'Zawieszenie utrzymane.',
    ],
];
