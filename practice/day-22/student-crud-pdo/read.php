<?php

require_once "db.php";

function fetchStudentData($pdo, $student='all'){
   $whereClause = ($student !== 'all') ? "where id = :id" : "";
   $sql = "select * from students {$whereClause}";
    if($student==='all'){
        $stmt = $pdo->query($sql);

        $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($students as $student){
            echo $student['name'].PHP_EOL;
        } 
    }else{
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'id'=> $student
        ]);

        $student = $stmt->fetch(PDO::FETCH_ASSOC);
        echo $student['name'];
    }
}

fetchStudentData($pdo);

// Extra Challenge
fetchStudentData($pdo, 6);
