@extends('layouts.template-dashboard') 

@section('user') 
    {{ isset($user) ? $user->name : 'username' }}
@endsection

@section('content') 
<div class="container">
    <div class="row stat-cards">
        <div class="col-md-9">
            <h2 class="main-title">Edit Data Lokasi</h2>
        </div>
        <div class="col-md-3 text-right">
            <a href="{{ url('admin/locations') }}" 
            class="btn secondary-default-btn transparent-btn" style="border-radius:20px;">
                Kembali
            </a>
        </div>
    </div>

    <div class="row stat-cards">
        <div class="col-md-12" style="background: white; padding:30px; border-radius:20px;">
            <div class="users-table table-wrapper">
                <form class="sign-up-form form" action="{{ url('admin/locations/'.$location->id) }}" method="POST">
                @csrf
                @method('PUT')

                    @if ($errors->any())
                        <div class="alert alert-danger" style="margin: 5px; color:red;">
                            <ul>
                                @foreach ($errors->all() as $item)
                                    <li style="margin-bottom: 10px;">{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <br>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label-wrapper">
                                <p class="form-label">Nama Lokasi</p>
                                <input class="form-input" type="text" id="location_name" name="location_name" value="{{ $location->location_name }}" />
                            </label>
                            <label class="form-label-wrapper">
                                <p class="form-label">Latitude</p>
                                <input class="form-input" type="text" id="latitude" name="latitude" value="{{ $location->latitude }}" />
                            </label>
                            <label class="form-label-wrapper">
                                <p class="form-label">Longitude</p>
                                <input class="form-input" type="text" id="longitude" name="longitude" value="{{ $location->longitude }}" />
                            </label>
                            <label class="form-label-wrapper">
                                <p class="form-label">Description</p>
                                <input class="form-input" type="text" id="description" name="description" value="{{ $location->description }}" />
                            </label>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label-wrapper">
                                <p class="form-label">Alamat</p>
                                <input class="form-input" type="text" id="address" name="address" value="{{ $location->address }}" />
                            </label>
                            <label class="form-label-wrapper">
                                <p class="form-label">Jenis Lokasi</p>
                                <select name="religion_id" class="form-input">
                                    <option value="">-- Pilih Jenis --</option>
                                    @foreach ($religions as $religion)
                                        <option value="{{ $religion->id }}" {{ $location->religion_id == $religion->id ? 'selected' : '' }}>
                                            {{ $religion->description }}
                                        </option>
                                    @endforeach
                                </select>
                            </label>
                            <label class="form-label-wrapper">
                                <p class="form-label">Kecamatan</p>
                                <select name="district_id" class="form-input">
                                    <option value="">-- Pilih Kecamatan --</option>
                                    @foreach ($districts as $district)
                                        <option value="{{ $district->id }}" {{ $location->district_id == $district->id ? 'selected' : '' }}>
                                            {{ $district->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </label>

                            <label class="form-label-wrapper">
                                <p class="form-label">&nbsp;</p>
                                <input type="submit" class="form-btn primary-default-btn transparent-btn" value="Simpan Perubahan" style="border-radius:20px;"/>
                            </label>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
  
</div>
@endsection