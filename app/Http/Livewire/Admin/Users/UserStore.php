<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UserStore extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $tipo = null;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|unique:users|email',
        'password' => 'required|min:8|required_with:password_confirmation|same:password_confirmation',
        'password_confirmation' => 'required|min:8',
        'tipo' => 'required'
    ];

    public function render()
    {
        $roles = Role::all();
        return view('livewire.admin.users.user-store',compact('roles'));
    }

    public function store()
    {
        $this->validate();
        $newUser = new User();
        $newUser->name = $this->name;
        $newUser->email = $this->email;
        $newUser->password = Hash::make($this->password);
        if ($newUser->save()) {
            $newUser->roles()->sync([$this->tipo]);
            $this->cancel();
        }

    }

    public function cancel()
    {
        return redirect()->route('admin.users.index');
    }
}
