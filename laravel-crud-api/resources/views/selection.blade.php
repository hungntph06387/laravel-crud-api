@extends('layouts.category')

@section('selection')
<div class="list-category">
        @foreach($categories as $category)
        <li class="category-item">
           <a href="/category/{{$category->id}}" class="cate-link">{{$category->name}}</a>
        </li>
          
        @endforeach
        </div>
@endsection