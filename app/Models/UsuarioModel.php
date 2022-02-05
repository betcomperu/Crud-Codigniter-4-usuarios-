<?php

namespace App\Models;
use CodeIgniter\Model;

/* Users Model */

class UsuarioModel extends Model{

    /* Name of database table */
    protected $table = "usuario";

    /* name of primary key field */
    protected $primaryKey = "idusuario";

    /* type of returned data */
    protected $returnType = 'array';

    protected $useTimestamps = true;
    
    /* default fields that will be inserted */
    protected $allowedFields = ['nombre', 'correo', 'usuario','clave','rol', "foto",'condicion', 'fecha_alta','fecha_edit'];

    /* automatic date create in database */
    protected $createdField = "fecha_alta";
    protected $updatedField = "fecha_edit";

    protected $validationRule = [];
    protected $validationMessages = [];
    protected $skypValidation = false;

    
    protected function antesInsertar(array $data){
        $data = $this->passwordHash($data);
        $data['data']['created_at'] = date('Y-m-d H:i:s');
    
        return $data;
      }
    
      protected function antesActualizar(array $data){
        $data = $this->passwordHash($data);
        $data['data']['updated_at'] = date('Y-m-d H:i:s');
        return $data;
      }
    
      protected function claveHash(array $data){
        if(isset($data['data']['password']))
          $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
    
        return $data;
      }

}