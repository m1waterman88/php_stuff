<html>
<head>
  <!--<link rel="stylesheet" href="../../../../etc/passwd">-->
  <!--<script src="../../../../../etc/passwd%00"></script>-->
<head>
<body>
  <?php

    require('hello.php');
    require('hello.php');
    // Below won't print, as the file has previously been used.
    require_once('hello.php');

    include('hello.php');
    include_once('hello.php');

    // include("../python_scripts/python_files/wayback.py");
  ?>
  <br><br>
  <?php
    //include("/etc/passwd");
  ?>
</body>
</html>
