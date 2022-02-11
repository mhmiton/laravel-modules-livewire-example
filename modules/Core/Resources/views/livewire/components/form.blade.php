<div>
    <div class="text-center mb-3">
        <h1 class="text-primary">Form</h1>
    </div>

    <div>
        <form action="javascript:;">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name <i class="text-danger">*</i></label>
                        <livewire:core::components.input name="name" required />
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="username" class="form-label">User Name <i class="text-danger">*</i></label>
                        <livewire:core::components.input name="username" required />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email <i class="text-danger">*</i></label>
                        <livewire:core::components.input type="email" name="email" required />
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone <i class="text-danger">*</i></label>
                        <livewire:core::components.input type="number" name="phone" required />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
