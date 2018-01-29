 <!DOCTYPE html>
 <?php
   include ("functions/functions.php");
 ?>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Master Plan</title>
     <link rel="stylesheet" href="styles/style.css" media="all">
   </head>
   <body>
     <div class="main_wrapper">

       <div class="header_wrapper">
        <marquee class="marquee">
          <h1>PATAKEJA MANAGEMENT SYSTEM</h1>

        </marquee>

       </div>
       <div class="menubar">
          <ul id="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">All houses</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="#">Sign up</a></li>
            <li><a href="#">Account</a></li>
            <li><a href="#">Contact us</a></li>
          </ul>

          <div id="form">

            <form action="result.php" method="post" enctype="multipart/form-data">
              <input type="text" name="user_querry" placeholder="Search here">
              <input type="submit" name="search" value="Search">
            </form>
          </div>
       </div>

       <div class="content_wrapper">

          <div id="sidebar">
            <div class="sidebar_title">
              Location
            </div>
            <div class="categories">
              <ul id="cat">

                 <?php getLocation();?>

              </ul>
            </div>

            <div class="sidebar_title">
              Categories
            </div>
            <div class="categories">
              <ul id="cat">

                <?php getCategories();?>

              </ul>
            </div>


          </div>
          <div id="content_area">
              <h2>Content goes here</h2>
          </div>

        </div>
       <div id="footer">
         <h2 style="text-align:center; padding-top:30px;">&copy; 2018 @superhero</h2>
       </div>


     </div>
   </body>
 </html>
