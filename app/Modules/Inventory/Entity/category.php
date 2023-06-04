<?php

namespace App\Modules\Inventory\Entity;

use Illuminate\Database\Eloquent\Model;

/**
 * @property  int id
 * @property string name
 * @property string code
 */

class category extends Model
{ 
    // provide Name
    Protected $table = "inv_category";
}
