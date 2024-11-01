@extends('layouts.dashboard')
@section('title', 'Dashboard Admin I Media Partner')

@section('content')
    <form action="{{ route('mediapartners.update', $mediapartner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="mediapartner" class="form-label" style="color: black; font-size: 20px"> Nama Media Partner</label>
            <input type="text" style="border-style: solid; border-width: 1px; border-color:black" class="form-control"
                id="mediapartner" name="mediapartner" value="{{ $mediapartner->mediapartner }}" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label" style="color: black; font-size: 20px">Foto</label>
            <input type="file" style="border-style: solid; border-width: 1px; border-color:black" class="form-control"
                id="image" name="image">
            @if ($mediapartner->image)
                <img src="{{ asset('storage/' . $mediapartner->image) }}" alt="Media Partner Image" width="100"
                    class="mt-2">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
