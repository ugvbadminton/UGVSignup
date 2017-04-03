<?php
    if(!isset($_POST['submit'])){
        die('');
    }else{
        include("cn.php");
        function input($input){
            $input = strip_tags($input);
            $input = addslashes($input);
            return $input;
        }
        function checkexistofemail($email){
            $sql = "select * from member where email = '$email'";
            $num_row = mysql_num_rows(mysql_query($sql));
            return $num_row;
            // return 0 if that email is not exist in database.
        }
        
        //get field first name
        $first_name = $_POST['first_name'];
        $first_name = input($first_name);
        // get field last name
        $last_name = $_POST['last_name'];
        $last_name = input($last_name);
        // get field email address
        $email = $_POST['email'];
        $email = input($email);
        $checkemail =  checkexistofemail($email);
        // get gender choice
        $gender = $_POST['gender'];
        $gender = input($gender);
        // get field phone number
        $phone = $_POST['phone'];
        $phone = input($phone);
        // get field student ID
        $sid = $_POST['sid'];
        $sid = input($sid);
        // field facebook name
        $fbn = $_POST['fbn'];
        $fbn = input($fbn);
        // get occupation
        $oc = $_POST['oc'];
        $oc = input($oc);
        // get field school
        $school = $_POST['school'];
        $school = input($school);
        // get field major
        $Major = $_POST['Major'];
        $Major = input($Major);
        // get field company
        $com = $_POST['com'];
        $com = input($com);
        // get sign up as
        $Sua = $_POST['Sua'];
        $Sua = input($Sua);
        // insert query
        // checkmail !0 -> that EMail is exist.
        // NamHuynh did this
        if($checkemail!=0){
            echo("<SCRIPT LANGUAGE = 'JavaScript')>
                window.alert('Email is not valid or existed')
                window.location.href='index.php'</SCRIPT>");
        } else {
            $sql = "insert into member(first_name,last_name,email,gender,phone,sid,fbn,oc,school,major,com,sua) values('$first_name','$last_name','$email','$gender','$phone','$sid','$fbn','$oc','$school','$Major','$com','$Sua')";
            mysql_query($sql);
            
            //Camfix
            echo("<SCRIPT LANGUAGE = 'JavaScript')>
                    window.alert('Thank for signning up!.')
                    window.location.href='index.php'</SCRIPT>");
        }
        mysql_close();
    }
?>