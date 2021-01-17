<div>
    <div class="text-center mb-3">
        <h1 class="text-primary">Data List</h1>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $key => $user)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>