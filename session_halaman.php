<?php 
	session_start();
	session_unset(); 
	session_destroy();
?>
<script>
	alert('Pesanan anda sudah terkirim');
</script>
 <meta http-equiv="refresh" content="0;url=index.php" />