<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model{
  // Database table
  protected $table = 'tbl_users';
  protected $primaryKey = 'id_user';
  protected $useAutoIncrement = true;
  protected $insertID = 0;
  protected $returnType = 'array';
  protected $useSoftDeletes = false;
  protected $protectedFields = true;
  protected $allowedFields = [
    'username',
    'passphrase',
    'role',
    'email'
  ];

}
