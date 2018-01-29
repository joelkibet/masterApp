<?php

$con = mysqli_connect("localhost","root","","master");

// Function to get location
function getLocation() {

  global $con;

  $get_location = "select * from location";
  $run_location = mysqli_query($con, $get_location);

    // fetch all the records from the table location
  while ( $row_location = mysqli_fetch_array($run_location)) {

    $location_id = $row_location['location_id'];      //Fetch location id from database
    $location_title = $row_location['location_title'];  // Fetch title of the location from the database

    echo "<li><a href = '#'>$location_title</a></li>";
  }

}
  // Function to get categories
  function getCategories() {

    global $con;

    $get_cat = "select * from categories";
    $run_cat = mysqli_query($con, $get_cat);

      // fetch all the records from the table categories
    while ( $row_cat = mysqli_fetch_array($run_cat)) {

      $cat_id = $row_cat['cat_id'];      //Fetch category id from database
      $cat_title = $row_cat['cat_title'];  // Fetch title of the category from the database

      echo "<li><a href = '#'>$cat_title</a></li>";
    }

}


?>
