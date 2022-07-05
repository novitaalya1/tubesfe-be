<?php
    if(isset($_POST['update']))
	{
		$id = $_POST['id'];
		
		$query = "UPDATE 'mahasiswa' SET nama'$_POST[nama]',tgl_lahir'$_POST[tgl_lahir]',kota'$_POST[kota]',agama'$_POST[agama]',tinggi'$_POST[tinggi]',berat'$_POST[berat]' where id='$_POST[id]'"
		$query_run = mysqli_query($connection,$query);
	}
	if($query_run)
	{
		echo '<script type="text/javascript"> alert("Data Edited") </script>
	}
	else
	{
		echo '<script type="text/javascript"> alert("Data Not Edited")
	}
?>
