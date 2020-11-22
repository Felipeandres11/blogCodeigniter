<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {

    protected $table="user";
    protected $primarykey = "id";


    protected $returnType="array";

    //Si en nuestra base de datos hay un campo que se llama deleted lo marcara como 1, en vez de eliminar el registro
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'username', 'password','role','last_login'];


}


?>