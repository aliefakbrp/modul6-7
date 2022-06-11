@extends('layouts.main')
@section('content')
<div class="row mt-5 ml-5">
    @foreach ($mahasiswas as $mahasiswa)
    <div class="col-sm-5 card rounded m-4">
        <div class="col-sm card-body " style="">
            <h5 class="card-title mr-5">{{ $mahasiswa->nama }}
                {{-- <a href="{{ route('edit', $mahasiswa->nim) }}" class="bg-primary ml-4 p-1 px-2 rounded"
                    style="float:right; clear:left"><i class="fas fa-solid fa-pen" style="color: white; "></i></a>
                <a href="{{ route('delete', $mahasiswa->nim) }} " class="bg-light ml-5 p-1 px-2 rounded"
                    style="float:right; clear:left"><i class="fas fa-solid fa-trash" style="color: red"></i></a> --}}
            </h5>
            <p class="card-text">{{ $mahasiswa->nim }}</p>
            <p class="card-text">{{ $mahasiswa->email }}</p>
            <p class="card-text">{{ $mahasiswa->alamat }}</p>

        </div>
        <div class="col card-body">
            <a href="{{ route('delete', $mahasiswa->nim) }} " class="bg-light p-1 px-2 rounded" style=""><i
                    class="fas fa-solid fa-trash" style="color: red"></i></a>
            <a href="{{ route('edit', $mahasiswa->nim) }}" class="bg-primary  p-1 px-2 rounded" style=""><i
                    class="fas fa-solid fa-pen" style="color: white; "></i></a>
        </div>
    </div>
    @endforeach
</div>
@endsection
