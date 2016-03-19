<html>
<head>
<title>Panel de control - Sistema domotico libre</title>
</head>

<body>
<div align="center">
<br></br>

 <!--GPIO4/IN1-->
 <form action="" method="post">
 Interruptor 01 &nbsp;<input type="submit" name="encender4" value="Encender">
 <input type="submit" name="apagar4" value="Apagar">

 <!--GPIO17/IN2-->
 <form action="" method="post">
 &nbsp; Interruptor 02 &nbsp;<input type="submit" name="encender17" value="Encender">
 <input type="submit" name="apagar17" value="Apagar">

<br></br>

 <!--GPIO27/IN3-->
 <form action="" method="post">
 Interruptor 03 &nbsp;<input type="submit" name="encender27" value="Encender">
 <input type="submit" name="apagar27" value="Apagar">

 <!--GPIO22/IN4-->
 <form action="" method="post">
 &nbsp; Interruptor 04 &nbsp;<input type="submit" name="encender22" value="Encender">
 <input type="submit" name="apagar22" value="Apagar">

<br></br>

 <!--GPIO18/IN5-->
 <form action="" method="post">
 Interruptor 05 &nbsp;<input type="submit" name="encender18" value="Encender">
 <input type="submit" name="apagar18" value="Apagar">

 <!--GPIO23/IN6-->
 <form action="" method="post">
 &nbsp; Interruptor 06 &nbsp;<input type="submit" name="encender23" value="Encender">
 <input type="submit" name="apagar23" value="Apagar">

<br></br>

 <!--GPIO24/IN7-->
 <form action="" method="post">
 Interruptor 07 &nbsp;<input type="submit" name="encender24" value="Encender">
 <input type="submit" name="apagar24" value="Apagar">

 <!--GPIO25/IN8-->
 <form action="" method="post">
 &nbsp; Interruptor 08 &nbsp;<input type="submit" name="encender25" value="Encender">
 <input type="submit" name="apagar25" value="Apagar">

<br></br>

 <!--GPIO5/IN1-->
 <form action="" method="post">
 Interruptor 09 &nbsp;<input type="submit" name="encender5" value="Encender">
 <input type="submit" name="apagar5" value="Apagar">

 <!--GPIO6/IN2-->
 <form action="" method="post">
 &nbsp; Interruptor 10 &nbsp;<input type="submit" name="encender6" value="Encender">
 <input type="submit" name="apagar6" value="Apagar">

<br></br>

 <!--GPIO13/IN3-->
 <form action="" method="post">
 Interruptor 11&nbsp;<input type="submit" name="encender13" value="Encender">
 <input type="submit" name="apagar13" value="Apagar">

 <!--GPIO12/IN4-->
 <form action="" method="post">
 &nbsp; Interruptor 12 &nbsp;<input type="submit" name="encender12" value="Encender">
 <input type="submit" name="apagar12" value="Apagar">

<br></br>

 <!--GPIO19/IN5-->
 <form action="" method="post">
 Interruptor 13 &nbsp;<input type="submit" name="encender19" value="Encender">
 <input type="submit" name="apagar19" value="Apagar">

 <!--GPIO16/IN6-->
 <form action="" method="post">
 &nbsp; Interruptor 14 &nbsp;<input type="submit" name="encender16" value="Encender">
 <input type="submit" name="apagar16" value="Apagar">

<br></br>

 <!--GPIO20/IN7-->
 <form action="" method="post">
 Interruptor 15 &nbsp;<input type="submit" name="encender20" value="Encender">
 <input type="submit" name="apagar20" value="Apagar">

 <!--GPIO21/IN8-->
 <form action="" method="post">
 &nbsp; Interruptor 16 &nbsp;<input type="submit" name="encender21" value="Encender">
 <input type="submit" name="apagar21" value="Apagar">

</div>
</body>
</html>

<?php

// Funciones PHP del pin GPIO 4

 if ($_POST[encender4]) {
 $a- exec("echo 4 > /sys/class/gpio/export");
 $a- exec("echo out > /sys/class/gpio/gpio4/direction");
 $a- exec("echo 1 > /sys/class/gpio/gpio4/value");
 echo $a;
 }

 if ($_POST[apagar4]) {
 $a- exec("echo 0 > /sys/class/gpio/gpio4/value");
 echo $a;
 }

// Fin de las funciónes del pin GPIO 4

