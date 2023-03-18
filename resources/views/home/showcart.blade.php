<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="{{ asset('home/images/ecommerce.png') }}" type="">
      <title>E-commerce</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('home/css/bootstrap.css') }}" />
      <!-- font awesome style -->
      <link href="{{ asset('home/css/font-awesome.min.css') }}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <style>
        .center{
            margin: auto;
            width: 70%;
            text-align: center;
            padding: 30px;
        }
        table,th,td {
            border: 1px solid grey;
        }
        .th_deg {
            font-size: 20px;
            padding: 5px;
            background: skyblue;
        }
      </style>
   </head>
   <body>
    @include('sweetalert::alert')
      <div class="hero_area">
         <!-- header section strats -->
         @include ('home.header')
         <!-- end header section -->
         <!-- slider section -->
         <!-- end slider section -->
      <!-- why section -->
      @if (session()->has('message'))
          <div class="alert alert-success">
            <button class="close" type="button" data-dimiss="alert" aria-hidden="true">x</button>
            {{ session()->get('message') }}
          </div>
      @endif
      <div>
        <table class="center mb-5">
            <tr>
                <th class="th_deg">Product Title</th>
                <th class="th_deg">Product quantity</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Action</th>
            </tr>
            <?php $totalprice = 0; ?>
            @foreach ($cart as $cart)
            <tr>
                <td>{{ $cart->product_title }}</td>
                <td>{{ $cart->quantity }}</td>
                <td>${{ $cart->price }}</td>
                <td><img class="rounded mx-auto d-block" src="/product/{{ $cart->image }}" alt=""></td>
                <td><a onclick="confirmation(event)" href="{{ url('remove_cart', $cart->id) }}" class="btn btn-danger">Remove Product</a></td>
            </tr>
            <?php $totalprice = $totalprice + $cart->price ?>
            @endforeach
        </table>
        <div>
            <h1 class="text-center mb-5">Total Price:  ${{ $totalprice }}</h1>
        </div>
        <div class="text-center mb-5 fs-2">
            <h1 class="mb-3">Proceed to Order</h1>
            <a href="{{ url('cash_order') }}" class="btn btn-danger">Cash On Deli</a>
            <a href="{{ url('stripe',$totalprice) }}" class="btn btn-danger ml-3">Pay Using Card</a>
        </div>
      </div>
      <!-- end client section -->
      <!-- footer start -->
      <!-- footer end -->
      <div class="cpy_">
        <p class="mx-auto">© 2023 All Rights Reserved By <a href="https://portfolio-pi-flame-13.vercel.app/">Aung Kaung Myat</a><br>

           Distributed By <a href="https://portfolio-pi-flame-13.vercel.app/" target="_blank">Me</a>

        </p>
     </div>

     <script>
        function confirmation(ev) {
            ev.preventDefault();
            var urlTodirect = ev.currentTarget.getAttribute('href');
            console.log(urlTodirect);
            swal({
                title: "Are you sure to cancel this product",
                text: "You will not be able to revert this",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willCancel) => {
                if(willCancel) {
                    window.location.href = urlTodirect;
                }
            });
        }
     </script>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
