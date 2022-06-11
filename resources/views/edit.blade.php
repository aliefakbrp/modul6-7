@extends('layouts.main')
@section('content')
<h1 class="text-primary">Detail Mahasiswa</h1>
<form action="{{ route('update') }}" method="POST">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nama">nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama" value="{{ $mahasiswa->nama }}>
        </div>
        <div class=" form-group col-md-6">
            <label for="email">Alamat Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="masukkan email"
                value="{{ $mahasiswa->email }}">
        </div>
        <div class="form-group col-md-6">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" value="{{ $mahasiswa->nim }}>
        </div>
        <div class=" form-group col-md-6">
            <label for="alamat">Alamat Rumah</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" value="{{ $mahasiswa->alamat }}>
        </div>
    </div>
    <button type=" submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
