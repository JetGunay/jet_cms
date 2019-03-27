@extends('layouts.app')

@section('content')

    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Manage Posts</h1>
            </div>
            <div class="column">
                <a href="{{ route('posts.create') }}" class="button is-primary">New Post</a>
            </div>
        </div>
        <hr>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Date Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($posts as $post)
                    <tr>
                        <td>
                            {{ $post->id }}
                        </td>
                        <td>
                            {{ $post->title }}
                        </td>
                        <td>
                            {{ $post->category }}
                        </td>
                        <td>
                        <a href="{{ route('posts.edit', $post->id) }}" class="button is-outlined">Edit</a>
                        </td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>


@endsection