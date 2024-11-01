@extends('layouts.dashboard')
@section('title', 'Dashboard Admin I Media Partner')

@section('content')
    <div class="container">
        <h1 style="color: black">Masukkan Media Partner</h1>

        <!-- Form untuk input media partner -->
        <form action="{{ route('mediapartners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="mediapartner" class="form-label" style="color: black; font-size: 20px">Nama Media Partner</label>
                <input type="text" class="form-control" id="mediapartner" name="mediapartner" required
                       style="border-style: solid; border-width: 1px; border-color:black">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label" style="color: black; font-size: 20px">Foto</label>
                <input type="file" class="form-control" id="image" name="image"
                       style="border-style: solid; border-width: 1px; border-color:black">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- SweetAlert untuk memeriksa jika foto tidak diunggah -->
    @if ($errors->has('image'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Ups...',
                    html: 'Anda belum memasukkan foto',
                    confirmButtonText: 'OK'
                });
            });
        </script>
    @endif
@endsection
