<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UserEdit extends Component
{

    public $user_id;
    public $name;
    public $email;
    public $password;
    public $tipo = null;

    protected array $rules = [];

    public function mount($user)
    {
        $roles = $user->roles()->get();
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->tipo = $roles[0]->id;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$this->user_id,
            'tipo' => 'required'
        ];
    }

    public function render()
    {
        $roles = Role::all();
        return view('livewire.admin.users.user-edit', compact('roles'));
    }

    public function update()
    {
        $this->validate();
        $user = User::find($this->user_id);
        $user->name = $this->name;
        $user->email = $this->email;
        if ($user->save()) {
            $user->roles()->sync([$this->tipo]);
            $this->cancel();
        }
    }

    public function cancel()
    {
        return redirect()->route('admin.users.index');
    }
}
