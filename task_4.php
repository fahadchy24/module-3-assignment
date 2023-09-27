<?php
/* Task 4: Multidimensional Array */

$studentGrades = [
    'Student1' => ['Math' => 80, 'English' => 80, 'Science' => 80],
    'Student2' => ['Math' => 70, 'English' => 60, 'Science' => 90],
    'Student3' => ['Math' => 50, 'English' => 55, 'Science' => 40],
];

function calculateAverageGrades($studentGrades)
{
    foreach ($studentGrades as $student => $grades) {
        $averageGrade = array_sum($grades) / count($grades);

        echo "Average grade for $student: $averageGrade\n";
    }
}

calculateAverageGrades($studentGrades);