@extends('layouts.dashboard')
@section('title', 'Dashboard Admin I Guest Messages')
@section('content')
    <h1 class="dashboard-title">Guest Messages</h1>
    <div class="table-container">
        <table class="message-table">
            <thead>
                <tr>
                    <th style="color: black">Username</th>
                    <th style="color: black">Email</th>
                    <th style="color: black">Message</th>
                    <th style="color: black">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td data-label="Username">{{ $message->username }}</td>
                        <td data-label="Email">{{ $message->email }}</td>
                        <td data-label="Message">{{ $message->message }}</td>
                        <td data-label="Date">{{ $message->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <style>
        .dashboard-title {
            color: black;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            padding: 0 1rem;
        }

        .table-container {
            width: 100%;
            overflow-x: auto;
            padding: 0 1rem;
        }

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

        /* Responsive styles */
        @media screen and (max-width: 768px) {
            .message-table {
                border: 0;
            }

            .message-table thead {
                display: none;
            }

            .message-table tbody tr {
                display: block;
                margin-bottom: 1rem;
                border: 1px solid #e2e8f0;
                border-radius: 8px;
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
            }

            .message-table td {
                display: block;
                text-align: right;
                padding: 0.75rem 1rem;
                position: relative;
                border-bottom: 1px solid #e2e8f0;
            }

            .message-table td:last-child {
                border-bottom: 0;
            }

            .message-table td::before {
                content: attr(data-label);
                float: left;
                font-weight: 600;
                text-transform: uppercase;
                font-size: 0.75rem;
                color: #4a5568;
            }

            .message-table td:nth-child(3) {
                max-width: none;
            }
        }

        @media screen and (max-width: 480px) {
            .dashboard-title {
                font-size: 1.25rem;
            }

            .message-table td {
                padding: 0.5rem 0.75rem;
            }
        }
    </style>
@endsection
