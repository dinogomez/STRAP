<?php require_once 'include/headers.php'?>
<body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="/login" autocomplete="off" class="sign-in-form">
              <div class="logo">
                <img src="assets/img/strap-logo.png" alt="strap" />
                <h4>STRAP</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Username</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Sign In" class="sign-btn" />

                <p class="text">
                  Forgotten your password or you login details?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
            </form>

            <form action="/login" autocomplete="off" class="sign-up-form">
              <div class="logo">
                <img src="assets/img/strap-logo.png" alt="STRAP" />
                <h4>STRAP</h4>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Sign in</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Username</label>
                </div>

                <div class="input-wrap">
                    <input
                      type="text"
                      minlength="4"
                      class="input-field"
                      autocomplete="off"
                      required
                    />
                    <label>Email</label>
                  </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Address</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Create my Account" class="sign-btn" />

                <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p>
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="assets/img/pet.png" class="image img-1 show" alt="" />
              <img src="assets/img/pet2.jpg" class="image img-2" alt="" />
              <img src="assets/img/pet3.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Real-time data location of the pets</h2>
                  <h2>Stores pet's information</h2>
                  <h2>Access pet's information using QR</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php require_once 'include/footers.php'?>  


