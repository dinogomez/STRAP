<?php require_once 'include/headers.php'?>

    <!-- <div class="container p-3 mt-3 col-4 shadow">
        <div class="text-center">
            <h1 class="fw-lighter">./strap-landing-page</h1>

            <a href="/login">login</a>
            <a href="/register">register</a>
            <a href="/dashboard">dashboard</a>
            <a href="/landing">test link</a>
            
        </div> 
    </div> -->

    <nav class="navbar-container">
        <div class="logo-container"> 
            <img class="logo" src= "../img/strap logo.png" alt="">
            <span class="title">
                STRAP
            </span>
        </div>
          
        <ul class="nav-container">
            <div class="nav-navbar">
                <li class="nav-item">Home</li>
                <li class="nav-item">About</li>
                <li class="nav-item">Services</li>
                <li class="nav-item">Contact Us</li>   
            </div>    
        </ul>
    
            <div class="nav-user">
                          
                    <a href="/login" class="btn login" href=""> Log In</a>
                    
                    <a href="/register" class="btn signup"href=""> Sign-Up</a>              
            </div>
    </nav>

    
    <section class="hero-section">
        <div class="header-container">
            <h3 class="header intro-header">WHAT WE DO?</h3>
            <h1 class="header desc-header">A platform built for pets</h1>
        </div>
    </section>

    <div class="bg-about"></div>
    <section class="about-us">
        
        <div>
            <h5>ABOUT US</h5>
            <h1 class="about-name">Specialized TRAcker for Pets (STRAP)</h1>
            <p class="about-desc">It aims to provide real-time data location to the pets of the owner by using
                a Global Positioning System (GPS) collars.</p>
    
            <p class="about-desc p2">Also, it's a platform for pet owners to store their pet's identification information.</p>
    
            <a class="about-btn" href="">LEARN MORE</a>
        </div>
        <div class="about-img-container">
            <img class="about-img" src="assets/img/yellow-lab.png" alt="">
            <p class="about-img-desc">YELLOW LABRADOR WITH TONGUE OUT BY LUCAS LUDWIG</p>
        </div>
       
    </section>

    <section class="objectives-section">
        <h1 class="obj-header">STRAP'S OBJECTIVES</h1>

        <div class="card-obj-container">
            <div class="card">
                <div>
                    <figure>
                        <img src="assets/icons/gps-img.png" alt="">
                    </figure>
                    <p class="card-desc">GPS Collar</p>
                    <div class="card-info-container">
                        <p class="card-info"> To build a GPS collar using Arduino for real-time data location of the pets.</p>
                    </div>
                    
                </div>
                
            </div>
            <div class="card">
                <div>
                    <figure>
                        <img src="assets/icons/web-img.png" alt="">
                    </figure>
                    <p class="card-desc">Web Application</p>
                    <div class="card-info-container">
                        <p class="card-info">To create a web application that stores the pet’s identification information. </p>
                    </div>
                    
                </div>
                
            </div>
            <div class="card">
                <div>
                    <figure>
                        <img src="assets/icons/qr-img.png" alt="">
                    </figure>
                    <p class="card-desc">Quick Response (QR) code</p>
                    <div class="card-info-container">
                        <p class="card-info">To allow users to access the pet’s personal information using a Quick Response (QR) code from the specialized collar.
                    </div>
                    
                    </p>
                </div>
                
            </div>

        </div>

    </section>

    
    <section class="footer-section">
        <footer>
            <div class="header-div">
                <div class="test">
                    <figure>
                        <!-- <img src="assets/img/strap logo.png" alt=""> -->
                    </figure>
                    <h2>STRAP</h2>
                </div>
                
                <p>MENU</p>
                <p>CONTACT US</p>
                <p>FOLLOW US</p>
            </div>
            <div class="footer-items">
                <p class="strap-desc">Aims to provide real-time data location to the pets of the owner by using a Global Positioning System (GPS) collars. </p>
                <div>
                    <p>Home</p>
                    <p>About</p>
                    <p>Services</p>
                    <p>Contact</p>
                </div>
                <div>
                    <p>Email: strap@gmail.com</p>
                    <p>Phone: 856 - 693 - 456</p>
                </div>

                <div>
                    <p>LOGOS HERE</p>
                </div>
            </div>
        </footer>
    </section>
<?php require_once 'include/footers.php'?>