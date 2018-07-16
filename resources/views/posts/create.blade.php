@extends('layouts.app')

@section('content')

        <div class="row">
            <div class="col-md-4 col-md-offset-4">

                @foreach($errors->all() as $err)
                    <p class="alert alert-danger">{{$err}}</p>
                    @endforeach
                <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="enter title">
                    </div>
                    <div class="form-group">
                        <textarea placeholder="enter content" class="form-control" name="content"></textarea>
                    </div>
                    <div class="form-group">
                        <select name="category" id="" class="">
                            @foreach($category as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
                        </select>
                        <input type="file" name="image">
                    </div>
                    <input type="submit" value="Add Post" class="btn btn-success btn-sm">

                </form>
            </div>
        </div>
@endsection