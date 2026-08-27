<?php

$email = "suvo@gmail.com";

$strToArr = explode('@', $email);

echo "Username: {$strToArr[0]}\n";
echo "Domain: {$strToArr[1]}";