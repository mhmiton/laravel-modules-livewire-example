<div>
    <div class="text-center mb-3">
        <h1 class="text-primary">Form</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form wire:submit="submit">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <x-core::input :label="__('Name')" wire:model="form.name" />
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <x-core::input :label="__('Username')" wire:model="form.username" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <x-core::input :label="__('Email')" wire:model="form.email" />
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <x-core::input :label="__('Phone')" wire:model="form.phone" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-danger" wire:click="resetForm">Reset</button>
                    </div>
                </div>
            </form>

            <div class="mt-3">
                <code><pre>{{ json_encode($this->form->all(), JSON_PRETTY_PRINT) }}</pre></code>
            </div>
        </div>
    </div>
</div>
