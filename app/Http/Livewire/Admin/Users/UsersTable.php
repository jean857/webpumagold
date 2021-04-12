<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Traits\HtmlComponents;
use Rappasoft\LaravelLivewireTables\Views\Column;

class UsersTable extends TableComponent
{

    use HtmlComponents;
    public $perPage = 10;
    public $userBeginRemoved = null;
    protected $listeners = ['remove'];


    public function query(): Builder
    {
        return User::where('id', '!=', Auth::id())->orderBy('id', 'desc');
    }

    public function columns(): array
    {
        return [
            Column::make('Nombre', 'name')
                ->searchable(),
            Column::make('Email', 'email')
                ->searchable(),
            Column::make('Tipo de usuario')
                ->format(function (User $model) {
                    return view('admin.users.includes.roles', ['user_roles' => $model->getRoleNames()]);
                }),
            Column::make('Acciones')
                ->format(function (User $model) {
                    return view('admin.users.includes.actions', ['user' => $model]);
                })
        ];

    }

    public function confirmServiceRemoval($user_id)
    {
        $this->userBeginRemoved = $user_id;
        $this->dispatchBrowserEvent('swal:confirm', [
            'title' => '¿Está seguro?',
            'text' => '¡No podrás revertir esto!'
        ]);
    }

    public function remove()
    {
        User::find($this->userBeginRemoved)->delete();
    }
}
