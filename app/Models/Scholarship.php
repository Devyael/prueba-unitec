<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that should be casted to native types.
     * 
     * @var array
     */
    protected $fillable = [
        'sc_id',
        'sc_name',
        'created_at'
    ];

    protected $primaryKey = "sc_id";

    /**
     * The table associated with the model.
     * 
     * @var string
     */

    protected $table = "scholarship";
}
