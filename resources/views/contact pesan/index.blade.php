@extends('layouts.dashboard')
@section('title', 'Dashboard Admin I Pesan dari User')

@section('content')
    <h1  style="color: black">Guest Messages</h1>
    <table class="message-table">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
                <tr>
                    <td>{{ $message->username }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->message }}</td>
                    <td>{{ $message->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <style>
        .message-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    background-color: #ffffff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
                0 2px 4px -1px rgba(0, 0, 0, 0.06);
    margin-bottom: 2rem;
}

.message-table thead {
    background-color: #f8fafc;
}

.message-table th {
    padding: 1rem;
    font-weight: 600;
    text-align: left;
    text-transform: uppercase;
    font-size: 0.875rem;
    color: #4a5568;
    border-bottom: 2px solid #e2e8f0;
}

.message-table td {
    padding: 1rem;
    vertical-align: top;
    border-bottom: 1px solid #e2e8f0;
    color: #2d3748;
}

.message-table tbody tr {
    transition: background-color 0.2s ease;
}

.message-table tbody tr:hover {
    background-color: #f7fafc;
}

.message-table td:nth-child(1) {
    font-weight: 500;
    color: #2d3748;
}

.message-table td:nth-child(2) {
    color: #4a5568;
}

.message-table td:nth-child(3) {
    max-width: 400px;
    white-space: pre-wrap;
    word-wrap: break-word;
}

.message-table td:nth-child(4) {
    font-size: 0.875rem;
    color: #718096;
}
    </style>
@endsection


