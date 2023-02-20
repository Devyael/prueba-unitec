<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\Auth\{RegisterController};
use App\Http\Controllers\{ProspectsControllers};

use App\Models\{Careers, Genders, MaritalStatus, Prospects, Scholarship};

class Register extends Component
{
    /**
     * @var variables
     */

    public $name, $lastnameOne, $lastnameTwo, $gender, $age, $maritalStatus, $email, $password, $passwordConfirmation, $scholarship, $career;
    
    public $genders, $maritals, $scholarships, $careers = [];

    private $registerController, $prospectsController;

    protected $rules = [
        'name' => 'required|string|min:2',
        'lastnameOne' => 'required|string|min:2',
        'lastnameTwo' => 'required|string|min:2',
        'gender' => 'required',
        'age' => 'required|numeric|between:1,100',
        'maritalStatus' => 'required',
        'scholarship' => 'required',
        'career' => 'required_if:scholarship,2|required_if:scholarship,3',
        'email' => 'required|string|email|min:2|max:255|unique:users',
        'password' => 'required|string|min:8'
    ];

    protected $validationAttributes  = [
        'name' => 'nombre (s)',
        'lastnameOne' => 'apellido paterno',
        'lastnameTwo' => 'apellido materno',
        'gender' => 'género',
        'age' => 'edad',
        'maritalStatus' => 'estado civíl',
        'scholarship' => 'nivel de interes',
        'career' => 'carrera',
        'email' => 'correo electrónico',
        'password' => 'contraseña',
    ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function mount()
    {
        $this->genders = Genders::get();
        $this->maritals = MaritalStatus::get();
        $this->scholarships = Scholarship::get();
    }

    public function careersCollections()
    {
        $this->careers = Careers::where('ca_scholarship_id', $this->scholarship)->get();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function registerNewUser(
        RegisterController $registerController, 
        ProspectsControllers $prospectsController
    ) {
        // Assigning the controllers to use
        $this->registerController = $registerController;
        $this->prospectsController = $prospectsController;

        $this->validate();

        // External function call -> Add users
        $user = $this->registerController->create([
            "name" => $this->name,
            "email" => $this->email,
            "password" => $this->password,
        ]);

        // External function call -> Add prospects
        $prospect = $this->prospectsController->create([
            "user_id" => $user->id,
            "name" => $this->name,
            "lastname_one" => $this->lastnameOne,
            "lastname_two" => $this->lastnameTwo,
            "gender_id" => $this->gender,
            "age" => $this->age,
            "marital_status_id" => $this->maritalStatus,
            "scholarship_id" => $this->scholarship,
            "career_id" => $this->career
        ]);

        session()->flash('message', true);

        // Reset variables
        $this->name = NULL;
        $this->lastnameOne = NULL;
        $this->lastnameTwo = NULL;
        $this->gender = NULL;
        $this->age = NULL;
        $this->maritalStatus = NULL;
        $this->scholarship = NULL;
        $this->career = NULL;
        $this->email = NULL;
        $this->password = NULL;
        $this->passwordConfirmation = NULL;
    }

    /**
     * Livewire render.
     *
     * @return void
     */

    public function render()
    {
        return view('livewire.register');
    }
}
