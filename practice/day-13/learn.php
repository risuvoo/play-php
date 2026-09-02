<?php

// OOP কী এবং কেন দরকার

/* 

Class => Blueprint/templeate
Object => Blueprint diya banano 1 ta object

# Concept Example: ধরে নাও তুমি একটা বিল্ডিং বানাবে। এর জন্য যে প্ল্যান বা ডিজাইন (Building Architecture) একজন ইঞ্জিনিয়ার তৈরি করে দেন, সেটা হচ্ছে Blueprint বা templeate —যেটাকে প্রোগ্রামিংয়ের ভাষায় বলা হয় (Class) । আর এই প্ল্যান বা ডিজাইন দেখে ওয়ার্কাররা বাস্তবে যে বিল্ডিংটা তৈরি করে, সেটা হচ্ছে (Object)।

# Property (প্রপার্টি): ক্লাসের (Class) ভেতরে যে ভ্যারিয়েবলগুলো (Variables) থাকে, সেগুলোকে বলা হয় Property বা Attribute। (যেমন: বিল্ডিংয়ের রং, কয়টা রুম বা কত তলা—এগুলো হলো বৈশিষ্ট্য বা ডাটা)।

# Method (মেথড): ক্লাসের (Class) ভেতরে যে ফাংশনগুলো (Functions) থাকে, সেগুলোকে বলা হয় Method। (যেমন: বিল্ডিংয়ের লিফট উপরে-নিচে যাওয়া, লাইট জ্বালানো বা দরজা খোলা/বন্ধ করা—এগুলো হলো কাজ বা অ্যাকশন)।

*/

// Basic Code Formate:
class User
{
    public string $name;
    public int $age;
}

$user = new User();

$user->name = "Suvo";
$user->age = 25;

echo $user->name;
echo $user->age;