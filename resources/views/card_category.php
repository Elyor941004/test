@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
      <img class="card-img-top" src="{{asset('images/index.jpg')}}" alt="Card image" style="width:100%">
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>Category</th>
              <th>Product name</th>
              <th>type</th>
              <th>Measure</th>
              <th>Bonus</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Dose</th>
              <th>Pack number</th>
              <th>Product number</th>
            </tr>
          </thead>
          <tbody>
            @foreach($models as $model)
              <tr>
                <td>{{$model->category}}</td>
                <td>{{$model->product_title}}</td>
                <td>{{$model->type}}</td>
                <td>{{$model->measure}}</td>
                <td>{{$model->is_bonus}}</td>
                <td>{{$model->quantity}}</td>
                <td>{{$model->price}}</td>
                <td>{{$model->dose}}</td>
                <td>{{$model->pack_id}}</td>
                <td>{{$model->product_id}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection