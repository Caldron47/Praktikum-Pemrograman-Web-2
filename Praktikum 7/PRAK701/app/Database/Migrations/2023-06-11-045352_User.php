<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type" => "INT",
                "constraint" => 5,
                "auto_increment" => true
            ],
            "username" => [
                "type" => "VARCHAR",
                "constraint" => 255,
            ],          
            "email" => [
                "type" => "VARCHAR",
                "constraint" => 255,
            ],
            "password" => [
                "type" => "text",
            ],
        ];
        $this->forge->addField($fields);
        $this->forge->addKey("id", true);
        $this->forge->createTable("user");

    }

    public function down()
    {
        $this->forge->dropTable("user", true);
    }
}
