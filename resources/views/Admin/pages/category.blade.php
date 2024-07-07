<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('main/images/logo.png')}}">
  <title>
    Category
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('admin/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('admin/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('admin/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('admin/assets/css/soft-ui-dashboard.css?v=1.0.3')}}" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">

  @include('Support.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Category</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Category</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            {{-- <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div> --}}
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Hello,</span>
              </a>
            </li>
           
          
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
   
      <div class = "row">
        <div class="col-lg-12 col-md-6 mt-1">
          <div class="card h-100">
            <div class="card-header pb-0">
              <button style = "float:right;" class = "btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_add_category">Add Category</button>
              <h6>List Category</h6>
              <p class="text-sm">
         
               
              </p>
            </div>
            <div class="card-body p-3">
              <table class ="table align-items-center mb-0" style = "text-align:center !important;" id = "datatable_category">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                  
                    </td>
                  </tr>
                </tbody>
            </table>
            </div>
          </div>
        </div>
      
      </div>
    
 
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>


{{-- Modal Edit --}}
<div class="modal fade" id="modal_edit_category" tabindex="-1" role="dialog" aria-labelledby="modal_detail_productLabel" aria-hidden="true" style = "z-index:100000;" >
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="judulproduk" ><i class="fa fa-list-alt" aria-hidden="true"></i>
              Edit Category</h3>
            <button type="button" id = "closeeditproduct" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h4>Edit Category</h4>
            <form id = "formedit" enctype="multipart/form-data">
              {!! csrf_field() !!}
            <div class = "row mt-3 mb-3">
              <div class = "col-6">Gambar Produk <input id = "edit_gambarcategory" name = "edit_gbr_category" type = "file" class = "form-control"> </div>
              <div class = "col-6">Nama Produk <input  id = "edit_namacategory" name = "edit_nama_category" type = "text" class = "form-control" required></div>
            </div>
           
            <div class = "row mt-3 mb-3">
              <div class ="col-12" style = "text-align:right;"><input type = "submit" class ="btn btn-success "  value = "Ganti"></div>
            </div>
          </form>
            <h4>List Product in this Category</h4>
            <table id="table-product" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Gambar</th>
                  <th>Variant Name</th>
                  <th>Discount</th>
                  <th>Price</th>
              
                </tr>
              </thead>
              <tbody id = "isian_variant_produk"></tbody>
            </table>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
    </div>
  </div>
</div>
</div>
{{--  --}}

{{-- Modal ADD --}}

<div class="modal fade" id="modal_add_category" tabindex="-1" role="dialog" aria-labelledby="modal_add_productLabel" aria-hidden="true" style = "z-index:100000;" >
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="judulCategory" ><i class="fa fa-list-alt" aria-hidden="true"></i>
              Category</h3>
            <button type="button" id = "closeaddcategory" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h4>Tambah Category</h4>
            <form id = "formtambah" enctype="multipart/form-data">
              {!! csrf_field() !!}
            <div class = "row mt-3 mb-3">
              <div class = "col-6">Gambar Category <input id = "add_gambarproduk" name = "add_gbr_category" type = "file" class = "form-control" required> </div>
              <div class = "col-6">Nama Category <input  id = "add_namaproduk" name = "add_nama_category" type = "text" class = "form-control" required></div>
            </div>
          
            <div class="alert alert-success d-flex align-items-center" role="alert" id = "add_alert_notif_success" style = "display:none !important;">
              <div>
                Category Sukses Ditambah pada <span id = "add_tanggal_alert_success"></span>. Jika tidak tertambah, Hubungi Developer.
              </div>
            </div>
            <div class="alert alert-danger d-flex align-items-center" role="alert" id = "add_alert_notif_danger" style = "display:none !important;">
              <div>
                Category gagal Ditambah <span id = "add_tanggal_alert_danger"></span>.. Segera Hubungi Developer.
              </div>
            </div>
            <div class = "row mt-3 mb-3">
              <div class ="col-12" style = "text-align:right;"><input type = "submit" class ="btn btn-success"  value = "Tambah"></div>
            </div>
            
          </form>
           
          
      
    </div>
  </div>
</div>
</div>

{{-- End Modal Add --}}


  <script
			  src="https://code.jquery.com/jquery-3.7.1.js"
			  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
			  crossorigin="anonymous"></script>
		
  <!--   Core JS Files   -->
  <script src="{{asset('admin/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/plugins/chartjs.min.js')}}"></script>
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  

  <script>
  
  $(document).ready(function () {

  var idselected = "0";
  
   var mytable =  $('#datatable_category').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{url('/adminoffice/category/getlistcategory')}}",
      columns: [
        {
           data: 'id'
        },
        {
          "render": function ( data, type, row ) {
             return '  <div class="d-flex px-2 py-1" style = "align-items: stretch;"><div style = "text-align:center;width:100%;"><div><img src="{{asset("main/images/category/")}}/'+row.images_category+'" style = "width:50px !important;height:50px !important;" class="avatar avatar-sm me-3" alt="user1"></div><div class="d-flex flex-column justify-content-center mt-2"><h6 class="mb-0 text-sm">'+row.name+'</h6></div></div></div>';
           }
        },
        {
          "render": function ( data, type, row ) {
             return '1';
           }
        },
        {
          "render": function ( data, type, row ) {
             var status = "<span style = 'color:red'>Tidak Tampil</span>";
             if(row.status_category == "1"){
              status = "<span style = 'color:green'>Tampil</span>"
             }
             return status;
           }
        },
        {
          "render": function ( data, type, row ) {
              return '<div style = "width:100%;text-align:center;"><button class="btn btn-warning" onclick = "getdetailcategory(this)" data-id = "'+row.id+'" btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edit_category"" style = "margin:auto;" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><button class="btn btn-danger" onclick = "getStatusChange(this)" data-id = "'+row.id+'" btn-sm"  style  = "margin-top:15px;" ><i class="fa fa-exchange" aria-hidden="true"></i> Ganti Status</button></div>';

           }
        },
        // {
        //    "render": function ( data, type, row ) {
        //     return '<button class="btn btn-warning" onclick = "getdetailTransaction(this)" data-id = "'+row.id+'" btn-sm" data-toggle="modal" data-target="#modal_detail_product" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><br><br><button class="btn btn-danger" onclick = "getStatusChange(this)" data-id = "'+row.id+'" btn-sm"  ><i class="fa fa-exchange" aria-hidden="true"></i></button>';
        //   }
        // }
      ],
    });
  });

  function getdetailcategory(myobj){
    var categoryid = $(myobj).attr("data-id");
    idselected = categoryid;
    $.ajax({
      type: "get",
      url: "{{url('/adminoffice/category/getdetailcategory')}}",
      data: {"idcategory" : categoryid},
      dataType: "json",
      success: function (response) {
        $("#isian_variant_produk").html("");
        $("#isian_variant_produk").html(response.output);
        // $("#edit_gambarcategory").val(response.output[0].names);
        $("#edit_namacategory").val(response.output[0].name);
      }
    });

  }
  function getStatusChange(myobj){
        var idcategory = $(myobj).attr("data-id");
        $.ajax({
          type: "post",
          url: "{{url('/adminoffice/category/changestatuscategory')}}",
          data: { "_token": "{{ csrf_token() }}","idcategory" : idcategory},
          dataType: "json",
          success: function (response) {
            $('#datatable_category').DataTable().ajax.reload();
            Swal.fire({
                  title: "<strong>Category ini "+response.output+"</strong>",
                  icon: "success",
                  html: "Jika tidak terganti, hubungi Developer",
                  showCloseButton: false,
                  showCancelButton: false,
                  allowOutsideClick:false,
                  focusConfirm: false,
                  confirmButtonText: `
                    <i class="fa fa-thumbs-up"></i> Ok
                  `,
                  confirmButtonAriaLabel: "Ok",
              });
         
            
          }
        });
      }
  
  $("#formedit").on('submit',(function(e){
        e.preventDefault();
        var formdata = new FormData(this);
        formdata.append('id_category', idselected);
        $.ajax({
          url: "{{url('/adminoffice/category/editcategory')}}",
            type: "POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: formdata,
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){
              $('#datatable_category').DataTable().ajax.reload();
              // $('#modal_detail_product').modal();
              $("#closeeditproduct").click();
              Swal.fire({
                title: "<strong>Category telah terganti</strong>",
                icon: "success",
                html: "Jika tidak terupdate, hubungi Developer",
                showCloseButton: false,
                showCancelButton: false,
                allowOutsideClick:true,
                focusConfirm: false,
                confirmButtonText: `
                  <i class="fa fa-thumbs-up"></i> Ok
                `,
                confirmButtonAriaLabel: "Ok",
            });

            },
        });
    }));
  $("#formtambah").on('submit',(function(e){
          e.preventDefault();
          var formdata = new FormData(this);
          $.ajax({
            url: "{{url('/adminoffice/category/tambahcategory')}}",
              type: "POST",
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              data: formdata,
              contentType: false,
              cache: false,
              processData:false,
              success: function(data){
                $('#datatable_category').DataTable().ajax.reload();
                var currentdate = new Date(); 
                var tgl =  currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " @ "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
                $("#add_alert_notif_danger").attr("style", "display: none !important");
                $("#add_alert_notif_success").attr("style", "display: block !important");
                $("#add_tanggal_alert_success").html(tgl);
                $("#formtambah").trigger("reset");


              },
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                var currentdate = new Date(); 
                var tgl =  currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " @ "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
                $("#add_alert_notif_success").attr("style", "display: none !important");
                $("#add_alert_notif_danger").attr("style", "display: block !important");
                $("#add_tanggal_alert_danger").html(tgl);
              },
          });
      }));

  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('admin/assets/js/soft-ui-dashboard.min.js?v=1.0.3')}}"></script>
</body>

</html>
@include("Support.footer")