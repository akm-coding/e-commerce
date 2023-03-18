
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      {{-- <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <h1 class="text-center fs-3">All Orders</h1>
                <div class="text-center">
                    <form action="{{ url('search') }}" method="GET">
                        @csrf
                        <input type="text" name="search" placeholder="Search" class="col-md-6 mt-3 ml-3 text-dark">
                        <input type="submit" value="Search" class="btn btn-outline-primary ml-3">
                    </form>
                </div>
                <div class="container-fluid w-auto" style="overflow-x: auto;">
                    <table class="table border border-white mt-3">
                        <thead class="thead-light bg-info">
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Product Title</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Payment Status</th>
                            <th>Delivery Status</th>
                            <th>Image</th>
                            <th>Delievered</th>
                            <th>Print PDF</th>
                            <th>Send Email</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($order as $order)
                            <tr>
                                <td>{{ $order->name}}</td>
                                <td>{{ $order->email}}</td>
                                <td>{{ $order->address}}</td>
                                <td>{{ $order->phone}}</td>
                                <td>{{ $order->product_title}}</td>
                                <td>{{ $order->quantity}}</td>
                                <td>{{ $order->price}}</td>
                                <td>{{ $order->payment_status}}</td>
                                <td>{{ $order->delivery_status}}</td>
                                <td>
                                    <img src="/product/{{ $order->image }}" class="img-thumbnail">
                                </td>
                                <td>
                                    @if ($order->delivery_status == 'Processing')
                                    <a href="{{ url('delivered', $order->id) }}" onclick="return confirm('Are you sure to deliver this poroduct?')" class="btn btn-primary">Deliver</a>
                                    @else
                                        <p class="text-success">Delivered</p>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('print_pdf', $order->id) }}" class="btn btn-secondary">Print PDF</a>
                                </td>
                                <td>
                                    <a href="{{ url('send_email', $order->id) }}" class="btn btn-info">Send Email</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>
                                    <p>No Data Found</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
