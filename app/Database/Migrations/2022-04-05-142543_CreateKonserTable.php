<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductTable extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "pembuat" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "deskripsi" => [
                "type"=> "VARCHAR",
                "constraint" => "500",
            ],
            "harga" => [
                "type"=> "INT",
                "null" => true,
                "default" => null,
            ],
            "stok" => [
                "type"=> "INT",
                "null" => true,
                "default" => null,
            ],
            "komentar" => [
                "type"=> "VARCHAR",
                "constraint" => "400",
            ],
            "deleted_at" => [
                "type"=> "DATETIME",
                "null" => true, 
            ],
            "updated_at" => [
                "type"=> "DATETIME",
                "null" => true, 
            ],
            "created_at" => [
                "type"=> "DATETIME",
                "null" => true, 
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('konsers', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('konsers', true); //If Exists drop table products
    }
}