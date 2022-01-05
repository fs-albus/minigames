<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "rps";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM `tb_probabilities`";
  $result = $conn->query($sql);

  $arr = Array();

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $state = $row["state"];
      $percentage = (int)$row["percentage"];

      $arr[$state] = $percentage;
    }

    $json = json_encode($arr);

    echo "<script>probabilities=$json</script>";

  } else {
    echo "0 results";
  }
  $conn->close();
?>