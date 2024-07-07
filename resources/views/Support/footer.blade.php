<script>
function logout(){
    
    $.ajax({
          url: "{{url('adminoffice/logout')}}",
            type: "get",
            data: "",
            dataType: "html",
            success: function(data){
         
				
						Swal.fire({
							title: 'Success!',
							text: 'Anda sudah logout, Silahkan login kembali',
							icon: 'success',
							allowOutsideClick:false,
							confirmButtonText: 'OK'
						}).then((result) => {
							/* Read more about isConfirmed, isDenied below */
							if (result.isConfirmed) {
								location.href = "{{url('/adminoffice')}}";
							} 
							});
						
					
				
            },
        });


  

}
</script>