<?php

/* Date & Time */

$date = date('m/d/Y g:ia' ,strtotime('second friday of february'));

echo '<pre>';
print_r(date_parse_from_format('m/d/Y g:ia', $date));
echo '</pre>';