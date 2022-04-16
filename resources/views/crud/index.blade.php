@extends('layouts.master')
@section('title', 'CRUD')

@section('content')
    <div class="container mx-8">
        <div class="mt-8">
            <h1>Hello World</h1>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($post as $key => $value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->title }}</td>
                            <td>{{ $value->body }}</td>
                            <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection

@push('script')
@endpush