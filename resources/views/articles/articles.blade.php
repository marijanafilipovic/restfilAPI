@extends('layouts.app')

@section('content')
<div class="container">
    {{ $articles->links() }}
<div class="row">

@foreach($articles as $article)
<div class="col-sm-3 card">
    <div class="card-text">
    <h2>{{ $article->title }}</h2>

    <p class="card-text">
        {!! $article->body !!}
    </p>
<a class=" btn btn-sm btn-info" href="article/{{ $article->id}}">More..</a>


</div>
</div>
@endforeach
</div>
</div>
@endsection
<style>
.card-text{

}
    button{
        position: absolute;
       bottom:2px;


    }
</style>
