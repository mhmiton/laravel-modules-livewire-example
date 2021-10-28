<div class="col-lg-3">
    <div class="shadow rounded">
        <div class="p-3 border-bottom">
            <form action="" method="POST">
                @csrf

                <input type="search" class="form-control" name="search_user" id="search_user" placeholder="Search User" required />
            </form>
        </div>

        <div style="overflow: hidden; overflow-y: auto; height: calc(100vh - 252px);">
            @foreach ($users as $user)
                <a href="" class="text-decoration-none">
                    <div class="d-flex align-items-center border-bottom p-3" @if ($loop->first) style="background: #8cc53f36;" @endif>
                        <div class="me-3 position-relative">
                            <img src="https://ui-avatars.com/api/?name={{ $user->name }}&background=000&size=150&color=fff" class="img-fluid rounded-circle" alt="User" width="50" height="50" loading="lazy" />

                            <span class="position-absolute badge border border-light rounded-circle bg-success p-1 top-0 end-0">
                                <span></span>
                            </span>
                        </div>

                        <div class="w-100">
                            <span class="text-primary">{{ Str::limit($user->name, 15) }}</span>
                        </div>

                        <div class="text-end">
                            <span class="badge bg-danger">{{ rand(1, 9) }}</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
