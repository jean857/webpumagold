<?php

namespace App\Http\Livewire\Admin\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class PasswordEdit extends Component
{
    public $password;
    public $password_confirmation;

    protected $rules = [
        'password' => 'required|min:8|required_with:password_confirmation|same:password_confirmation',
        'password_confirmation' => 'required|min:8',
    ];

    public function render()
    {
        return view('livewire.admin.profile.password-edit');
    }

    public function update()
    {
        $this->validate();
        $newUser = User::find(Auth::id());
        $newUser->password = Hash::make($this->password);
        if ($newUser->save()) {
            $this->cancel();
        }

    }

    public function cancel()
    {
        return redirect()->route('admin.profile.password.index');
    }
}
