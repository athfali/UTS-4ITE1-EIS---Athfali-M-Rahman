<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPhotoColumnToKonser extends Migration
{
    public function up()
    {
        $fields = [
            "photo" => [
                "type"=> "TEXT",
            ],
        ];

        $this->forge->addColumn('konsers', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('konsers', 'photo');
    }
}
