<?php

namespace Modules\Core\Livewire\Components;

use Livewire\Component;

class FormComponent extends Component
{
    public FormFieldsComponent $form;

    public function resetForm()
    {
        $this->form->reset();
    }

    public function submit()
    {
        $this->validate();
    }

    public function render()
    {
        return view('core::livewire.components.form-component');
    }
}
