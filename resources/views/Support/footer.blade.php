
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
$("#close_success").on("click", function(){
       $("#alert_success").hide();
    });
    $("#close_danger").on("click", function(){
      $("#alert_danger").hide();
    });
function fire_alert(isipesan) {
    $("#isi_pesan").text(isipesan);

    $('#alert_success').fadeIn(1000);
    setTimeout(function() { 
        $('#alert_success').fadeOut(2000); 
    }, 5000);
  }
  function fire_alert_danger(isipesan) {
    $("#isi_pesan_danger").text(isipesan);
 
    $('#alert_danger').fadeIn(1000);
    setTimeout(function() { 
        $('#alert_danger').fadeOut(2000); 
    }, 5000);
  }
</script>