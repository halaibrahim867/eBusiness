<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>eBusiness Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{URL::asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{URL::asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{URL::asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: eBusiness - v4.10.0
    * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body>

@extends('components.header')
@section('header')
@endsection

<br><br><br><br><br><br>
<form method="post" action="{{route("team.store")}}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Apply photo of employee</label>
        <input type="file" class="form-control" id="exampleInputEmail1" name="photo">

    </div>


    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Enter Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Your Name">
    </div>


    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"></label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="job_description" placeholder="Enter Your Job Description">

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"></label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="facebook_account" placeholder="Enter Your Facebook Account">

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"></label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="twitter_account" placeholder="Enter Your Twitter Account">

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"></label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="instagram_account" placeholder="Enter Your Instagram Account">

    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>


</body>
</html>
