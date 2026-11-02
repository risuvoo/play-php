<?php
require_once __DIR__ . "../../config/db.php";

$sql = "select * from students";
$stmt = $pdo->query($sql);
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
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
            padding: 40px 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: #ffffff;
            padding: 28px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            flex-wrap: wrap;
            gap: 12px;
        }

        .header h2 {
            font-size: 24px;
            color: #1f2937;
            font-weight: 600;
        }

        .btn-add {
            background-color: #4f46e5;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            transition: background-color 0.2s ease;
            display: inline-block;
        }

        .btn-add:hover {
            background-color: #4338ca;
        }

        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        thead {
            background-color: #f9fafb;
            border-bottom: 2px solid #e5e7eb;
        }

        th {
            padding: 14px 16px;
            font-size: 14px;
            font-weight: 600;
            color: #4b5563;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }

        td {
            padding: 14px 16px;
            font-size: 15px;
            color: #374151;
            border-bottom: 1px solid #f3f4f6;
        }

        tbody tr:hover {
            background-color: #f9fafb;
        }

        .actions {
            display: flex;
            gap: 8px;
        }

        .btn-edit {
            background-color: #f59e0b;
            color: #ffffff;
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 500;
            transition: background-color 0.2s ease;
        }

        .btn-edit:hover {
            background-color: #d97706;
        }

        .btn-delete {
            background-color: #ef4444;
            color: #ffffff;
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 500;
            transition: background-color 0.2s ease;
        }

        .btn-delete:hover {
            background-color: #dc2626;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h2>Student List</h2>
            <a href="create.php" class="btn-add">+ Add New Student</a>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($students as $student):
                    ?>
                    <tr>
                        <td><?= htmlspecialchars($student['id']) ?></td>
                        <td><?= htmlspecialchars($student['name']) ?></td>
                        <td><?= htmlspecialchars($student['email']) ?></td>
                        <td><?= htmlspecialchars($student['age']) ?></td>
                        <td>
                            <div class="actions">
                                <a href="edit.php?id=<?= $student['id']; ?>" class="btn-edit">Edit</a>
                                <form action="delete.php" method="POST">
                                    <input type="hidden" name="id"   value="<?= htmlspecialchars($student['id']); ?>">
                                    <button type="submit" class="btn-delete" style="border: none">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                     <?php 
                        endforeach;
                     ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>

