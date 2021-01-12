@extends('layouts.app')
@section('content_head')
    <title> view product  </title>
    <link rel="stylesheet" href="/css/product.css" />
    
@endsection

@section('contents')


    <!-- Put images in each below respect to its categories -->
    <div class="row">

        <div class="imgcontent">

            <div class="innerDiv">
                <h2>{{$product->product_name}}</h2>
                <br/>
                <label>THE PRODUCING COMPANY: <span> {{$product->product_company}} </span>  </label>
                <br/>
                <label>size: <span>{{$product->product_size}} </span> </label>
                <br/>
                <label>Market Price: <span> {{$product->product_price}} </span> </label>
                <br/>
              <!-- <div class="quantity segoeui-regular-normal-black-38px">
                    quantity
                   <input type="number" id="quantity" name="quantity" min="1" max="15">
                </div>
-->


                <div class = "rating">
                    @for($i=0 ; $i < $product->product_rating;$i++)
                    <span><i class = "fa fa-star"></i></span>
                        @endfor

                        @for($i=0 ; $i < 5- $product->product_rating;$i++)
                            <span><i class = "fa fa-star-o"></i></span>
                        @endfor


                </div>

                <br/>
                <br/>

                <div class="buyDiv">

                    <a  href="/products/add_to_cart/{{$product->id}}">
                        <button type = "button" class = "btn-cart"> add to cart
                            <span><i class = "fa fa-plus"></i></span>
                        </button>
                    </a>



                        <button id="btn" type = "button" class = "btn-buy  " data-bs-toggle="modal" data-bs-target="#exampleModal"> buy now
                            <span><i class = "fa fa-shopping-cart"></i></span>
                        </button>



                </div>

                <div id="buyDiv" class="buyform" style="display:none;" >
                    <div class="title">Confirmation Form</div>
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




                        <div class="confirm" >
                            <label  >Confirm the information for delivery within two days</label>
                            <a  href="/confirmBuy">
                                <button type = "submit" class = "confirm"> Confirm</button>
                            </a>
                        </div>

                    </form>
                </div>



        </div>

            <div class="imgDiv">

                <div class="basic">
                    <img class="big-img" src="{{$image->img1}}"alt="berfume"  width="500" height="500">
                </div>
                    <div class ="mini-cat">

                    <div class="cat-img">
                        <img src="{{$image->img2}}"  alt="product1" >
                    </div>

                    <div class="cat-img">
                        <img class="catagory-img" src="{{$image->img3}}"  alt="product2" >
                    </div>

                    <div class="cat-img">
                        <img src="{{$image->img4}}"  alt="product3">
                    </div>
                </div>

            </div>

        </div>

    </div>
<br/>


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