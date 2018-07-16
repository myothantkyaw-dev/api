@extends('layouts.app')

@section('content')
    @if(session()->has('status'))
        <p class="alert alert-info">{{session('status')}}</p>
        @endif
    <form action="" method="post">
        {{csrf_field()}}

        <input type="text" name="name">

        <select name="category" id="">
            @foreach($category as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
        </select>
        <input type="submit" value="update">
    </form>
    @endsection