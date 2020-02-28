@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 4%">
	<div class="card">
		<div class="card-header text-center">
			<h3>Orders</h3>
		</div>
		<div class="card-body">
			<table class="table table-striped table-bordered">
			  <thead class="text-center">
			    <tr>
			      <th scope="col">Order Number</th>
			      <th scope="col">Ordered at</th>
			      <th scope="col">Num of products</th>
			      <th scope="col">Total</th>
			      <th scope="col">Details</th>
			    </tr>
			  </thead>
			  	@foreach($Orders as $order)
				  <tbody class="text-center">
				    <tr>
				      <td>{{$order->id}}</td>
				      <td>{{$order->created_at}}</td>
				      <td>{{count($order->order_item)}}</td>
				      <td>{{$order->total}}€</td>
				      <td>
				      	<a role="button" class="btn btn-outline-info" href="{{action('Orders@log',$order->id)}}">Item breakdown</a>
        			  </td>
				    </tr>	
				  </tbody>	  
			  	@endforeach
			</table>
			@include('layouts.error')
		</div>
	</div>
</div>
@endsection