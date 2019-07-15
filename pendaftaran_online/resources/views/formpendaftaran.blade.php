<!DOCTYPE html>
<html lang="en">
<head>
	<title>halaman pendaftaran</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="assetsfrom/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assetsfrom/css/baju.css">

<!--===============================================================================================-->
</head>
<body>
	<div class="container">  
  <form id="contact" action="{{route('formulirpendaftaran.store')}}" enctype="multipart/form-data" method="post">
    @csrf
    <h3>FORM PENDAFTARAN</h3>
    <h4></h4>
    <fieldset>
      <input placeholder="Nama lengkap" name="nama" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="NIS" type="number" class="form-control" pattern="[0-9]+" onkeypress="return isNumberKey(event)" tabindex="2" name="nis" required>
    </fieldset>
    <fieldset>
      <input placeholder="Tempat Tanggal Lahir" name="tgl_lahir" type="Date" tabindex="3" required>
    </fieldset>
    <fieldset>
    <textarea required name="alamat" name="alamat" placeholder="Masukan Alamat"></textarea>
<!--       //<input placeholder="Alamat" type="tex" tabindex="4" required>
 --></fieldset>
    <fieldset>
      <input placeholder="No Hp siswa" name="no_hp" type="tel" tabindex="5" required>
    </fieldset>
    <fieldset>
      <input placeholder="Nama Ayah" name="nama_ayah" type="text" tabindex="6" required>
    </fieldset>
    <fieldset>
      <input placeholder="Nama Ibu" name="nama_ibu" type="text" tabindex="7" required>
    </fieldset>
    <fieldset>
      <input placeholder="Nama Asal Sekolah" name="asal_sekolah" type="text" tabindex="8" required>
    </fieldset>
  
    <fieldset>
      <input placeholder="Nilai/Nim" name="nilai" type="number" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="ijazah" type="file" name="ijazah" tabindex="3" required>
    </fieldset>
    
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <p class="copyright"><a href="https://colorlib.com" target="_blank" title="Colorlib"></a></p>
  </form>
</div>




<!--===============================================================================================-->
	<script src="assetsfrom/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assetsfrom/vendor/bootstrap/js/popper.js"></script>
	<script src="assetsfrom/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assetsfrom/vendor/select2/select2.min.js"></script>
	<script>
		function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode

if (charCode < 31 || (charCode >= 48 && charCode <= 57 ) || (charCode >= 96 && charCode <= 105 ))
        return true;
    return false;
}
	</script>
<!--===============================================================================================-->
	<script src="assetsfrom/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="assetsfrom/js/main.js"></script>

</body>
</html>
