<!DOCTYPE html>
<?php
  include("includes/database.php");

 ?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Inserting a new entry</title>
  </head>
  <body bgcolor = "#a55eea">
    <form class="" action="insert.php" method="post" enctype="multipart/form-data">
      <table align = "center" border="2" width = "700" bgcolor = "#ffcccc">
        <tr align = "center">
          <td colspan="8"><h2>Insert a new entry</h2></td>
        </tr>
        <tr>
          <td align ="center"><b>House Location</b></td>
          <td>
            <select class="" name="house_location">
              <option value="">Select a location</option>

              <?php
              $get_location = "select * from location";
              $run_location = mysqli_query($con, $get_location);

                // fetch all the records from the table location
              while ( $row_location = mysqli_fetch_array($run_location)) {

                $location_id = $row_location['location_id'];      //Fetch location id from database
                $location_title = $row_location['location_title'];  // Fetch title of the location from the database

                echo "<option>$location_title</option>";
              }


              ?>

            </select>

          </td>
        </tr>

        <tr>
          <td align ="center"><b>House Category</b></td>
          <td><input type="text" name="house_title"/></td>
        </tr>

        <tr>
          <td align ="center"><b>House Title</b></td>
          <td><input type="text" name="house_title"/></td>
        </tr>

        <tr>
          <td align ="center"><b>House Price</b></td>
          <td><input type="text" name="house_title"/></td>
        </tr>

        <tr>
          <td align ="center"><b>House Description</b></td>
          <td><input type="text" name="house_title"/></td>
        </tr>

        <tr>
          <td align ="center"><b>House Price</b></td>
          <td><input type="text" name="house_title"/></td>
        </tr>

        <tr>
          <td align ="center"><b>House Image</b></td>
          <td><input type="text" name="house_title"/></td>
        </tr>

        <tr>
          <td align ="center"><b>House Key</b></td>
          <td><input type="text" name="house_title"/></td>
        </tr>


        <tr align = "center">
          <td colspan="8"><input type="submit" name="insert_entry" value="Insert"/></td>
        </tr>
      </table>

    </form>

  </body>
</html>
