<?php

namespace App\Models;

use CodeIgniter\Model;

class StBModel extends Model{
  protected $table = 'stasiun';

  protected $primaryKey = 'id';

  protected $useAutoIncrement = true;

  protected $returnType = 'array';

  /* protected $useSoftDeletes = true; */

  protected $allowedFields = [
    'nama_stasiun',
    'latitude',
    'longitude'
  ];
}
?>
