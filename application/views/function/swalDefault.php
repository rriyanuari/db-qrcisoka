<script>    
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    function swalTemplate(status, title, text, callback){
      Toast.fire({
        icon : status,
        title: title,
        text : text,
        timer: 3000
      });
      callback;
    }

    function go_to(url){
      window.location.href = `<?php echo base_url() ?>${url}`;
    }
</script>
