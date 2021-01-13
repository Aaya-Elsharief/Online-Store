<!DOCTYPE html>
<html lang="en" >



<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="https://img.icons8.com/plasticine/100/000000/shopping-cart.png">
    @yield('content_head')
    <link rel="stylesheet" href="/css/Home.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">





</head>

<body>
<header>

    <a href="/home" class="logo">ONLINE STORE</a>

    <div class="menu-toggle"></div>

    <div class ="icon-bar">
        @if(\Illuminate\Support\Facades\Auth::guest())
        <a href="/login"> <i class="fa fa-sign-in"></i> sign in / sign Up</a>
        @else
            <a href="#"> <i class="fa fa-user"></i>   {{Auth::user()->name}} </a>
            <a href="/logout"> <i class="fa fa-sign-out"></i>  logout </a>

            @endif

        <a href="/get_cart"><i class = "fa fa-shopping-cart"></i> My cart</a>
    </div>

    <div class="search-btn">

        <ul>
            <li>In our store, shopping has greater fun ♥</li>
        </ul>
    </div>


    <div class="navbar">


        <div class="dropdown">
            <a href="/categories/view/1" class="active dropbtn">★ Gifts ★</a>
        </div>

        <div class="dropdown">
            <a href="/categories/view/2" class="active  dropbtn ">Clothes</a>
        </div>

        <div class="dropdown">
            <a href="/categories/view/3" class="active  dropbtn ">Furniture</a>
        </div>


        <div class="dropdown">
            <a href="/categories/view/4" class="active  dropbtn ">Baby Gifts</a>
        </div>

        <div class="dropdown">
            <a href="/categories/view/5" class="active  dropbtn ">Health and Care </a>
        </div>


        <div class="dropdown">
            <a href="/categories/view/6" class="active  dropbtn ">Shoes </a>
        </div>


        <div class="dropdown">
            <a href="/categories/view/7" class="active  dropbtn ">Accessories </a>
        </div>


        <div class="dropdown">
            <a href="/categories/view/8" class="active  dropbtn ">Smart Watch </a>
        </div>


        <div class="dropdown">
            <a href="/categories/view/9" class="active  dropbtn "> Electronices </a>
        </div>


        <div class="dropdown">
            <a href="/categories/view/10" class="active  dropbtn "> Berfume </a>
        </div>



    </div>


</header>


<nav>
    <div id="mySidenav" class="sidenav">
        <a href="/categories/view/1" id="Gifts">★Gifts★</a>
        <a href="/categories/view/2" id="Clothes">Clothes</a>
        <a href="/categories/view/3" id="Furniture">Furniture</a>
        <a href="/categories/view/4" id="Baby">BabyGifts </a>
        <a href="/categories/view/5" id="Health">Health</a>
        <a href="/categories/view/6" id="Shoes">Shoes</a>
        <a href="/categories/view/7" id="Accessor">Accessor</a>
        <a href="/categories/view/8" id="Smart">Watch </a>
        <a href="/categories/view/9" id="Electronices">Electron</a>
        <a href="/categories/view/10" id="Berfume">Berfume</a>

    </div>
</nav>


    @yield('contents')


<!----ddddddddddddddddddddddddddddddddddddddddddddddd-->




<footer>
    <!-- footor  list start -->
    <div class="footer">

        <div class="list-menu">
            <div class="footer_menu">
                <div class="col_1">
                    <div class="title">Help + Info </div>
                    <ul>
                        <li><a href="#">Track Your Order</a></li>
                        <li><a href="#"> Get It For The Holidays </a></li>
                        <li><a href="#">Returns + Exchanges  </a></li>
                        <li><a href="#"> See All Help Topics </a> </li>
                    </ul>
                </div>

                <div class="col_2">
                    <div class="title">  Discover  </div>
                    <ul>
                        <li><a href="#">FP Movement</a></li>
                        <li><a href="#">Care FP</a></li>
                        <li><a href="#">Call Center</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>

                </div>

                <div class="col_3">
                    <div class="title"> Services </div>
                    <ul>
                        <li><a href="#">Business Consultancy</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">Market Analysis</a></li>
                        <li><a href="#">Web Development</a></li>
                    </ul>
                </div>

                <div class="col_4">
                    <div class="title">  <br> </div>

                    <ul>
                        <li><a href="#"> <i class="fa fa-map-marker"></i> Find Your Store</a> </li>
                        <li><a href="#"><i class="fa fa-credit-card"></i> Gift Cards</i></a> </li>
                        <li><a href="#"> <i class="fa fa-thumb-tack"></i> Size Guide</a> </li>
                        <li><a href="#"><i class="fa fa-envelope-o"></i> Sign Up For Email</i></a> </li>
                    </ul>
                </div>

            </div>

            <div class="social_media">
                <ul>
                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" ></i></a></li>
                    <li><a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p"></i></a></li>
                    <li><a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a></li>
                </ul>
                <p>Copyright © Coding Market </p>
            </div>

        </div>
    </div>
      <!--  footor  list end -->

</footer>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>


