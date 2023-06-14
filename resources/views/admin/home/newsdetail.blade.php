<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>News Management System</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('admin.config.css')
    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    {{-- news card --}}
    <main id="mains" class="main ml-5">
        <div class="container">
            <div class="pagetitle mt-5">
                <h1>News Details</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">News</a></li>
                        <li class="breadcrumb-item active">News Detail</li>
                    </ol>
                </nav>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-4 mt-3">
                <div class="col  mx-auto">

                    <div class="card">
                        <img src="{{ asset($news_details->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mt-0 mb-0">{{ $news_details->title }}</h5>
                            <h6 class="card-subtitle">{{ $news_details->description }}</h6><br>
                            <p class="card-text mt-0 mb-0">{{ $news_details->content }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('admin.config.script')

</body>

</html>
