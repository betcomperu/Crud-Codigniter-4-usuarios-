<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ComentarioSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'categoria' => 'Sofware',
            'descripcion'    => 'Las noticias sobre los softwares mas importantes.',
           
        ];
        $this->db->table('comentarios')->insert($data);
        

        // Simple Queries
    //    $this->db->query("INSERT INTO comentarios (categoria, descripcion) VALUES(:categoria:, :descripcion:)", $data);
    $data = [
        'categoria' => 'Redes',
        'descripcion'    => 'Todo el acontecer de las redes y conectividad.',
       
    ];
        // Using Query Builder
        $this->db->table('comentarios')->insert($data);
    }
    }

