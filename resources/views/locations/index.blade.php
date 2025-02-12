@extends('layouts.template-dashboard') 

@section('user') 
    {{ isset($user) ? $user->name : 'username' }}
@endsection

@section('content') 
<div class="container">
    <div class="row stat-cards">
        <div class="col-md-9">
            <h2 class="main-title">Data Lokasi</h2>

            @if (session('success'))
                <div class="alert badge-success" id="message">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert badge-danger" id="message">
                    {{ session('danger') }}
                </div>
            @endif
        </div>
        <div class="col-md-3 text-right">
            <a href="{{ url('admin/locations/new') }}" 
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
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->location_name }}</td>
                            <td>{{ $row->latitude }}</td>
                            <td>{{ $row->longitude }}</td>
                            <td>{{ $row->district->name }}</td>
                            <td>{{ $row->religion->description }}</td>
                            <td>
                                <i data-feather="edit" aria-hidden="true"></i>
                                <i data-feather="trash" aria-hidden="true"></i>
                            </td>
                        </tr>
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
  
    <script>
        setTimeout(function() {
            $('#message').fadeOut('slow'); 
        }, 3000);
    </script>
</div>
@endsection