@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Edit Testimoni</h1>

    <form action="{{ route('testimoni.update', $testimoni->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- Form Fields Here (isi dengan nilai yang ada) -->
        <button type="submit" class="btn btn-primary">Perbarui Testimoni</button>
    </form>
</div>
@endsection
