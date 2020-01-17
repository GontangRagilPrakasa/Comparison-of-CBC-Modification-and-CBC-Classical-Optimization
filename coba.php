<?php
$hex = bin2hex($bin); // It will convert a binary data to its hex representation
$bin = pack("H*" , $hex); // It will convert a hex to binary
?>
<hr width="75%">