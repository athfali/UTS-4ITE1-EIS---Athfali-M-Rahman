<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KonserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'pembuat' => 'Kelas A',
            'deskripsi'    => 'design ini dibuat dengan canva design ini dibuat dengan canva design ini dibuat dengan canva design ini dibuat dengan canva',
            'harga'    => 3000000,
            'stok'    => 100,
        ];

        // Simple Queries
        $this->db->table('konsers')->insert($data);
        
        $data = [
            'pembuat' => 'Kelas B',
            'deskripsi'    => 'design ini dibuat dengan canva design ini dibuat dengan canva design ini dibuat dengan canva design ini dibuat dengan canva',
            'harga'    => 2500000,
            'stok'    => 200,
        ];
        // Using Query Builder
        $this->db->table('konsers')->insert($data);

        $data = [
            'pembuat' => 'Kelas C',
            'deskripsi'    => 'design ini dibuat dengan canva design ini dibuat dengan canva design ini dibuat dengan canva design ini dibuat dengan canva',
            'harga'    => 1500000,
            'stok'    => 350,
        ];
        // Using Query Builder
        $this->db->table('konsers')->insert($data);

        $data = [
            'pembuat' => 'Kelas D',
            'deskripsi'    => 'design ini dibuat dengan canva design ini dibuat dengan canva design ini dibuat dengan canva design ini dibuat dengan canva',
            'harga'    => 1250000,
            'stok'    => 400,
        ];
        // Using Query Builder
        $this->db->table('konsers')->insert($data);
    }
}