@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    @foreach($models as $model)
      <div class="col">
          <p>type: {{$model->type}}</p>
          <div class="card" style="width:400px">
            <img class="card-img-top" src="{{asset('images/index.jpg')}}" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Price: {{$model->price}}</h4>
              <p class="card-text">{{$model->product_title}}</p>
              <a href="{{route('card', $model->pack_id)}}" class="btn btn-primary">See Product</a>
              <a href="{{route('categorys', $model->pack_id)}}" class="btn btn-primary">See Category</a>
            </div>
          </div>
      </div>
    @endforeach
  </div>
</div>
@endsection