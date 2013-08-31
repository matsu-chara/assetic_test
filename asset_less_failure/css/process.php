<?php
$data = str_repeat("a", 100*1024*1024); 
fwrite(STDOUT, $data);
fwrite(STDERR, $data);
exit(0);
?>
