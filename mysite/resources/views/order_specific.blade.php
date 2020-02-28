@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 4%">
	<div class="card">
		<div class="card-header text-center">
			<h5>Item breakdown for order ID {{$id}} with cost {{$Total}}€. Placed at: {{$created_at}}</h5>

		</div>
		<div class="card-body">
			<div class="row">
				@foreach($Ois as $SOi)
				<div class="col-sm-4 mb-4 card card-hover ">
	                <h4 class="card-title text-center">{{$SOi->product->name}}</h4>
	                <img class="card-img-top mx-auto" src="{{asset('resources/assets/img/Categories/'.$SOi->product->category->name.'/'.$SOi->product->image)}}" >
	                <div class="card-body"></div>
	                <div class="container mb-1">
	                  <div class="row">
	                    <div class="col-sm-12">
	                      <h4 style="color: orange" class="float-left mr-auto"><b>{{$SOi->product->price}}</b>€</h4>
	                      <h4 style="color: orange" class="">c/ IVA</h4>                        
	                    </div>
	                  </div>                 
	                  <div class="row mt-auto">
	                    <div class="col mr-auto">
	                      <div class="form-group row">
	                          <label class="control-label col-sm-6" for="qty">Quantity:</label>
	                            <div class="col-sm-6">
	                              <span>
	                                <input type="number" class="form-control quantity"  value="{{$SOi->quantity}}" disabled>
	                              </span>
	                            </div>
	                      </div>
	                    </div>
	                  </div>
	                </div>                
	             </div>
	            @endforeach
			</div>
			@include('layouts.error')
		</div>
	</div>
</div>
@endsection