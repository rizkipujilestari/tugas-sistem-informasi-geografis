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
                <div class="alert alert-success-custom" style="margin-bottom:20px;">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    {{ session('success') }}
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
                                <button onclick="window.location.href='{{ url('admin/locations/'.$row->id) }}';" class="btn secondary-default-btn transparent-btn"> <i data-feather="edit" aria-hidden="true"></i> </button>
                                <form action="{{ url('admin/locations/'.$row->id) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn secondary-default-btn transparent-btn"><i data-feather="trash" aria-hidden="true"></i></button>
                                </form>
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
  
</div>
@endsection