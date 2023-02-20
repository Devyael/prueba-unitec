<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prospects;

use Carbon\Carbon;

class ProspectsControllers extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        return Prospects::create([
            'pr_user_id' => $data['user_id'],
            'pr_name' => $data['name'],
            'pr_lastname_one' => $data['lastname_one'],
            'pr_lastname_two' => $data['lastname_two'],
            'pr_gender_id' => $data['gender_id'],
            'pr_age' => $data['age'],
            'pr_marital_status_id' => $data['marital_status_id'],
            'pr_scholarship_id' => $data['scholarship_id'],
            'pr_career_id' => $data['career_id'] ? $data['career_id'] : NULL,
            'created_at' => Carbon::now(),
        ]);
    }
}
