@extends('layouts/app')
@section('content')
    @if(session()->has('status'))
        <p class="alert alert-info">{{session('status')}}</p>
    @endif
    <form action="{{route('category.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" name="name" class="form-control">
        </div>
        <input type="submit" value="Add">
    </form>
    @endsection