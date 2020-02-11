
<?php
$link = mysqli_connect("localhost", "admin", "admin", "wp_theme_cafe");

if (mysqli_connect_error()) {
    echo 'error ('.mysqli_connect_error().'): '. mysqli_connect_error();
  
    exit();
}
echo "connected" . PHP_EOL;
echo "server info: " . mysqli_get_host_info($link) . PHP_EOL;


mysqli_close($link);
?>