<?php
    // require_once ("../include/db.php");
    //to show encrypt password before set database
 /*
    $pass ="student2021";
    $show_pass= password_hash($pass,PASSWORD_BCRYPT);
    echo $show_pass;
 */
    /* here are the list of plain pass== encripted pass

        01)$pass ="student2021";
        01) $pass ="ADmin2021"; == $2y$10$hulw2WViE6qny.D6sdDK5eWVHJTivrZgQV6P7UcTEOyf6B5W4XGqm
        02) $pass ="ADmin202101"; == $2y$10$0NInCvsJGgcD2qvwDXG/CuhIiu7AvWhqZOvL5CrF5wKMgPlWgPPse
    
    */
    if (isset($_POST["submit"])) 
    {
        $Student_ID = mysqli_real_escape_string($connect,$_POST["student_id"]);
        $Student_Mail = mysqli_real_escape_string($connect,$_POST["student_mail"]);
        $Student_Pass = mysqli_real_escape_string($connect,$_POST["student_key"]);

        $Errors=[];

        if (empty($Student_ID)) 
        {
            $Errors = "Please Insert Your Valaid Student ID";
        }
        if (empty($Student_Mail)) 
        {
            $Errors = "Please Insert Your Valaid Student ID";
        }
        if (empty($Student_Pass)) 
        {
            $Errors = "Please Insert Your Valaid Student ID";
        }
    }

?>