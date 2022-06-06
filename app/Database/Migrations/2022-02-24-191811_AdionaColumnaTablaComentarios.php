<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AdionaColumnaTablaComentarios extends Migration
{
    public function up()
    {
       

        $field = [
            'titulo'=> [
                'type'=> 'VARCHAR',
                'constraint'=> '100',
                'unique'=> true,
                'after'=> 'categoria',
            ],
        
        ];
        $this->forge->addColumn('comentarios',$field);
        
    }

    public function down()
    {
        $this->forge->dropColumn('comentarios','titulo');//
    }
}
