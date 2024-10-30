@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1 style="color: black">Media Partner</h1>
        <a href="{{ route('mediapartners.create') }}" class="btn btn-primary">Masukkan Media Partner</a>

        @if (session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Logo MediaPartner</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mediapartners as $mediapartner)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if ($mediapartner->image)
                                <img src="{{ asset('storage/' . $mediapartner->image) }}"
                                    alt="{{ $mediapartner->mediapartner }}" width="100">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('mediapartners.toggle-status', $mediapartner->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-sm {{ $mediapartner->is_active ? 'btn-success' : 'btn-secondary' }}">
                                    {{ $mediapartner->is_active ? 'Active' : 'Inactive' }}
                                </button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('mediapartners.edit', $mediapartner->id) }}" class="btn btn-warning">Edit</a>
                            <form action="/admin/mediapartner/{{ $mediapartner->id }}/delete" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
