@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Contact') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('contacts.store') }}">
                            <input type="hidden" name="id" value="{{ $contact->id ?? '' }}">
                            @csrf

                            <div class="mb-3">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" value="{{ $contact->firstname ?? '' }}" class="form-control" id="firstname" name="firstname" required>
                            </div>

                            <div class="mb-3">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" value="{{ $contact->lastname ?? '' }}" class="form-control" id="lastname" name="lastname" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" value="{{ $contact->email ?? '' }}" class="form-control" id="email" name="email" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Save contact</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
