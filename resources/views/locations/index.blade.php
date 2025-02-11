@extends('layouts.template-dashboard') 

@section('user') 
    {{ isset($user) ? $user->name : 'username' }}
@endsection

@section('content') 
<div class="container">
    <div class="row stat-cards">
        <div class="col-md-9">
            <h2 class="main-title">Data Lokasi</h2>
        </div>
        <div class="col-md-3 text-right">
            <a href="#" 
            class="btn primary-default-btn transparent-btn" style="border-radius:20px;">
                Tambah Data Lokasi
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
                            <th>Nama Lokasi</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Kecamatan</th>
                            <th>Jenis Lokasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($locations as $row)
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->location_name }}</td>
                            <td>{{ $row->latitude }}</td>
                            <td>{{ $row->longitude }}</td>
                            <td>{{ $row->district_id }}</td>
                            <td>{{ $row->religion_id }}</td>
                            <td>
                                <span class="icon edit" aria-hidden="true"> Edit
                            </td>
                        @endforeach

                        @if ($locations->isEmpty())
                            <tr>
                                <td colspan="6">Tidak ada data lokasi</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
  
</div>
@endsection