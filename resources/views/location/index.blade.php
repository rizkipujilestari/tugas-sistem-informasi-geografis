@extends('layouts.main') 

@section('user') 
    {{ isset($user) ? $user->name : 'username' }}
@endsection

@section('content') 
<div class="container">
    <div class="row stat-cards">
        <div class="col-md-9">
            <h2 class="main-title">Data Siswa</h2>
        </div>
        <div class="col-md-3 text-right">
            <a href="{{ route('student.create') }}" class="btn primary-default-btn transparent-btn" style="border-radius:20px;">Tambah Data Siswa</a>
        </div>
    </div>

    <div class="row stat-cards">
        <div class="col-md-12" style="background: white; padding:30px; border-radius:20px;">
            <div class="users-table table-wrapper">
                <table class="posts-table">
                    <thead>
                        <tr class="users-table-info">
                            <th>No.</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Kelas</th>
                            <th>Sekolah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student as $adik)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $adik->nisn }}</td>
                            <td>{{ $adik->name }}</td>
                            <td>{{ $adik->gender }}</td>
                            <td>{{ $adik->class }}</td>
                            <td>{{ $adik->school }}</td>
                            <td>
                                <span class="p-relative">
                                    <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                    <div class="sr-only">More info</div>
                                    <i data-feather="more-horizontal" aria-hidden="true"></i>
                                    </button>
                                    <ul class="users-item-dropdown dropdown">
                                    <li><a href="{{ route('student.show', $adik->id) }}">Detail</a></li>
                                    <li><a href="{{ route('student.edit', $adik->id) }}">Edit</a></li>
                                    <li><a href="{{ route('student.destroy', $adik->id) }}">Hapus</a></li>
                                    </ul>
                                </span>
                            </td>
                        </tr>
                        @endforeach

                        @if ($student->isEmpty())
                        <tr>
                            <td colspan="7">Tidak ada data adik siswa.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
  
</div>
@endsection