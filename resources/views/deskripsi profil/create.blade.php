@extends('layouts.dashboard')
@section('title', 'Dashboard Admin I Profil Perusahaan')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center" style="color: #343a40;">Tambah Deskripsi</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('deskripsi profil.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="description" style="color: #495057; font-size: 18px;">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="6" style="border: 1px solid #ced4da;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 btn-block">Tambah</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script> <!-- Menggunakan full build -->
    <script>
        // Inisialisasi CKEditor dengan opsi tambahan
        CKEDITOR.replace('description', {
            height: 300, // Tinggi editor
            toolbar: [
                { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'Undo', 'Redo'] },
                { name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll'] },
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat'] },
                { name: 'styles', items: ['Font', 'FontSize'] }, // Menambahkan pemilihan font dan ukuran
                { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'] },
                { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar'] },
                { name: 'alignment', items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] }, // Menambahkan alat meratakan teks
                { name: 'tools', items: ['Maximize', '-', 'ShowBlocks'] }
            ],
            // Menambahkan font dan ukuran font yang kustom
            font_names: 'Arial;Comic Sans MS;Courier New;Georgia;Times New Roman;Verdana',
            fontSize_sizes: '8/Small;10/Normal;12/Medium;14/Large;16/X-Large;18/XX-Large;20/XXX-Large',
            // Menambahkan gaya font
            stylesSet: [
                { name: 'Normal', element: 'p' },
                { name: 'Heading 1', element: 'h1' },
                { name: 'Heading 2', element: 'h2' },
                { name: 'Heading 3', element: 'h3' },
                { name: 'Quote', element: 'blockquote' },
                { name: 'Highlighted', element: 'span', attributes: { 'class': 'highlight' } }
            ]
        });
    </script>

    <style>
        /* Anda dapat menambahkan style CSS tambahan di sini */
        .highlight {
            background-color: yellow; /* Contoh gaya highlight */
        }
    </style>
@endsection
