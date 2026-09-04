<?php

// Interface, Abstract Class & Trait


/* == Interface =====================================

#Defination : যে class Interface-কে implement করবে এবং যদি interface-এর মধ্যে কোনো method থাকে, তখন সেই class-কে অবশ্যই সেই method ব্যবহার করতে হবে।

ex:
<?php

interface PaymentMethod
{
    public function pay(): void;
}

class BkashPayment implements PaymentMethod
{
    public function pay(): void
    {
        echo "Paid using Bkash";
    }
}

⚠️⚠️ মনে রাখতে হবে এটা শুধু একটা common rule তৈরি করে
✌️✌️ একটা class একাধিক interface implement করতে পারে
ex:
class Payment implements PaymentMethod, Refundable
{
    // ...
}

*/


/* == Abstract ==========================================

# Defination: Abstract class হলো এমন একটা base class, যেটা থেকে সরাসরি object তৈরি করা যায় না।

# Structure:
abstract class Animal
{
}

$animal = new Animal(); // এটা করা যাবে না কারণ Animal abstract।  কিন্তু child class বানানো যাবে

# Child Class:
class Dog extends Animal
{
}

$dog = new Dog(); //  এটা করা যাবে


# Abstract class-এর মধ্যে এমন method থাকতে পারে যার body নেই।

abstract class Animal
{
    abstract public function makeSound(): void;
}

⚠️⚠️ এখন child class-কে makeSound() implement করতেই হবে।

class Dog extends Animal
{
    public function makeSound(): void
    {
        echo "Woof";
    }
}

# Interface vs Abstract Class
Contract / Rule = Base class
implements = extends
সাধারণত method declaration = Abstract + normal method দুটোই থাকতে পারে
Multiple interface implement করা যায় =একটি parent class extend করা যায়
Shared state রাখার জন্য মূলত নয় = Property/state রাখতে পারে
“কী করতে হবে” = “কী করতে হবে + কিছু common behavior”
Rules = Rules + কিছু common কাজ আমি দিয়ে দিচ্ছি।


# Interface + Abstract Classদুটো একসাথে ব্যবহার

interface PaymentMethod
{
    public function pay(): void;
}

abstract class Payment implements PaymentMethod
{
    protected int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function showAmount(): void
    {
        echo "Amount: {$this->amount}".PHP_EOL;
    }
}

class BkashPayment extends Payment
{
    public function pay(): void
    {
        echo "Paid {$this->amount} using Bkash".PHP_EOL;
    }
}

*/

/* == Trait ==========================================

# Defination:Trait হলো reusable piece of code, যেটা একাধিক unrelated class-এর মধ্যে share করা যায়।

#Example Code:

trait Logger
{
    public function log(string $message): void
    {
        echo "LOG: {$message}".PHP_EOL;
    }
}

class User
{
    use Logger;
}

class Product
{
    use Logger;
}

দুটো class-ই log() method পেয়ে গেল।

*/