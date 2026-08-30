<?php

require_once __DIR__."/config/config.php";
require_once __DIR__."/functions/helpers.php";

include __DIR__."/includes/header.php";

$f_name = formatProfileValue($name);
$f_profession = formatProfileValue($profession);
$f_country = formatProfileValue($country);


echo "Name: {$f_name}";
echo "<br/>";
echo "Profession: {$f_profession}";
echo "<br/>";
echo "Country: {$f_country}";

include __DIR__."/includes/footer.php";
