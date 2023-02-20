<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospects extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that should be casted to native types.
     * 
     * @var array
     */
    protected $fillable = [
        'pr_id',
        'pr_user_id',
        'pr_name',
        'pr_lastname_one',
        'pr_lastname_two',
        'pr_gender_id',
        'pr_age',
        'pr_marital_status_id',
        'pr_scholarship_id',
        'pr_career_id',
        'created_at'
    ];

    protected $primaryKey = "pr_id";

    /**
     * The table associated with the model.
     * 
     * @var string
     */

    protected $table = "prospects";
}
