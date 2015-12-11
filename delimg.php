<?php
$_REQUEST['delimg'];
$user = "Navjyot";
unlink($_REQUEST['delimg']);
echo "<script>window.location.reset(); window.history.back(); </script>";
?>