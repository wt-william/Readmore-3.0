<!-- @extends('layouts.categories')
@section('content') -->
    
<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('layouts.includes.meta')
    
    @include('layouts.includes.link')

    @include('layouts.includes.style')
</head>

<body>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./categories.html">Categories</a>
                        <span>Romance</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Section Begin -->
   @include('layouts.includes.product');
<!-- Product Section End -->

<!-- @endsection -->

<!-- Footer Section Begin -->
@include('layouts.includes.footer')
  <!-- Footer Section End -->

<!-- Js Plugins -->
@include('layouts.includes.script')


</body>
</html>