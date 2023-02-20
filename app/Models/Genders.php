<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genders extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that should be casted to native types.
     * 
     * @var array
     */
    protected $fillable = [
        'ge_id',
        'ge_name',
        'created_at'
    ];

    protected $primaryKey = "ge_id";

    /**
     * The table associated with the model.
     * 
     * @var string
     */

    protected $table = "genders";
}
