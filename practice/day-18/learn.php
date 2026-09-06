<?php

// Namespace, Autoloading & Composer


/* == Namespace =====================================================================

# Defination : ধরো একই project-এ তোমার দুইটা আলাদা class আছে, দুটোর নামই User | PHP conflict করবে, কারণ একই namespace-এর মধ্যে একই নামের দুইটা class রাখা যাবে না।
Namespace এই naming conflict solve করে।


# Example:

<?php

namespace App\Models;

class User
{
    public function getName(): string
    {
        return "Karim";
    }
}

এখানে namespace App\Models বলছে এই User class-এর পুরো নাম  App\Models\User

App
 ├── Models
 │    └── User.php
 │
 └── Services
      └── User.php


--------------------------------------
namespace App\Models;

class User
{
}
---------------------------------------
namespace App\Services;

class User
{
}
----------------------------------------
এখন conflict নেই কারণ তাদের full names আলাদা

*/



/* == use ===================================================================== 

# অন্য namespace-এর class ব্যবহার করতে use করা হয়।

# Example: 

namespace App\Controllers;

use App\Models\User; // এখানে এর মানে App\Models\User class-টাকে এই file-এ User নামে ব্যবহার করতে চাই।

class UserController
{
    public function show()
    {
        $user = new User();
    }
}

*/


/* == Autoloading & Composer =====================================================================  

# Autoloading : তুমি যখন কোনো class ব্যবহার করবে, PHP automatically সেই class-এর file load করবে। তাহলে তোমাকে প্রত্যেকটা class-এর জন্য আলাদা require লিখতে হবে না।
# Composer:  Composer হলো PHP-এর dependency manager। PHP project-এর packages এবং তাদের autoloading manage করার tool।

*/