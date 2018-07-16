@extends('layouts.app')

@section('content')
    @if(session()->has('status'))
        <p class="alert alert-info">{{session('status')}}</p>
    @endif
    @foreach($posts as $post)

            <img src="{{asset('uploads/'.$post->image)}}" alt="">
            <h3>{{$post->title}}</h3>
            <p>{{$post->content}}</p>
                <span class="label label-info">{{$post->category->name}}</span>
                <span class="label label-warning">{{$post->user->first_name}} &nbsp; {{$post->user->last_name}}</span>
                <ul>
                    <li>
                        <form action="{{route('comment.store')}}" method="post">
                            {{csrf_field()}}
                            <input type="text" name="comment" class="form-control">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <input type="submit" value="add comment" class="btn btn-info btn-sm">
                        </form>
                    </li>
                    @foreach($post->comments as $com)
                        <li>
                            <b>{{App\Comment::username($com->user_id)}}</b>
                            {{$com->comment}}</li>
                        @endforeach
                </ul>
            <hr>
    @endforeach
    @endsection