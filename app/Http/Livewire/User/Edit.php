<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;
use WireUi\Traits\Actions;

class Edit extends Component
{
    use Actions;
    public $firstName;
    public $middleName;
    public $lastName;
    public $email;

    public $user;

    //public $rules =[
    //   'firstName' => 'required',
    //   'middleName' => 'required',
    //   'lastName' => 'required',
    //   'email' => 'required|unique',
    //];

    //mount function only called once everytime for rendering components
    public function mount(User $user){
        $this->user = $user; //select * from user where id= user
        $this->firstName = $user->first_name;
        $this->middleName = $user->middle_name;
        $this->lastName = $user->Last_name;
        $this->email = $user->email;
    }

    public function update($id){

        $validated = Validator::make(
            [
                'firstName' =>$this->firstName,
                'lastName' =>$this->lastName,
                'middleName' =>$this->middleName,
                'email' =>$this->email,

            ],
            [
                'firstName' => 'required',
                'middleName' => 'required',
                'lastName' => 'required',
                'email' => [
                    'required',
                    Rule::unique('users', 'email')->ignore($this->user->id),
                ]
            ],
        )->validate();

        try{
            DB::beginTransaction();

            $user = User::find($id);
            $user->first_name = $this->firstName;
            $user->Last_name = $this->lastName;
            $user->middle_name = $this->middleName;
            $user->email = $this->email;

            if($user->save()){
                DB::commit();
                $this->dialog()->success(
                    $title = "Profile Saved",
                    $description = 'Your profile was successfully saved'
                );
            }else{
                DB::rollback();
                $this->dialog()->error(
                    $title = 'Error !!!',
                    $description = 'Your profile was not saved'
                );
            }

        }catch(\Throwable $th){
            DB::rollBack();
            dd($th->getMessage());
        }
    }


    //render is called everytime it's refreshed
    public function render()
    {
        return view('livewire.user.edit');
    }
}
