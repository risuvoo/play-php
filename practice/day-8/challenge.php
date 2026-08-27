<?php
$name = "   rAFIqUl islam suvo   ";
$email = "   SUVO@GMAIL.COM   ";

/* Tasks
1. Clean Name
2. Clean Email
3. Find the length of the name
4. Email string @ have or not
5. Get Username and Domain From Email
6. Output Should be:
========================
USER INFORMATION
========================
Name: RafiqUl Islam Suvo
Name Length: ...
Email: suvo@gmail.com
Username: suvo
Domain: gmail.com
Email Status: Valid email format
*/

function cleaner(string $name, string $type = 'name'):string{
    $cleanValue = trim(strtolower($name));
     if ($type === 'email') {
        return $cleanValue;
    }
    return ucwords($cleanValue);
}

$cleanName = cleaner($name);
$nameLngth = strlen($cleanName);
$cleanEmail = cleaner($email, 'email');
$userName = explode('@', $cleanEmail)[0];
$domain = explode('@', $cleanEmail)[1];
$emailStatus = strpos($cleanEmail, '@') !== false ? 'Valid email format': 'Invalid email format';

echo "========================\n";
echo "USER INFORMATION\n";
echo "========================\n";
echo "Name: {$cleanName}\n";
echo "Name Length: {$nameLngth}\n";
echo "Email: {$cleanEmail}\n";
echo "Username: {$userName}\n";
echo "Domain: {$domain}\n";
echo "Email Status: {$emailStatus}";