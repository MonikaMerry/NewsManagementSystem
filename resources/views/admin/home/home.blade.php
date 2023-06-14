<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Dashboard - NiceAdmin Bootstrap Template</title>
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
        {{-- news card  --}}
        <div class="container">

            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
                @foreach ($news_data as $item)
                    <div class="col">
                        <div class="card">
                            <a href="{{ url('news-id') }}/{{ $item->id }}">
                                <img src="{{ $item->image }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title mt-0 mb-0">{{ $item->title }} - <p
                                            class="card-text mt-0 mb-0">{{ $item->description }}</p>
                                    </h5>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $news_data->links() }}
        </div>
        {{-- <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer --> --}}

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        @include('admin.config.script')

    </body>

    </html>

</x-app-layout>
