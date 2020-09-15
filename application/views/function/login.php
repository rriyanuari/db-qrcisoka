<script>
  $(document).ready(function(){
    
    $('#tmb-login').click(function() {
      event.preventDefault();
      var user = $("input[name=user]");
      var pass = $("input[name=pass]");
      
      if(user.val().trim() == "") {
          swalTemplate('error', 'Opps!', 'Username harus diisi');
          user.focus();
      } else if(pass.val().trim() == "") {
          swalTemplate('error', 'Opps!', 'Password harus diisi');
          pass.focus();
      } else {
        $.ajax({
          url : '<?php echo site_url('login/proses')?>',
          type : 'POST',
          data : {  
            user : user.val(),
            pass : pass.val()
          }, 
          success:function(response){
            if (response == 'success') {
              swalTemplate('success', 'Login Berhasil!!', 'Anda akan dialihkan', go_to('dashboard'))
            } else {
              swalTemplate('error', 'Login Gagal!', 'data yang anda masukan salah');
              user.focus();
            }
            console.log(response);
          },
          error:function(response){
            swalTemplate('error', 'Opps!', 'kesalahan pada server');
            console.log(response);
          }
        });
      }
    });

  });
  
</script>