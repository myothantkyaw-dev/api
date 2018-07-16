@extends('layouts.app')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        @if(App\User::isAdmin(Auth::user()->id))
                        <a href="{{route('category.create')}}" class="btn btn-success">Add Category</a>
                        <a href="{{route('category.create')}}" class="btn btn-success">Updaet Category</a>
                        <a href="{{route('post.create')}}" class="btn btn-success">Add Post</a>
                            @else
                            <h3 class="text text-danger">You are not admin</h3>
                    @endif
                </div>
            </div>

@endsection
