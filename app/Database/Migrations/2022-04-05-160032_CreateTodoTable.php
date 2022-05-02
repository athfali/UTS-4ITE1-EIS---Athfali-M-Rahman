<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTodoTable extends Migration
{
    public function up()
    {
        $fields = [
            "title" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "description" => [
                "null" => true,
                "type" => "TEXT",
            ],
            "finished_at" => [
                "type" => "TEXT",
                "constraint" => "date-time",
                "null" => true,
            ],
            "created_at" => [
                "type" => "TEXT",
                "constraint" => "date-time",
                "null" => true,
            ],
            "updated_at" => [
                "type"=> "TEXT",
                "constraint" => "date-time",
                "null"=> true,
            ],
            "deleted_at" => [
                "type"=> "TEXT",
                "constraint" => "date-time",
                "null"=> true,
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('Todo', true); //If NOT EXISTS create table products
    }
    public function down()
    {
        //
    }
}
