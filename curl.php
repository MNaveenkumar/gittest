<?php

echo $string = file_get_contents('http://localhost/wikindx/cmsprint.php?action=getRecent&limit=10');
print_r(unserialize(base64_decode($string)));