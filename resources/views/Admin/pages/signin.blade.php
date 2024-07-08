<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ayn Control Center</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/x-icon" href="{{asset('main/images/logo.png')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" style = "text-align:center;" data-tilt>
					<img src="{{asset('main/images/logo.png')}}" alt="IMG">
				</div>

				<form class="login100-form validate-form" id = "formlogin">
					{!! csrf_field() !!}
					<span class="login100-form-title">
						Control Center Login 
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="user" placeholder="Username" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="password" name="pass" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{asset('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
		$("#formlogin").on('submit',(function(e){
        e.preventDefault();
        var formdata = new FormData(this);
        
        $.ajax({
          url: "{{url('/adminoffice/login')}}",
            type: "POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: formdata,
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){
         
					if(data== "cocok"){
						Swal.fire({
							title: 'Success!',
							text: 'Selamat datang kembali',
							icon: 'success',
							allowOutsideClick:false,
							confirmButtonText: 'OK'
						}).then((result) => {
							/* Read more about isConfirmed, isDenied below */
							if (result.isConfirmed) {
								location.href = "{{url('/adminoffice')}}";
							} 
							});
						}
						else if(data == "tidak cocok"){
						Swal.fire({
							title: 'Salah Password!',
							text: 'Kombinasi passwordmu salah',
							icon: 'error',
							confirmButtonText: 'OK'
						})
						
						}
						else{
						Swal.fire({
							title: 'Tidak Ditemukan!',
							text: 'Akunmu tidak ditemukan',
							icon: 'error',
							confirmButtonText: 'OK'
						})
					
					}
				
            },
        });
    }));
	</script>
<!--===============================================================================================-->
	<script src="{{asset('login/js/main.js')}}"></script>

</body>
</html>