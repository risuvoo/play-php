<?php
require_once __DIR__ . "../../config/db.php";

$age = isset($_GET['age']) && $_GET['age'] !== ''
    ? (int) $_GET['age']
    : 18;

$sql = "SELECT * FROM students
        WHERE age >= :age
        ORDER BY age ASC";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'age' => $age
]);

$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Students by Age</title>
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

        .nav-links {
            display: flex;
            gap: 10px;
        }

        .btn-link {
            background-color: #f3f4f6;
            color: #374151;
            text-decoration: none;
            padding: 8px 14px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            transition: background-color 0.2s ease;
        }

        .btn-link:hover {
            background-color: #e5e7eb;
        }

        .btn-add {
            background-color: #4f46e5;
            color: #ffffff;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            transition: background-color 0.2s ease;
        }

        .btn-add:hover {
            background-color: #4338ca;
        }

        .filter-box {
            background-color: #f9fafb;
            border: 1px solid #e5e7eb;
            padding: 16px 20px;
            border-radius: 8px;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .filter-box label {
            font-size: 14px;
            font-weight: 600;
            color: #374151;
        }

        .filter-input {
            padding: 8px 12px;
            font-size: 14px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            width: 120px;
        }

        .filter-input:focus {
            outline: none;
            border-color: #4f46e5;
        }

        .btn-filter {
            background-color: #4f46e5;
            color: #ffffff;
            border: none;
            padding: 8px 18px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .btn-filter:hover {
            background-color: #4338ca;
        }

        .filter-info {
            font-size: 14px;
            color: #6b7280;
            margin-left: auto;
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

        .badge-age {
            background-color: #ecfdf5;
            color: #065f46;
            font-weight: 600;
            padding: 3px 8px;
            border-radius: 6px;
            font-size: 13px;
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

        .no-data {
            text-align: center;
            padding: 24px;
            color: #6b7280;
            font-size: 15px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h2>Students Filter (Age &ge; <?= htmlspecialchars($age) ?>)</h2>
            <div class="nav-links">
                <a href="index.php" class="btn-link">&larr; All Students</a>
                <a href="create.php" class="btn-add">+ Add Student</a>
            </div>
        </div>

        <!-- Filter Form -->
        <form method="GET" action="filter.php" class="filter-box">
            <label for="age">Minimum Age:</label>
            <input 
                type="number" 
                id="age" 
                name="age" 
                value="<?= htmlspecialchars($age) ?>" 
                min="1" 
                max="120" 
                class="filter-input" 
                required
            >
            <button type="submit" class="btn-filter">Filter</button>
            <span class="filter-info">Showing students where age &ge; <?= htmlspecialchars($age) ?></span>
        </form>

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
                    <?php if (!empty($students)): ?>
                        <?php foreach ($students as $student): ?>
                        <tr>
                            <td><?= $student['id'] ?></td>
                            <td><?= htmlspecialchars($student['name']) ?></td>
                            <td><?= htmlspecialchars($student['email']) ?></td>
                            <td>
                                <span class="badge-age"><?= $student['age'] ?> yrs</span>
                            </td>
                            <td>
                                <div class="actions">
                                    <a href="edit.php?id=<?= $student['id']; ?>" class="btn-edit">Edit</a>
                                    <a href="delete.php?id=<?= $student['id']; ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete this student?')">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="no-data">No students found with age &ge; <?= htmlspecialchars($age) ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>

