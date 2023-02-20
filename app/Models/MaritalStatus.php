<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaritalStatus extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that should be casted to native types.
     * 
     * @var array
     */
    protected $fillable = [
        'ms_id',
        'ms_name',
        'created_at'
    ];

    protected $primaryKey = "ms_id";

    /**
     * The table associated with the model.
     * 
     * @var string
     */

    protected $table = "marital_status";
}
