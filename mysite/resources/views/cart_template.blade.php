@extends('layouts.app')

  
  @section('content')
  <div class="container" style="max-width: 70%">
    <div class="card mt-5">
      <div class="card-header text-center">
        <h2 class="text-center">Products</h2>
      </div>
      <div class="card-body bg-light">
        <!-- start product -->
        <!-- Card Decks -->
        @if($Empty == 0)
          <div class="row p-5">
          @if(isset($Products))
            @foreach($Products as $id => $Product)
              <div class="col-sm-4 mb-4 card card-hover ">
                <h4 class="card-title text-center">{{$Product->name}}</h4>
                <img class="card-img-top mx-auto" src="{{asset('resources/assets/img/Categories/'.$Product->category.'/'.$Product->image)}}" >
                <div class="card-body"></div>
                <div class="container mb-1">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 style="color: orange" class="float-left mr-auto"><b>{{$Product->price}}</b>€</h4>
                      <h4 style="color: orange" class="">c/ IVA</h4>                        
                    </div>
                  </div>                 
                  <div class="row mt-auto">
                    <div class="col mr-auto">
                      <div class="form-group row">
                          <label class="control-label col-sm-6" for="qty">Quantity:</label>
                            <div class="col-sm-6">
                              <span>
                                <input type="number" class="form-control quantity" id="qty{{$id}}" value="{{$Product->ammount}}">
                              </span>
                            </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-auto">
                    <div class="col">
                      <button class="btn btn-outline-info update-cart" data-id="{{ $id }}">Update</button>
                    </div>
                    <div class="col">
                      <a role="button" class="btn btn-outline-danger" href="{{action('CartController@remove',$id)}}">Delete</a>
                    </div>
                  </div>
                </div>                
              </div>
            @endforeach
          </div>
          @endif
        @else
        <div class="row text-center">
          <h4 class="col">Your cart is empty, keep shopping!</h4>
        </div>
        @include('layouts.error')
        <meta http-equiv="refresh" content="5; url={{action('Index@index')}}">
        @endif
        <!-- end of card decks -->
        <!-- end of products -->
        <div class="row">
          @if($Empty == 0)
          <div class="col-sm-12">
            <a role="button" class="btn btn-outline-danger float-right" href="{{action('CartController@checkout')}}">Checkout Total: {{$Total}}€</a>
          </div>
          @endif
        </div>
      </div>
    </div>

  </div>
  @endsection
  @section('script')
    <script type="text/javascript">
 
        $(".update-cart").click(function (e) {
           e.preventDefault();
 
           var ele = $(this);
           var id = ele.attr("data-id");

            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "post",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("div").find("#qty" + id).val()},
               success: function (response) {
                  window.location.reload();
               }
            });
        });
    </script>
  @endsection