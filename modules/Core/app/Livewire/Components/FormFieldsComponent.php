<?php

namespace Modules\Core\Livewire\Components;

use Livewire\Form;

class FormFieldsComponent extends Form
{
    public $name;
    public $username;
    public $email;
    public $phone;

    protected function rules()
    {
        return [
            'name' => [
                'required',
                'max:255',
            ],
            'username' => [
                'required',
                'max:255',
            ],
            'email' => [
                'required',
                'email',
                'max:255',
            ],
            'phone' => [
                'required',
                'numeric',
            ],
        ];
    }
}
