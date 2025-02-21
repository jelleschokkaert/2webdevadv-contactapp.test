@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="{{ route('contacts.add') }}">Contact toevoegen</a>

                        <table class="table table-striped table-hover table-bordered align-middle mt-4">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Firstname</th>
                                    <th scope="col">Lastname</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->firstname }}</td>
                                        <td>{{ $contact->lastname }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>
                                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('contacts.delete', $contact->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
