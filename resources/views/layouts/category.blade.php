<ul class="list-group">
    <li class="list-group-item"><h4>Category</h4></li>
    @foreach($category as $cat)
    <li class="list-group-item">
        <a href="{{route('post.show',$cat->id)}}" class="list-group-item-text">{{$cat->name}}</a>
    </li>
        @endforeach
</ul>