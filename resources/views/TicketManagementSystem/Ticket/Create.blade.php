@extends('layouts.main')

@section('container') 
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg p-4 rounded">
                <h3 class="text-center mb-4">🎫 Create a New Ticket</h3>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('Ticket.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold">📌 Title</label>
                        <input type="text" name="title" class="form-control" 
                            placeholder="Enter ticket title" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label fw-bold">📝 Description</label>
                        <textarea name="description" class="form-control" rows="4" 
                            placeholder="Describe your issue in detail" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        🚀 Submit Ticket
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
