@extends('admin.app')

@section('content')
<div class="container mt-5"> <!-- Tambahkan margin atas untuk memberi jarak -->
    <div class="d-flex justify-content-between align-items-center mb-4"> <!-- Flexbox untuk judul dan tombol tambah -->
        <h3 class="text-primary">Data Table User</h3> <!-- Beri warna pada judul -->
        <a href="{{ route('users.create') }}" class="btn btn-success">Add New User</a> <!-- Ubah warna tombol -->
    </div>

    <div class="table-responsive"> <!-- Tambahkan table-responsive untuk menghindari overflow -->
        <table class="table table-striped table-hover table-bordered"> <!-- Tambahkan striped dan hover -->
            <thead class="thead-dark"> <!-- Ubah gaya header tabel -->
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th class="text-center">Actions</th> <!-- Center align actions -->
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                        @foreach($user->getRoleNames() as $role)
                            <span class="badge bg-primary">{{ $role }}</span>
                        @endforeach
                         <!-- Menampilkan nama role -->
                        <td class="text-center">
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a> <!-- Buat tombol kecil -->
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button> <!-- Tombol kecil -->
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
