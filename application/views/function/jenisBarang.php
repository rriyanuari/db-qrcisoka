<script>
//Save product
$('#tmb-add-jenisBarang').on('click',function(){
  var kategori            = $('#kategori_jenisBarang')
  var nama                = $("#nama_jenisBarang");
  var satuan              = $('#satuan_jenisBarang')
  var nominal             = $("#nominal_jenisBarang");
  
  if(kategori.val() == ""){
    swalTemplate('error', 'Opps!', 'Kategori Harus Diisi');
    kategori.focus();
  }else if(nama.val() == ""){
    swalTemplate('error', 'Opps!', 'Nama Jenis Barang Harus Diisi');
    nama.focus();
  }else if(satuan.val() == ""){
    swalTemplate('error', 'Opps!', 'Satuan Jenis Barang Harus Diisi');
    satuan.focus();
  }else if(nominal.val() == ""){
    swalTemplate('error', 'Opps!', 'Nominal Jenis Barang Harus Diisi');
    nominal.focus(); 
  }else{
    $.ajax({
      url  : '<?php echo site_url('dashboard/jenis-barang/create')?>',
      type : 'POST',
      data : {
        kategori  : kategori.val(),
        nama      : nama.val(),
        satuan    : satuan.val(),
        nominal   : nominal.val()        
      },
      success:function(response){
        if (response == 'success') {
          swalTemplate('success', 'Penambahan Berhasil!!', 'Anda akan dialihkan', go_to('dashboard/jenis-barang'))
        } else {
          swalTemplate('error', 'Penmabahan Gagal!', 'Jenis barang sudah ada');
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

//Delete product
$('.tmb-delete').on('click',function(){
  var id        = this.id;
  console.log(id);
  
  $.ajax({
    url  : '<?php echo site_url('dashboard/jenis-barang/delete')?>',
    type : 'POST',
    data : {
      id  : id
    },
    success:function(response){
      if (response == 'success') {
        swalTemplate('success', 'Penghapusan Berhasil!!', 'Anda akan dialihkan', go_to('dashboard/jenis-barang'))
      } else {
        swalTemplate('error', 'Penghapusan Gagal!', 'Silahkan coba lagi');
      }
      console.log(response);
    },
    error:function(response){
      swalTemplate('error', 'Opps!', 'kesalahan pada server');
      console.log(response);
    }
  });
});
</script>