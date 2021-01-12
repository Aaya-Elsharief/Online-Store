@extends('layouts.app')
@section('content_head')
    <title> catagory products </title>
    <link rel="stylesheet" href="/css/Catagory.css" />

@endsection

@section('contents')

    <div class = "products">
        <div class = "container">
            <h1 class = "lg-title">{{$category->name}}</h1>
            <p class = "text-light">Products that fall under this category</p>

            <div class="con">

                <!-- Single product-->
                @foreach($products as $product)
                    <div class = "product">

                        <div class = "product-content">


                            <div class = "product-img">
                                <img src = "{{$product->src}}" alt = "product image">
                            </div>
                            <div id="product-btns" class = "product-btns">

                              <a  class = "product-name" href="/products/add_to_cart/{{$product->id}}">
                                  <button type = "button" class = "btn-cart"> to cart
                                    <span><i class = "fa fa-plus"></i></span>
                                </button>
                              </a>



                                <button id="btn" type = "button" class = "btn-buy  " data-bs-toggle="modal" data-bs-target="#exampleModal"> buy now
                                    <span><i class = "fa fa-shopping-cart"></i></span>
                                </button>


                            </div>

                        </div>

                        <div class = "product-info">

                            <div class = "product-info-top">

                                <h2 class = "sm-title">{{$product->product_classify}}</h2>
                                <br/>
                                <div class = "rating">
                                    @for($i=0 ; $i < $product->product_rating;$i++)
                                        <span><i class = "fa fa-star"></i></span>
                                    @endfor

                                    @for($i=0 ; $i < 5- $product->product_rating;$i++)
                                        <span><i class = "fa fa-star-o"></i></span>
                                    @endfor

                                </div>


                            </div>
                            <a href = "/products/view/{{$product->id}}" class = "product-name">
                                {{$product->product_name}}
                            </a>
                            <p class = "product-price">  {{$product->product_price}}$</p>
                            <p class = "product-price">  {{$product->product_price_off}}$</p>
                        </div>


                        <div class = "off-info">
                            <h2 class = "sm-title">{{$product->off}}% off</h2>
                        </div>

                    </div>

            @endforeach

            <!--End Single product-->




            </div>



        </div>
    </div>



    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="exampleModalLabel">Confirmation Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body" id="buyDiv" >

                    <form method="POST" action="/confirmBuy" >
                        {{ csrf_field() }}
                        <div class=" field">
                            <label for="Name" >Name</label>
                            <input id="Name" type="text" placeholder=" your name .."value="   {{Auth::user()->name}}"  >
                        </div>

                        <div class=" field">
                            <label for="address" >Address</label>
                            <input id="address" type="text"  placeholder=" your address with details .." name="address" required>
                        </div>

                        <div class=" field">
                            <label for="product_name" >Product</label>
                            <input id="product_name" name="product_name" type="text"  value="{{$product->product_name}}"  >
                        </div>

                        <div class=" field">
                            <label for="quantity" >Quantity</label>
                            <input id="quantity" type="number" min="1" max="10" placeholder=" choose quantity you want (1-10) .." name="quantity" required>
                        </div>



                        <div class="modal-footer confirm">
                            <label  >Confirm the information for delivery within 2 days</label>
                            <a  href="/confirmBuy">
                                <button type = "submit" class = "btn btn-primary confirm"> Confirm</button>
                            </a>
                        </div>


                    </form>

                </div>

            </div>
        </div>
    </div>

@endsection