<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CSS User Profile Card</title>
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="profile_style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body bgcolor="black">

    <!-------------------------   Fav Icon Starts   ------------------------->

    <link rel="shortcut icon" href="recognition_logo.jpg">

    <!-------------------------   Fav Icon Ends   ------------------------->

    <!-------------------------   Navigation Bar Starts   ------------------------->

    <h3 id="home"></h3>          <!--Linking Navigation-->

      <div class ="nav">

        <div class="logo-image">
            <img src="recognition_logo.jpg" alt="">
          </div>

         <div class="logo">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<Span Style = "color:#7d6e3e">Recognition</Span></p>

         </div>

         <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">About</a></li>
            <li><a href="concert.php">Concerts</a></li>
            <li><a href="index.php">Blog</a></li>
            <li><a href="index.php#contact">Contact&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <!--button type = "button">Login / Sign up</button-->
         </ul>
         
      </div>

      <!-------------------------   Navigation Bar Ends   ------------------------->

<div class="wrapper">
    <div class="left">
        <img src="Images/medha.jpg" 
        alt="user" width="100">
        <h2>Medha Pandit</h2>
         <p>20191CSE0325</p>
    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Email</h4>
                    <p>medha6121@gmail.com</p>
                 </div>
                 <div class="data">
                   <h4>Phone</h4>
                    <p>+91 8660926128</p>
              </div>
            </div>
        </div>
      
      <div class="projects">
            <h3>Objective</h3>
            <div class="projects_data">
                 <div class="data">
                    <h4>Motive</h4>
                    <p>Has an open mind and a bair for interacting with people from diverse 
                        jackgrounds. A curious and passionate individual, who is eager to learn 
                        and dive deep into the suject matter. Seeks a nurturing environment 
                        that provides active mentorship and supports individual and collective 
                        growth and perseverance.</p>
                 </div>
                 <div class="data">
                   <h4>Skills</h4>
                    <p>Html, CSS, Java, SQL, Python</p>
              </div>
            </div>
        </div>
      
        <div class="social_media">
            <ul>
              <li><a href="https://www.linkedin.com/in/medha-pandit-0a74b020b/"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-github"></i></a></li>
          </ul>
      </div>
    </div>
</div>


</body>
</html>