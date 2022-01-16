<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SHOES STORE</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{URL::asset("css/products_index.css")}}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</head>

<body>
<div class="main">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}"
                   class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
            <a href="" class="text-sm text-gray-700 dark:text-gray-500 underline"><img style="width: 60px; height: 60px"
                                                                                       src="https://media.istockphoto.com/vectors/shopping-cart-line-icon-fast-buy-vector-logo-vector-id1184670036?k=20&m=1184670036&s=612x612&w=0&h=FpKQukhJ4X8WQkucHPbCqANJROKYB2v3k9ov3x-3vdI="
                                                                                       alt="Shop"/></a>
        </div>
    @endif
    <div id="header">
        <div class="start_menu">
            <div>
                <a href="{{ route('mainpage') }}"><img style=" display: block;margin: 10px auto 30px auto;"
                                                       src="https://r70.cooltext.com/rendered/cooltext402221536208962.png"
                                                       alt="Shop"/></a>
            </div>
        </div>
    </div>
    <hr/>
    <div class="flex-parent jc-center">
        <a class="button" href="{{route('products.women')}}">Women</a>
        <a class="button2" href="{{route('products.men')}}">Men</a>
    </div>
    <hr/>
        <h3 style="text-align: center; font-size: small">{{$products->count()}} products are available</h3>
        <hr style="width: 100%"/>

    <div class="container">

        <div class="clearfix">
            @if($products)
                @foreach($products as $product)
                    <div class="img-container">

                        <img src="{{ url('/') }}{{ $product->image->file_name}}"  style="width: 400px; height: 300px;"/>

                        <div class="details">
                            <h3>{{ $product->brand . ' ' . $product->model }}</h3>
                            <p>PRICE: {{$product->price }}$</p>
                            <a href="">Details</a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>

</body>
