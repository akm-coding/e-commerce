
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css');
    <style>
      label {
        display: inline-block;
        width: 200px;
      }
    </style>
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
      @include('admin.sidebar');
      <!-- partial -->
      @include('admin.header');
        <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="text-center mt-5">
                <h1 class="fs-2 mb-5">Update Products</h1>
                <form action="{{ url('update_product_confirm', $product->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div>
                    <label for="">Product Title: </label>
                    <input type="text" class="text-dark ml-2" name="title" placeholder="Write a title" required value="{{ $product->title }}">
                </div>
                <div class="mt-3">
                    <label for="">Product Description: </label>
                    <input type="text" class="text-dark ml-2" name="description" placeholder="Write a description" required value="{{ $product->description }}">
                </div>
                <div class="mt-3">
                    <label for="">Product Price: </label>
                    <input type="number" class="text-dark ml-2" name="price" placeholder="Write a price" required value="{{ $product->price }}">
                </div>
                <div class="mt-3">
                    <label for="">Discount Price: </label>
                    <input type="number" class="text-dark ml-2" name="dis_price" placeholder="Write a discount is apply" value="{{ $product->dis_price }}">
                </div>
                <div class="mt-3">
                    <label for="">Product Quantity: </label>
                    <input type="number" class="text-dark ml-2" min="0" name="quantity" placeholder="Write a quantity" required value="{{ $product->quantity }}">
                </div>
                <div class="mt-3">
                    <label for="">Product Category: </label>
                    <select name="category" id="" class="text-dark" required>
                        <option value="{{ $product->category }}" selected>{{ $product->category }}</option>
                        @foreach ($category as $category)
                            <option value="{{ $category->category_name }}">
                            {{ $category->category_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <label for="">Current product image: </label>
                    <img class="img-thumbnail" style="margin:auto;" src="/product/{{ $product->image }}" alt="">
                </div>
                <div class="mt-3">
                    <label for="">Change product image: </label>
                    <input type="file" name="image" id="">
                </div>
              <div class="mt-3">
                  <input type="submit" value="Update product" class="btn btn-primary">
              </div>
                </form>
            </div>
        </div>
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>
