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
             <h1>Users Tables</h1>
             <nav>
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="{{ url('admindashboard') }}">Home</a></li>
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
                             <h5 class="card-title">UserTables</h5>
                             @if (Session::has('danger'))
                                 <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                     {{ Session::get('danger') }}
                                     <button type="button" class="btn-close" data-bs-dismiss="alert"
                                         aria-label="Close"></button>
                                 </div>
                             @endif
                             @if (Session::has('success'))
                                 <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                                     {{ Session::get('success') }}
                                     <button type="button" class="btn-close" data-bs-dismiss="alert"
                                         aria-label="Close"></button>
                                 </div>
                             @endif
                             <!-- Table with stripped rows -->
                             <table class="table datatable">
                                 <thead>
                                     <tr>
                                         <th>ID</th>
                                         <th>Name</th>
                                         <th>EMail</th>
                                         <th>Mobile Number</th>
                                         <th>Role</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach ($data as $user_data)
                                         <tr>
                                             <td>{{ $user_data->id }}</td>
                                             <td>{{ $user_data->name }}</td>
                                             <td>{{ $user_data->email }}</td>
                                             <td>{{ $user_data->mobile_number }}</td>
                                             @if ($user_data->is_admin == 1)
                                                 <td>
                                                     <a href="{{ url('admin-user') }}/{{ $user_data->id }}"
                                                         class="btn btn-primary">Make as User</a>
                                                 </td>
                                             @else
                                                 <td>
                                                     <a href="{{ url('user-admin') }}/{{ $user_data->id }}"
                                                         class="btn btn-primary">Make as Admin</a>
                                                 </td>
                                             @endif
                                             <td>
                                                 <a href="{{ url('delete-user') }}/{{ $user_data->id }}"
                                                     class="btn btn-danger">Delete</a>
                                             </td>
                                         </tr>
                                     @endforeach
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
