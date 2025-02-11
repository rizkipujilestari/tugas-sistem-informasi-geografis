@extends('layouts.template-dashboard') 

@section('user') 
    {{ isset($user) ? $user->name : 'username' }}
@endsection

@section('content') 
<div class="container">
    <div class="row stat-cards">
        <div class="col-md-9">
            <h2 class="main-title">Data Users</h2>
        </div>
        <div class="col-md-3 text-right">
            <a href="#" 
            class="btn primary-default-btn transparent-btn" style="border-radius:20px;">
                Tambah Data User
            </a>
        </div>
    </div>

    <div class="row stat-cards">
        <div class="col-md-12" style="background: white; padding:30px; border-radius:20px;">
            <div class="users-table table-wrapper">
                <table class="posts-table">
                    <thead>
                        <tr class="users-table-info" style="color:black;">
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>{{ $row->role }}</td>
                        </tr>
                        @endforeach

                        @if ($users->isEmpty())
                        <tr>
                            <td colspan="5">Tidak ada data agama.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
  
</div>
@endsection