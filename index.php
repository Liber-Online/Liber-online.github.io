<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liber Online</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
	
	
	    <!-- Home Section with Dynamic Content -->
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text">Liber Online v2.0</span>
        </div>

        <div class="page-content">
            <?php
            // Get the page from URL parameter
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            
            // Allowed pages for security
            $allowed_pages = ['home', 'hplsok', 'vand', 'omlagg', 'reg', 'tagnr', 'tagkart', 'kortid', 'tagbeg', 'orsak', 'uppdat'];

            // Include the requested page if allowed
            if (in_array($page, $allowed_pages)) {
                include "$page.php";
            } else {
                echo "<p>Page not found!</p>";
            }
            ?>
        </div>
    </section>
	
	

	<script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
  
  </body>
</html>