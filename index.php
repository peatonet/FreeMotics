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
 $estado_gpio4 = file_get_contents('/sys/class/gpio/gpio4/value');

 if ($_POST[encender4]) {
   if (!file_exists("/sys/class/gpio/gpio4")) {
       exec("echo 4 > /sys/class/gpio/export");
     }

     if (!file_exists("/sys/class/gpio/gpio4/direction")) {
       exec("echo out > /sys/class/gpio/gpio4/direction");
     }

     if ($estado_gpio4 == 0) {
       exec("echo 1 > /sys/class/gpio/gpio4/value");
      }
  }

  if ($_POST[apagar4]) {
    if ($estado_gpio4 == 1) {
    exec("echo 0 > /sys/class/gpio/gpio4/value");
  }
}
// Fin de las funciónes del pin GPIO 4

// Funciones PHP del pin GPIO 17
$estado_gpio17 = file_get_contents('/sys/class/gpio/gpio17/value');

 if ($_POST[encender17]) {
   if (!file_exists("/sys/class/gpio/gpio17")) {
       exec("echo 17 > /sys/class/gpio/export");
     }

     if (!file_exists("/sys/class/gpio/gpio17/direction")) {
       exec("echo out > /sys/class/gpio/gpio17/direction");
     }

     if ($estado_gpio17 == 0) {
       exec("echo 1 > /sys/class/gpio/gpio17/value");
      }
  }

  if ($_POST[apagar17]) {
    if ($estado_gpio17 == 1) {
    exec("echo 0 > /sys/class/gpio/gpio17/value");
  }
}
// Fin de las funciónes del pin GPIO 17

// Funciones PHP del pin GPIO 27
$estado_gpio27 = file_get_contents('/sys/class/gpio/gpio27/value');

 if ($_POST[encender27]) {
   if (!file_exists("/sys/class/gpio/gpio27")) {
       exec("echo 27 > /sys/class/gpio/export");
     }

     if (!file_exists("/sys/class/gpio/gpio27/direction")) {
       exec("echo out > /sys/class/gpio/gpio27/direction");
     }

     if ($estado_gpio27 == 0) {
       exec("echo 1 > /sys/class/gpio/gpio27/value");
      }
  }

  if ($_POST[apagar27]) {
    if ($estado_gpio27 == 1) {
    exec("echo 0 > /sys/class/gpio/gpio27/value");
  }
}
// Fin de las funciónes del pin GPIO 27

// Funciones PHP del pin GPIO 22
$estado_gpio22 = file_get_contents('/sys/class/gpio/gpio22/value');

 if ($_POST[encender22]) {
   if (!file_exists("/sys/class/gpio/gpio22")) {
       exec("echo 22 > /sys/class/gpio/export");
     }

     if (!file_exists("/sys/class/gpio/gpio22/direction")) {
       exec("echo out > /sys/class/gpio/gpio22/direction");
     }

     if ($estado_gpio22 == 0) {
       exec("echo 1 > /sys/class/gpio/gpio22/value");
      }
  }

  if ($_POST[apagar22]) {
    if ($estado_gpio22 == 1) {
    exec("echo 0 > /sys/class/gpio/gpio22/value");
  }
}
// Fin de las funciónes del pin GPIO 22

// Funciones PHP del pin GPIO 18
$estado_gpio18 = file_get_contents('/sys/class/gpio/gpio18/value');

 if ($_POST[encender18]) {
   if (!file_exists("/sys/class/gpio/gpio18")) {
       exec("echo 18 > /sys/class/gpio/export");
     }

     if (!file_exists("/sys/class/gpio/gpio18/direction")) {
       exec("echo out > /sys/class/gpio/gpio18/direction");
     }

     if ($estado_gpio18 == 0) {
       exec("echo 1 > /sys/class/gpio/gpio18/value");
      }
  }

  if ($_POST[apagar18]) {
    if ($estado_gpio18 == 1) {
    exec("echo 0 > /sys/class/gpio/gpio18/value");
  }
}
// Fin de las funciónes del pin GPIO 18

// Funciones PHP del pin GPIO 23
$estado_gpio23 = file_get_contents('/sys/class/gpio/gpio23/value');

 if ($_POST[encender23]) {
   if (!file_exists("/sys/class/gpio/gpio23")) {
       exec("echo 23 > /sys/class/gpio/export");
     }

     if (!file_exists("/sys/class/gpio/gpio23/direction")) {
       exec("echo out > /sys/class/gpio/gpio23/direction");
     }

     if ($estado_gpio23 == 0) {
       exec("echo 1 > /sys/class/gpio/gpio23/value");
      }
  }

  if ($_POST[apagar23]) {
    if ($estado_gpio23 == 1) {
    exec("echo 0 > /sys/class/gpio/gpio23/value");
  }
}
// Fin de las funciónes del pin GPIO 23

// Funciones PHP del pin GPIO 24
$estado_gpio24 = file_get_contents('/sys/class/gpio/gpio24/value');

 if ($_POST[encender24]) {
   if (!file_exists("/sys/class/gpio/gpio24")) {
       exec("echo 24 > /sys/class/gpio/export");
     }

     if (!file_exists("/sys/class/gpio/gpio24/direction")) {
       exec("echo out > /sys/class/gpio/gpio24/direction");
     }

     if ($estado_gpio24 == 0) {
       exec("echo 1 > /sys/class/gpio/gpio24/value");
      }
  }

  if ($_POST[apagar24]) {
    if ($estado_gpio24 == 1) {
    exec("echo 0 > /sys/class/gpio/gpio24/value");
  }
}
// Fin de las funciónes del pin GPIO 24

// Funciones PHP del pin GPIO 25
$estado_gpio25 = file_get_contents('/sys/class/gpio/gpio25/value');

 if ($_POST[encender25]) {
   if (!file_exists("/sys/class/gpio/gpio25")) {
       exec("echo 25 > /sys/class/gpio/export");
     }

     if (!file_exists("/sys/class/gpio/gpio25/direction")) {
       exec("echo out > /sys/class/gpio/gpio25/direction");
     }

     if ($estado_gpio25 == 0) {
       exec("echo 1 > /sys/class/gpio/gpio25/value");
      }
  }

  if ($_POST[apagar25]) {
    if ($estado_gpio25 == 1) {
    exec("echo 0 > /sys/class/gpio/gpio25/value");
  }
}
// Fin de las funciónes del pin GPIO 25

// Funciones PHP del pin GPIO 5
$estado_gpio5 = file_get_contents('/sys/class/gpio/gpio5/value');

 if ($_POST[encender5]) {
   if (!file_exists("/sys/class/gpio/gpio5")) {
       exec("echo 5 > /sys/class/gpio/export");
     }

     if (!file_exists("/sys/class/gpio/gpio5/direction")) {
       exec("echo out > /sys/class/gpio/gpio5/direction");
     }

     if ($estado_gpio5 == 0) {
       exec("echo 1 > /sys/class/gpio/gpio5/value");
      }
  }

  if ($_POST[apagar5]) {
    if ($estado_gpio5 == 1) {
    exec("echo 0 > /sys/class/gpio/gpio5/value");
  }
}
// Fin de las funciónes del pin GPIO 5

// Funciones PHP del pin GPIO 6
$estado_gpio6 = file_get_contents('/sys/class/gpio/gpio6/value');

 if ($_POST[encender6]) {
   if (!file_exists("/sys/class/gpio/gpio6")) {
       exec("echo 6 > /sys/class/gpio/export");
     }

     if (!file_exists("/sys/class/gpio/gpio6/direction")) {
       exec("echo out > /sys/class/gpio/gpio6/direction");
     }

     if ($estado_gpio6 == 0) {
       exec("echo 1 > /sys/class/gpio/gpio6/value");
      }
  }

  if ($_POST[apagar6]) {
    if ($estado_gpio6 == 1) {
    exec("echo 0 > /sys/class/gpio/gpio6/value");
  }
}
// Fin de las funciónes del pin GPIO 6

// Funciones PHP del pin GPIO 13
$estado_gpio13 = file_get_contents('/sys/class/gpio/gpio13/value');

 if ($_POST[encender13]) {
   if (!file_exists("/sys/class/gpio/gpio13")) {
       exec("echo 13 > /sys/class/gpio/export");
     }

     if (!file_exists("/sys/class/gpio/gpio13/direction")) {
       exec("echo out > /sys/class/gpio/gpio13/direction");
     }

     if ($estado_gpio13 == 0) {
       exec("echo 1 > /sys/class/gpio/gpio13/value");
      }
  }

  if ($_POST[apagar13]) {
    if ($estado_gpio13 == 1) {
    exec("echo 0 > /sys/class/gpio/gpio13/value");
  }
}
// Fin de las funciónes del pin GPIO 13

// Funciones PHP del pin GPIO 12
$estado_gpio12 = file_get_contents('/sys/class/gpio/gpio12/value');

 if ($_POST[encender12]) {
   if (!file_exists("/sys/class/gpio/gpio12")) {
       exec("echo 12 > /sys/class/gpio/export");
     }

     if (!file_exists("/sys/class/gpio/gpio12/direction")) {
       exec("echo out > /sys/class/gpio/gpio12/direction");
     }

     if ($estado_gpio12 == 0) {
       exec("echo 1 > /sys/class/gpio/gpio12/value");
      }
  }

  if ($_POST[apagar12]) {
    if ($estado_gpio12 == 1) {
    exec("echo 0 > /sys/class/gpio/gpio12/value");
  }
}
// Fin de las funciónes del pin GPIO 12

// Funciones PHP del pin GPIO 19
$estado_gpio19 = file_get_contents('/sys/class/gpio/gpio19/value');

 if ($_POST[encender19]) {
   if (!file_exists("/sys/class/gpio/gpio19")) {
       exec("echo 19 > /sys/class/gpio/export");
     }

     if (!file_exists("/sys/class/gpio/gpio19/direction")) {
       exec("echo out > /sys/class/gpio/gpio19/direction");
     }

     if ($estado_gpio19 == 0) {
       exec("echo 1 > /sys/class/gpio/gpio19/value");
      }
  }

  if ($_POST[apagar19]) {
    if ($estado_gpio19 == 1) {
    exec("echo 0 > /sys/class/gpio/gpio19/value");
  }
}
// Fin de las funciónes del pin GPIO 19

// Funciones PHP del pin GPIO 16
$estado_gpio16 = file_get_contents('/sys/class/gpio/gpio13/value');

 if ($_POST[encender16]) {
   if (!file_exists("/sys/class/gpio/gpio16")) {
       exec("echo 16 > /sys/class/gpio/export");
     }

     if (!file_exists("/sys/class/gpio/gpio16/direction")) {
       exec("echo out > /sys/class/gpio/gpio16/direction");
     }

     if ($estado_gpio16 == 0) {
       exec("echo 1 > /sys/class/gpio/gpio16/value");
      }
  }

  if ($_POST[apagar16]) {
    if ($estado_gpio16 == 1) {
    exec("echo 0 > /sys/class/gpio/gpio16/value");
  }
}
// Fin de las funciónes del pin GPIO 16

// Funciones PHP del pin GPIO 20
$estado_gpio20 = file_get_contents('/sys/class/gpio/gpio20/value');

 if ($_POST[encender20]) {
   if (!file_exists("/sys/class/gpio/gpio20")) {
       exec("echo 20 > /sys/class/gpio20/export");
     }

     if (!file_exists("/sys/class/gpio/gpio20/direction")) {
       exec("echo out > /sys/class/gpio/gpio20/direction");
     }

     if ($estado_gpio20 == 0) {
       exec("echo 1 > /sys/class/gpio/gpio20/value");
      }
  }

  if ($_POST[apagar20]) {
    if ($estado_gpio20 == 1) {
    exec("echo 0 > /sys/class/gpio/gpio20/value");
  }
}
// Fin de las funciónes del pin GPIO 20

// Funciones PHP del pin GPIO 21
$estado_gpio21 = file_get_contents('/sys/class/gpio/gpio21/value');

 if ($_POST[encender21]) {
   if (!file_exists("/sys/class/gpio/gpio21")) {
       exec("echo 21 > /sys/class/gpio/export");
     }

     if (!file_exists("/sys/class/gpio/gpio21/direction")) {
       exec("echo out > /sys/class/gpio/gpio21/direction");
     }

     if ($estado_gpio21 == 0) {
       exec("echo 1 > /sys/class/gpio/gpio21/value");
      }
  }

  if ($_POST[apagar21]) {
    if ($estado_gpio21 == 1) {
    exec("echo 0 > /sys/class/gpio/gpio21/value");
  }
}
// Fin de las funciónes del pin GPIO 21
?>
