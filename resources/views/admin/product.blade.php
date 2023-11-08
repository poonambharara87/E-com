<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->


        <!-- Styles -->
          <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <!-- Nucleo Icons -->
        <link href="{{asset('/admin/css/nucleo-icons.css')}}" rel="stylesheet" />
        <link href="{{asset('admin/css/nucleo-svg.css')}}" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

        <!-- CSS Files -->

        <link id="pagestyle" href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet" />
</head>
<body class="g-sidenav-show  bg-gray-200">

    @include('layouts.inc.sidebar') 
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('layouts.inc.adminNav') 
    <div class="container-fluid py-4">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="p_name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Small Description</label>
                <input type="text" name="p_short_desc" class="form-control" id="exampleInputPassword1" placeholder="Small Description">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="textarea" name="p_desc" class="form-control" id="exampleInputPassword1" placeholder="Description">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Original Price</label>
                <input type="number" id="quantity" name="p_ori_price" >
            </div>
  
            <div class="form-group">
                <label for="exampleInputPassword1">Selling Price</label>
                <input type="number" id="quantity" name="p_sell_price" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Quanity</label>
                <input type="number" id="quantity" name="p_qty" min="1" max="5">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tax</label>
                <input type="number" id="quantity" name="p_tax">
            </div>

            <div class="form-group">
                <select class="form-control" name="status" id="exampleFormControlSelect1">
                <option value="0">Status</option>
                    <option value="0">Draft</option>
                    <option value="1">Active</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Meta Title</label>
                <input type="text" id="quantity" name="p_meta_title" >
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Meta Keywords</label>
                <input type="text" id="quantity" name="p_meta_keywords">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Meta Description</label>
                <input type="text" id="quantity" name="p_meta_desc" >
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      @include('layouts.inc.adminFooter') 
    </div>
  </main>
   
        <!--   Core JS Files   -->
    <link href="{{ asset('admin/js/core/popper.min.js') }}">
    <link href="{{ asset('admin/js/core/bootstrap.min.js') }}" >

    <link href="{{ asset('admin/js/core/smooth-scrollbar.min.js') }}">

    <link href="{{ asset('admin/js/core/perfect-scrollbar.min.js') }}">
 

</body>
</html>
