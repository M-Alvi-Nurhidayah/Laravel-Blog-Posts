@extends('layouts.main')

@section('container')
    <h1>Posts Categories</h1>
    <br>
    @foreach ($categories as $category)
        <ul>
            <li>
                <h2>
                    <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                </h2>
            </li>
        </ul>
    @endforeach

@endsection