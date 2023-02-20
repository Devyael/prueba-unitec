<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that should be casted to native types.
     * 
     * @var array
     */
    protected $fillable = [
        'ca_id',
        'ca_scholarship_id',
        'ca_name',
        'created_at'
    ];

    protected $primaryKey = "ca_id";

    /**
     * The table associated with the model.
     * 
     * @var string
     */

    protected $table = "careers";
}
