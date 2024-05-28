<?php
    if $_POST['fn']  $_POST['sn']
    if ($_POST['op'] == "+"){
        $p = $_POST['fn'] + $_POST['sn'];
        echo $_POST['fn'] . " + " . $_POST['sn'] . " = " . $p;
    }else if ($_POST['op'] == "-"){
        $p = $_POST['fn'] - $_POST['sn'];
        echo $_POST['fn'] . "  -" . $_POST['sn'] . " = " . $p;
    }
    else if ($_POST['op'] == "*"){
        $p = $_POST['fn'] * $_POST['sn'];
        echo $_POST['fn'] . " x " . $_POST['sn'] . " = " . $p;
    }else if ($_POST['op'] == "/"){
        $p = $_POST['fn'] / $_POST['sn'];
        echo $_POST['fn'] . " / " . $_POST['sn'] . " = " . $p;
    }
?>
