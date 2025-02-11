@extends('layouts.template-dashboard') 

@section('user') 
    {{ isset($user) ? $user->name : 'username' }}
@endsection

@section('content') 
<div class="container">
    <div class="row stat-cards">
        <div class="col-md-12">
            <h2 class="main-title">Data Agama</h2>
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
                            <th>Tempat Ibadah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($religion as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->description }}</td>
                        </tr>
                        @endforeach

                        @if ($religion->isEmpty())
                        <tr>
                            <td colspan="3">Tidak ada data agama.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
  
</div>
@endsection