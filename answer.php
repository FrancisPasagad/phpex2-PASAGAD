<?php
    include "processes.php";
    
    if(isset($_POST["Ans"])){
        $option = $_POST["Ans"];

        switch ($option) {
            case 1:
                if (isset($_POST["first_value"]) . isset($_POST["second_value"])) {
                    $res = new processes;
                    $result = ($res -> maxRange($_POST["first_value"], $_POST["second_value"]));
                    echo '<h3>' . 'The answer is ' . $result. '.' .'</h3>';
                }
                break;
            case 2:
                if (isset($_POST["binary_value"])) {
                    $res = new processes;
                    $result = ($res-> binCount($_POST["binary_value"]));
                    echo '<h3>' . 'The answer is ' . $result. '.' .'</h3>';
                }
                break;
            case 3:
                if (isset($_POST["first_part"]) . isset($_POST["second_part"])) {
                    $res = new processes;
                    $result = ($res-> twoPrts($_POST["first_part"],$_POST["second_part"]));
                    echo '<h1>' . "The answer is " . $result.'.' .'</h1>';
                }
                break;
            case 4:
                if (isset($_POST["sastry_number"])) {
                    $res = new processes;
                    $result = ($res->sastryNum($_POST["sastry_number"]));
                    echo $result;
                }
                break;
            default:
            echo "<h1> Error </h1>";
        }
    }
        