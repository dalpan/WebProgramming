<html>
<head>
<?php 
include "header.php";
include "alerts.php";
include "connect.php";
?>
</head>
<body>
<body background="background.jpg">
<div class="container">
<?php include "nav.php"; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Billie Ellish Fansbase</h1>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-md-6">
	<img src="thumb.jpeg" alt="debiru" width="500">
</div>


<div class="row">
	<div class="col-md-6">
	<form id="form_input" method="POST">	

<?php  
if(isset($_POST['simpan']))
{
	mysqli_query($con,"INSERT INTO t_member (nama, email, hp) VALUES ('".$_POST['nama']."','".$_POST['email']."','".$_POST['hp']."')");
	writeMsg('save.sukses');
}
?>

	<div class="form-group">
  		<label class="control-label" for="nama">Name*</label>
  		<input type="text" class="form-control" name="nama" id="nama" required>
	</div>

	<div class="form-group">
  		<label class="control-label" for="email">Email*</label>
  		<input type="email" class="form-control" name="email" id="email" required>
	</div>

	<div class="form-group">
  		<label class="control-label" for="hp">No HP</label>
  		<input type="text" class="form-control" name="hp" id="hp">
	</div>

	<div class="form-group">
	<input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
	<input type="reset" value="Reset" class="btn btn-danger">
	</div>

	</form>
	</div>
</div>

</div>
<?php include "footer.php"; ?>
</body>
</html>