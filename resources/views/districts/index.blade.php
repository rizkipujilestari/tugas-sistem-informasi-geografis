@extends('layouts.template-dashboard') 

@section('user') 
    {{ isset($user) ? $user->name : 'username' }}
@endsection

@section('content') 
<div class="container">
    <div class="row stat-cards">
        <div class="col-md-12">
            <h2 class="main-title">Data Kecamatan</h2>
        </div>
    </div>

    <div class="row stat-cards">
        <div class="col-md-12" style="background: white; padding:30px; border-radius:20px;">
            <div class="users-table table-wrapper">
                <table class="posts-table">
                    <thead>
                        <tr class="users-table-info" style="color:black;">
                            <th>No.</th>
                            <th>Nama Kecamatan</th>
                            <th>Kode Kemendagri</th>
                            <th>Nama Kota</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($districts as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->code }}</td>
                            <td>{{ $row->city_id }}</td>
                        </tr>
                        @endforeach

                        @if ($districts->isEmpty())
                        <tr>
                            <td colspan="4">Tidak ada data agama.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
  
</div>
@endsection