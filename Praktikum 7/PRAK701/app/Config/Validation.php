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
     * @var string[]
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
    // --------------------------------------------------------------------
    public array $validasiBuku = [
        'judul' => [
            'rules' => 'required|string',
            'errors' => [
                'required' => 'Judul harus diisi',
                'string' => 'Judul harus berupa string'
            ],
        ],
        'penulis' => [
            'rules' => 'required|string',
            'errors' => [
                'required' => 'Penulis harus diisi',
                'string' => 'Penulis harus berupa string'
            ],
        ],
        'penerbit' => [
            'rules' => 'required|string',
            'errors' => [
                'required' => 'Penerbit harus diisi.',
                'string' => 'Penerbit harus berupa string'
            ],
        ],
        'tahun_terbit' => [
            'rules' => 'required|integer|greater_than[1800]|less_than[2024]',
            'errors' => [
                'required' => 'Tahun terbit harus diisi',
                'integer' => 'Tahun terbit harus berupa bilangan bulat',
                'greater_than' => 'Tahun terbit harus lebih besar dari 1800',
                'less_than' => 'Tahun terbit harus lebih kecil dari 2024'
            ],
        ],
    ];
}
