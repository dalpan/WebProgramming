<?php
include "connect.php";

mysqli_query($con,"DELETE FROM t_member WHERE ID = '".$_GET['id']."'");
echo "<script language=javascript>parent.location.href='list.php';</script>";
?>