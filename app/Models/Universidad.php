<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;


#[Table('universidades')]
#[Table(key: 'id_universidad')]
#[Table(key: 'uuid', keyType: 'string', incrementing: false)]
#[Cast(['inicio_semestre'=>'date', 'fin_semestre'=>'date'])]
class Universidad extends Model
{
    use HasUuids;

}
