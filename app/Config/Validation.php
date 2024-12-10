<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    public array $signup = [
        'username' => [
            'rules'  => 'required|max_length[30]|is_unique[users.ime]',
            'errors' => [
                'required' => 'Morate uneti korisničko ime.',
                'is_unique' => 'Ime je zauzeto. Unesite novo ime.',
            ],
        ],
        'password' => [
            'rules'  => 'required|min_length[8]',
            'errors' => [
                'required' => 'Morate uneti šifru.',
                'min_length' => 'Šifra mora sadržati minimum 8 cifara.',
            ],
        ],
        'password2' => [
            'rules'  => 'required|min_length[8]|matches[password]',
            'errors' => [
                'matches' => 'Ponovljena šifra mora biti ista kao uneta šifra.',
                'required' => 'Morate uneti šifru.',
                'min_length' => 'Šifra mora sadržati minimum 8 cifara.',
            ],
        ],
    ];
    public array $signin = [
        'username' => [
            'rules'  => 'required|max_length[30]|is_not_unique[users.ime]',
            'errors' => [
                'required' => 'Morate uneti korisničko ime.',
                'is_not_unique' => 'Pogrešno korisničko ime.',
            ],
        ],
        'password' => [
            'rules'  => 'required|min_length[8]|is_not_unique[users.sifra]',
            'errors' => [
                'required' => 'Morate uneti šifru.',
                'is_not_unique' => 'Pogrešna šifra.',
            ],
        ],
    ];
    // --------------------------------------------------------------------
}
