<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProfesorPropuesta extends Model
{
    use HasFactory;
    protected $table = 'profesor_propuesta';
    protected $primary ='propuesta_id';
    public $timestamps =false; 

    
}
