<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8" >
        <title>Lab 1</title>
    </head>
    <body style="font-size:30px">
        <?php
        //Include student class
        include('student.php');
        
        //Creates an array to store students
        $students = array();
        
        //First Student
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        //Second Student
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        //Third Student
        $thrid = new Student();
        $thrid->surname = "Lau";
        $thrid->first_name = "Eric";
        $thrid->add_email('home','testHome@email.com');
        $thrid->add_email('work','fakeWork@email.com');
        $thrid->add_grade(69);
        $thrid->add_grade(42);
        $thrid->add_grade(100);
        $students['e666'] = $thrid;

        //Sorts students in acending order by array key
        ksort($students);
        
        //Prints information of each student in $students array
        foreach($students as $student)
        echo $student->toString();

        ?>
    </body>
</html>
