<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = new UserModel();
        $model->insert([
            "username" => "Andra",
            "email" => "andra@gmail.com",
            "password" => password_hash("123456", PASSWORD_DEFAULT)
        ]);
    }
}
