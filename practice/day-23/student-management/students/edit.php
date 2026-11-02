<?php
require_once __DIR__. '../../config/db.php';

$id = $_GET['id'];

$sql = "select * from students where id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'id'=> $id
]);
$student = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$student){
    die("Student not found!");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4f6f9;
            color: #333;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .card {
            background: #ffffff;
            width: 100%;
            max-width: 480px;
            padding: 32px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
        }

        .card-header {
            margin-bottom: 24px;
            text-align: center;
        }

        .card-header h2 {
            font-size: 24px;
            color: #1f2937;
            font-weight: 600;
        }

        .card-header p {
            font-size: 14px;
            color: #6b7280;
            margin-top: 6px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: 500;
            color: #374151;
        }

        .form-control {
            width: 100%;
            padding: 12px 14px;
            font-size: 15px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            background-color: #fff;
            color: #111827;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.15);
        }

        .btn-submit {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: 600;
            color: #ffffff;
            background-color: #4f46e5;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s ease, transform 0.1s ease;
        }

        .btn-submit:hover {
            background-color: #4338ca;
        }

        .btn-submit:active {
            transform: scale(0.99);
        }

        .form-footer {
            margin-top: 20px;
            text-align: center;
        }

        .form-footer a {
            color: #4f46e5;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="card-header">
            <h2>Update Student Information</h2>
            <p>Fill in the information below to create a student record</p>
        </div>

        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?=  $student['id']; ?>">
            <div class="form-group">
                <label for="name">Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    class="form-control" 
                    placeholder="Enter full name" 
                    value="<?= $student['name']; ?>"
                >
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="form-control" 
                    placeholder="Enter email address" 
                    value="<?= htmlspecialchars($student['email']); ?>"
                >
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input 
                    type="number" 
                    id="age" 
                    name="age" 
                    class="form-control" 
                    placeholder="Enter age" 
                    min="1" 
                    max="120" 
                    value="<?= htmlspecialchars($student['age']); ?>"
                >
            </div>

            <button type="submit" class="btn-submit">Update Student</button>
        </form>
    </div>
</body>
</html>