// Funciones PHP del pin GPIO 17

 if ($_POST[encender17]) {
 $a- exec("echo 17 > /sys/class/gpio/export");
 $a- exec("echo out > /sys/class/gpio/gpio17/direction");
 $a- exec("echo 1 > /sys/class/gpio/gpio17/value");
 echo $a;
 }

 if ($_POST[apagar17]) {
 $a- exec("sudo echo 0 > /sys/class/gpio/gpio17/value");
 $a- exec("echo 17 > /sys/class/gpio/unexport");
 echo $a;
 }

// Fin de las funciónes del pin GPIO 17

// Funciones PHP del pin GPIO 27

 if ($_POST[encender27]) {
 $a- exec("echo 27 > /sys/class/gpio/export");
 $a- exec("echo out > /sys/class/gpio/gpio27/direction");
 $a- exec("echo 1 > /sys/class/gpio/gpio27/value");
 echo $a;
 }

 if ($_POST[apagar27]) {
 $a- exec("sudo echo 0 > /sys/class/gpio/gpio27/value");
 $a- exec("echo 27 > /sys/class/gpio/unexport");
 echo $a;
 }

// Fin de las funciónes del pin GPIO 27

// Funciones PHP del pin GPIO 22

 if ($_POST[encender22]) {
 $a- exec("echo 22 > /sys/class/gpio/export");
 $a- exec("echo out > /sys/class/gpio/gpio22/direction");
 $a- exec("echo 1 > /sys/class/gpio/gpio22/value");
 echo $a;
 }

 if ($_POST[apagar22]) {
 $a- exec("sudo echo 0 > /sys/class/gpio/gpio22/value");
 $a- exec("echo 22 > /sys/class/gpio/unexport");
 echo $a;
 }

// Fin de las funciónes del pin GPIO 22

// Funciones PHP del pin GPIO 18

 if ($_POST[encender18]) {
 $a- exec("echo 18 > /sys/class/gpio/export");
 $a- exec("echo out > /sys/class/gpio/gpio18/direction");
 $a- exec("echo 1 > /sys/class/gpio/gpio18/value");
 echo $a;
 }

 if ($_POST[apagar18]) {
 $a- exec("sudo echo 0 > /sys/class/gpio/gpio18/value");
 $a- exec("echo 18 > /sys/class/gpio/unexport");
 echo $a;
 }

// Fin de las funciónes del pin GPIO 18

// Funciones PHP del pin GPIO 23

 if ($_POST[encender23]) {
 $a- exec("echo 23 > /sys/class/gpio/export");
 $a- exec("echo out > /sys/class/gpio/gpio23/direction");
 $a- exec("echo 1 > /sys/class/gpio/gpio23/value");
 echo $a;
 }

 if ($_POST[apagar23]) {
 $a- exec("sudo echo 0 > /sys/class/gpio/gpio23/value");
 $a- exec("echo 23 > /sys/class/gpio/unexport");
 echo $a;
 }

// Fin de las funciónes del pin GPIO 23

// Funciones PHP del pin GPIO 24

 if ($_POST[encender24]) {
 $a- exec("echo 24 > /sys/class/gpio/export");
 $a- exec("echo out > /sys/class/gpio/gpio24/direction");
 $a- exec("echo 1 > /sys/class/gpio/gpio24/value");
 echo $a;
 }

 if ($_POST[apagar24]) {
 $a- exec("sudo echo 0 > /sys/class/gpio/gpio24/value");
 $a- exec("echo 24 > /sys/class/gpio/unexport");
 echo $a;
 }

// Fin de las funciónes del pin GPIO 24

// Funciones PHP del pin GPIO 25

 if ($_POST[encender25]) {
 $a- exec("echo 25 > /sys/class/gpio/export");
 $a- exec("echo out > /sys/class/gpio/gpio25/direction");
 $a- exec("echo 1 > /sys/class/gpio/gpio25/value");
 echo $a;
 }

 if ($_POST[apagar25]) {
 $a- exec("sudo echo 0 > /sys/class/gpio/gpio25/value");
 $a- exec("echo 25 > /sys/class/gpio/unexport");
 echo $a;
 }

// Fin de las funciónes del pin GPIO 25

// Funciones PHP del pin GPIO 5

 if ($_POST[encender5]) {
 $a- exec("echo 5 > /sys/class/gpio/export");
 $a- exec("echo out > /sys/class/gpio/gpio5/direction");
 $a- exec("echo 1 > /sys/class/gpio/gpio5/value");
 echo $a;
 }

 if ($_POST[apagar5]) {
 $a- exec("sudo echo 0 > /sys/class/gpio/gpio5/value");
 $a- exec("echo 5 > /sys/class/gpio/unexport");
 echo $a;
 }

