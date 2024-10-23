@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1 style="color: black">Masukkan Media Partner</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('mediapartners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="mediapartner" class="form-label" style="color: black; font-size: 20px">Nama Media Partner</label>
                <input type="text" style="border-style: solid; border-width: 1px; border-color:black" class="form-control" id="mediapartner" name="mediapartner" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label" style="color: black; font-size: 20px" >Foto</label>
                <input type="file" style="border-style: solid; border-width: 1px; border-color:black" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
