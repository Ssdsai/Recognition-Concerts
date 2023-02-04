<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>
        <Nav>Concert Management</Nav>
    </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="location.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>

    <!-------------------------   Fav Icon Starts   ------------------------->

    <link rel="shortcut icon" href="recognition_logo.jpg">

    <!-------------------------   Fav Icon Ends   ------------------------->

    <!-------------------------   Navigation Bar Starts   ------------------------->

    <h3 id="home"></h3> <!--Linking Navigation-->

    <div class="nav">

        <div class="logo-image">
            <img src="Images/recognition_logo.jpg" alt="">
        </div>

        <div class="logo">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<Span Style="color:#7d6e3e">Recognition</Span></p>
        </div>

        <ul>
            <li><a href="index.php#home">Home</a></li>
            <li><a href="index.php">About</a></li>
            <li><a href="concert.php">Concerts</a></li>
            <li><a href="index.php#blog">Blog</a></li>
            <li><a href="index.php#contact">Contact&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <!--button type = "button">Login / Sign up</button-->
        </ul>

    </div>

    <br>
    <br>
    <br>
    <br>

    <!-------------------------   Navigation Bar Ends   ------------------------->

    <!------------------------- Contact Section Begin ----------------------------->

    <div class="contact-header">
        <div class="center-head">
            <br>
            <br>
            <br>
            <h2>Contact Us</h2>
            <p>If you would like to contact us for Hosting your Concerts in our Website, Our contact details are mentioned below can get in touch with us.</p>
            <p>To Host a Website do fill your details our team will get in touch with you very soon</p>
        </div>
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="contact">
                        <div class="section-title">
                            <h2>Location</h2>
                            <p>Get directions to our event center</p>
                        </div>
                        <div class="cls-contact">
                            <div class="cls-address">
                                <i class="fas fa-map-marker-alt fa-2x"></i><span>&nbsp;&nbsp;Address:</span>
                                <address>Tower-B, 13th floor,<br>
                                    84, Church Street,<br>
                                    M.G Road, Bangalore,<br>
                                    Karnataka-560001</address>
                            </div>
                            <ul>
                                <li>
                                    <i class="fas fa-phone fa-2x"></i><span>&nbsp;&nbsp;Phone:</span>
                                    <p>(+91) 8660950810</p>
                                </li>
                                <li>
                                    <i class="fas fa-envelope fa-2x"></i><span>&nbsp;&nbsp;Email:</span>
                                    <p>recognition.concert@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                        <div class="icons1">
                            <h2>Follow Us</h2>
                            <div class="social_media1">
                                <ul>
                                    <li><a href="https://www.facebook.com/profile.php?id=100089062003106"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCLuC0lBbmiCrQq40yZdrJGA"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="https://www.instagram.com/recognition.concerts/"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/recognition-concert-969376260/"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="contact1">
                        <div class="cls-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242.9965257069617!2d77.60498839896174!3d12.975407296898432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae167db2a3915d%3A0xcba1a1019be2a772!2sThe%2013th%20Floor!5e0!3m2!1sen!2sin!4v1672823399911!5m2!1sen!2sin" width="340" height="230" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="form">
                        <br>
                        <center><h1>Get in Touch</h1></center>
                        <br>
                        <form method="post" action="location_connect.php">
                            <label for="name">&nbsp;&nbsp;Full Name</label>
                            <br>
                            &nbsp;<input type="text" name="name" id="name" required>
                            <br>

                            <label for="subject">&nbsp;&nbsp;Subject</label>
                            <br>
                            &nbsp;<input type="text" name="subject" id="subject" required>
                            <br>

                            <label for="email">&nbsp;&nbsp;Email</label>
                            <br>
                            &nbsp;<input type="email" name="email" id="email" required>
                            <br>

                            <label for="number">&nbsp;&nbsp;Phone Number</label>
                            <br>
                            <input type="text" name="number" id="number" required>
                            <br>

                            <label for="message">&nbsp;&nbsp;Message</label>
                            <textarea required input type="text" name="message" id="message"></textarea>
                            <!--input type="message" textarea name="message" id="message" required></textarea-->

                            <!--div class="inputBox">
                                <textarea required="required"></textarea>
                                <span>Type your Message...</span>
                            </div--> 
                            <br>

                            <center><button><p>Send</p></button></center>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>

</html>

<!------------------------ Contact Section End --------------------------------->

<!--div class="contactUs">
        <div class="title">
            <h2>Get in Touch</h2>
        </div>
        <div class="box">
            <Form>
            <div class="contact form">
                <h3>Send a Message</h3> I
                <form>
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>First Name</span>
                                <input type="text" placeholder="John"> 
                            </div>
                        </div>
                    </div>
                </form>
            </div>