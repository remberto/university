<?php

header ("Content-Disposition: attachment; filename=".$filename." "); 
header ("Content-Type: application/octet-stream");
header ("Content-Length: ".filesize($enlace));
readfile($enlace);