// Fin de las funciónes del pin GPIO 5

// Funciones PHP del pin GPIO 6

 if ($_POST[encender6]) {
 $a- exec("echo 6 > /sys/class/gpio/export");
 $a- exec("echo out > /sys/class/gpio/gpio6/direction");
 $a- exec("echo 1 > /sys/class/gpio/gpio6/value");
 echo $a;
 }

 if ($_POST[apagar6]) {
 $a- exec("sudo echo 0 > /sys/class/gpio/gpio6/value");
 $a- exec("echo 6 > /sys/class/gpio/unexport");
 echo $a;
 }

// Fin de las funciónes del pin GPIO 6

// Funciones PHP del pin GPIO 13

 if ($_POST[encender13]) {
 $a- exec("echo 13 > /sys/class/gpio/export");
 $a- exec("echo out > /sys/class/gpio/gpio13/direction");
 $a- exec("echo 1 > /sys/class/gpio/gpio13/value");
 echo $a;
 }

 if ($_POST[apagar13]) {
 $a- exec("sudo echo 0 > /sys/class/gpio/gpio13/value");
 $a- exec("echo 13 > /sys/class/gpio/unexport");
 echo $a;
 }

// Fin de las funciónes del pin GPIO 13

// Funciones PHP del pin GPIO 12

 if ($_POST[encender12]) {
 $a- exec("echo 12 > /sys/class/gpio/export");
 $a- exec("echo out > /sys/class/gpio/gpio12/direction");
 $a- exec("echo 1 > /sys/class/gpio/gpio12/value");
 echo $a;
 }

 if ($_POST[apagar12]) {
 $a- exec("sudo echo 0 > /sys/class/gpio/gpio12/value");
 $a- exec("echo 12 > /sys/class/gpio/unexport");
 echo $a;
 }

// Fin de las funciónes del pin GPIO 12

// Funciones PHP del pin GPIO 19

 if ($_POST[encender19]) {
 $a- exec("echo 19 > /sys/class/gpio/export");
 $a- exec("echo out > /sys/class/gpio/gpio19/direction");
 $a- exec("echo 1 > /sys/class/gpio/gpio19/value");
 echo $a;
 }

 if ($_POST[apagar19]) {
 $a- exec("sudo echo 0 > /sys/class/gpio/gpio19/value");
 $a- exec("echo 19 > /sys/class/gpio/unexport");
 echo $a;
 }

// Fin de las funciónes del pin GPIO 19

// Funciones PHP del pin GPIO 16

 if ($_POST[encender16]) {
 $a- exec("echo 16 > /sys/class/gpio/export");
 $a- exec("echo out > /sys/class/gpio/gpio16/direction");
 $a- exec("echo 1 > /sys/class/gpio/gpio16/value");
 echo $a;
 }

 if ($_POST[apagar16]) {
 $a- exec("sudo echo 0 > /sys/class/gpio/gpio16/value");
 $a- exec("echo 16 > /sys/class/gpio/unexport");
 echo $a;
 }

// Fin de las funciónes del pin GPIO 16

// Funciones PHP del pin GPIO 20

 if ($_POST[encender20]) {
 $a- exec("echo 20 > /sys/class/gpio/export");
 $a- exec("echo out > /sys/class/gpio/gpio20/direction");
 $a- exec("echo 1 > /sys/class/gpio/gpio20/value");
 echo $a;
 }

 if ($_POST[apagar20]) {
 $a- exec("sudo echo 0 > /sys/class/gpio/gpio20/value");
 $a- exec("echo 20 > /sys/class/gpio/unexport");
 echo $a;
 }

// Fin de las funciónes del pin GPIO 20

// Funciones PHP del pin GPIO 21

 if ($_POST[encender21]) {
 $a- exec("echo 21 > /sys/class/gpio/export");
 $a- exec("echo out > /sys/class/gpio/gpio21/direction");
 $a- exec("echo 1 > /sys/class/gpio/gpio21/value");
 echo $a;
 }

 if ($_POST[apagar21]) {
 $a- exec("sudo echo 0 > /sys/class/gpio/gpio21/value");
 $a- exec("echo 21 > /sys/class/gpio/unexport");
 echo $a;
 }

// Fin de las funciónes del pin GPIO 21

?>
