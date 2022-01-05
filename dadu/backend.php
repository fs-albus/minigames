<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sicbo";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM `probabilities`";
  $result = $conn->query($sql);

  $arr = Array();

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $value = $row["value"];
      $percentage = (int)$row["percentage"];

      $arr[$value] = $percentage;
    }

    $json = json_encode($arr);

    echo "<script>probabilities=$json</script>";

  } else {
    echo "0 results";
  }
  $conn->close();
?>