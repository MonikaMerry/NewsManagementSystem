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

    @include('admin.config.header')

    <!-- ======= Sidebar ======= -->
    @include('admin.config.sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Datatables</h5>
                            <p>Add lightweight datatables to your project with using the <a
                                    href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple
                                    DataTables</a> library. Just add <code>.datatable</code> class name to any table you
                                wish to conver to a datatable</p>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Start Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Brandon Jacob</td>
                                        <td>Designer</td>
                                        <td>28</td>
                                        <td>2016-05-25</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Bridie Kessler</td>
                                        <td>Developer</td>
                                        <td>35</td>
                                        <td>2014-12-05</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Ashleigh Langosh</td>
                                        <td>Finance</td>
                                        <td>45</td>
                                        <td>2011-08-12</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Angus Grady</td>
                                        <td>HR</td>
                                        <td>34</td>
                                        <td>2012-06-11</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Raheem Lehner</td>
                                        <td>Dynamic Division Officer</td>
                                        <td>47</td>
                                        <td>2011-04-19</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
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
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('admin.config.script')

</body>

</html>
