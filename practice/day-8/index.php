<?php

/* What I learn This day
* String Handling & Useful Functions
1. String কী
2. Single quote vs Double quote
3. String concatenation
4. String interpolation
5. strlen()
6. strtoupper()
7. strtolower()
8. ucfirst()
9. ucwords()
10. trim()
11. str_replace()
12. strpos()
13. substr()
14. explode()
15. implode()
16. String comparison
17. Useful real-world examples
*/

// strlen() String-এর কতগুলো character আছে সেটা বের করে।
$name = "Suvo";
echo strlen($name);

// strtoupper() সব character uppercase করবে।
$name = "suvo";
echo strtoupper($name);

// strtolower()  সব character lowercase করবে।
$name = "SUVO";
echo strtolower($name);

// ucfirst()
$name = "suvo";
echo ucfirst($name);

// ucwords() প্রতিটা word-এর প্রথম character uppercase করে।
$name = "rafiqul islam suvo";
echo ucwords($name);

// trim() String-এর শুরু এবং শেষের unwanted whitespace remove করে।
$name = "   Suvo   ";
echo trim($name);

// str_replace() একটা string-এর ভিতরের কোনো অংশ replace করতে ব্যবহার করি। 
/* 
Syntax: str_replace(search, replace, string);
*/
$text = "I love JavaScript";
$text = str_replace("JavaScript", "PHP", $text);
echo $text;

// strpos() String-এর ভিতরে কোনো text কোথায় আছে সেটা খুঁজে বের করে।
$email = "suvo@gmail.com";
$position = strpos($email, "@");
echo $position;

// substr() String-এর একটা অংশ বের করে।
/* 
structure: substr(string, start, length) |  substr(string, index) মানে index থেকে শেষ পর্যন্ত।
*/
$text = "Hello World";
echo substr($text, 0, 5);

// explode() একটা string-কে separator অনুযায়ী array বানায়।
$skills = "PHP,Laravel,MySQL";
$result = explode(",", $skills);
print_r($result);

// implode() explode() এর বিপরীত কাজ করে।
$skills = [
    "PHP",
    "Laravel",
    "MySQL"
];
$result = implode(", ", $skills);
echo $result;

// String Processing Pipeline ( Real-world code-এ একাধিক function একসাথে ব্যবহার করা হয়। )
$name = "   rafiqul islam suvo   ";
/* Expected Output: Rafiqul Islam Suvo */
$name = trim($name);
$name = strtolower($name);
$name = ucwords($name);
echo $name;