<header class="header_section">
    <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{ url('/') }}"><img width="250" src="{{ asset('home/images/oracle.png') }}" alt="#" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item active">
                   <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('show_cart') }}" class="nav-link">Cart</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('show_order') }}" class="nav-link">Order</a>
                </li>
                <form class="form-inline">
                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                 </form>
                 @if(Route::has('login'))

                 @auth

                <li class="nav-item">
                    <x-app-layout>

                    </x-app-layout>
                </li>
                @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="btn btn-primary mr-2 ml-2">Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="btn btn-success mr-2">Register</a>
                </li>
                 @endauth

                @endif
             </ul>
          </div>
       </nav>
    </div>
 </header>
