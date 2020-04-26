<?php
session_start();
$_SESSION['alogin']=="";
session_unset();
//session_destroy();
$_SESSION['errmsg']="Você foi deslogado com sucesso";
?>
<script language="javascript">
document.location="index.php";
</script>
