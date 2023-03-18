
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
        <div class="main-panel fs-5">
            <div class="content-wrapper">
                <h1 class="text-center">Send an Email to {{ $order->email }}</h1>
                <form class="mt-5" action="{{ url('send_user_email', $order->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="formGroupExampleInput">Email Greeting</label>
                      <input type="text" class="form-control text-dark" id="formGroupExampleInput" name="greeting">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Email Firstline</label>
                      <input type="text" class="form-control text-dark" id="formGroupExampleInput2" name="firstline">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Email Body</label>
                      <input type="text" class="form-control text-dark" id="formGroupExampleInput2" name="body">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Email Button Name</label>
                      <input type="text" class="form-control text-dark" id="formGroupExampleInput2" name="button">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Email Url</label>
                      <input type="text" class="form-control text-dark" id="formGroupExampleInput2" name="url">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Email Lastline</label>
                      <input type="text" class="form-control text-dark" id="formGroupExampleInput2" name="lastline">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name="button">Send Email</button>
                    </div>
                </form>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
