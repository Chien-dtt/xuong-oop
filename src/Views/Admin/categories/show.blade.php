@extends('layouts.master')

@section('title')
    Xem chi tiết: {{ $category['name'] }}
@endsection

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($category as $id => $name)
                <tr>
                    <td>{{ $id }}</td>
                    <td>{!! $name !!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection