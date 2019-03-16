<?php

function dbConnect()
{
  $con = mysqli_connect("192.185.103.167", "kritarth_pup", "puppylove", "kritarth_pups" ); // WAMP
  //mysqli_connect(host, user, pass, dbname)


  if (!$con)
  {
    die("Connection failed: " . mysqli_connect_error());
  }

  return $con;
}

function getData($sql)
{
  
  $con = dbConnect();
  $result = mysqli_query($con, $sql); // give me a results object

  return $result;
}


function insertData($sql)
{
   $con = dbConnect();
   mysqli_query($con, $sql); // give me a results object
}

function deleteData($sql)
{
  // $con = dbConnect();
  // mysqli_query($con, $sql); // give me a results object
}

function showTomorrowDate()
{
  $time = mktime(0, 0, 0, date("m"), date("d")+1, date("Y")); //h, min, s, month
  return date('l jS \of F Y',$time)."<br>";
}

function outputData($sql)
{
  $data = array();
  $con = dbConnect();
  $result = mysqli_query($con, $sql);
  
  while($row = mysqli_fetch_assoc($result)) {
      $data[] = $row;
  }

  return $data;
}


?>