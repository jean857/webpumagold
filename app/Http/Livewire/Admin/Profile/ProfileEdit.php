<?php

namespace App\Http\Livewire\Admin\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileEdit extends Component
{
    public $user_id;
    public $name;
    public $email;

    protected array $rules = [];

    public function mount()
    {
        $this->user_id = Auth::user()->id;
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$this->user_id,
        ];
    }

    public function update()
    {
        $this->validate();
        $user = User::find($this->user_id);
        $user->name = $this->name;
        $user->email = $this->email;
        if ($user->save()) {
            $this->cancel();
        }
    }


    public function render()
    {
        return view('livewire.admin.profile.profile-edit');
    }

    public function cancel()
    {
        return redirect()->route('admin.profile.index');
    }
}
