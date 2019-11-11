<!-- AIDAN BELL MADE THIS NAV BAR -->

<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
          <a class="navbar-brand" href="index.php"><img class="toplogo" src="./pics/fb_logo2.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link <?php echo ($page == 'index') ? "active" : ""; ?>" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo ($page == 'about') ? "active" : ""; ?>" href="about.php">About</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link <?php echo ($page == 'alumni') ? "active" : ""; ?>" href="alumni.php">Alumni</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php echo ($page == 'calendar') ? "active" : ""; ?>" href="calendar.php">Calendar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php echo ($page == 'fundraising') ? "active" : ""; ?>" href="fundraising.php">Fundraising</a>
                </li>
              <li class="nav-item">
                <a class="nav-link <?php echo ($page == 'highlights') ? "active" : ""; ?>" href="highlights.php">Highlights</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link <?php echo ($page == 'join') ? "active" : ""; ?>" href="join.php">Join</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php echo ($page == 'resources') ? "active" : ""; ?>" href="resources.php">Resources</a>
                </li>
              <li class="nav-item">
                  <a class="nav-link <?php echo ($page == 'teams') ? "active" : ""; ?>" href="teams.php">Teams</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo ($page == 'contact') ? "active" : ""; ?>" href="contact.php">Contact</a>
            </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
          
            <button class="btn btn-danger ml-auto rightMe" data-toggle="modal" data-target="#loginModal">LOGIN</button>
</ul>
          </div>
        </nav>


  <div class="modal fade" id="loginModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                    <div class="form-group">
                        <p style="text-align: center;"><i>THIS FORM DOES NOT FUNCTION YET</i></p>
                        <label for="uname1">Username</label>
                        <input type="text" class="form-control form-control-lg" name="uname1" id="uname1" required="">
                        <label for="pword">Password</label>
                        <input type="text" class="form-control form-control-lg" name="pword" id="pword" required="">
                        <div class="invalid-feedback">Oops, you missed this one.</div>
                    </div>
                    <div class="form-group py-4">
                        <button class="btn btn-outline-secondary btn-lg" data-dismiss="modal" aria-hidden="true">Cancel</button>
                        <button type="submit" class="btn btn-danger btn-lg float-right" id="btnLogin">Add Me</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>

        <!--
      The Login Modal 
 <div class="modal fade" id="loginModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                    <div class="form-group">
                        <p style="text-align: center;"><i>THIS FORM DOES NOT FUNCTION YET</i></p>
                        <a href="" class="float-right">New user?</a>
                        <label for="uname1">Username</label>
                        <input type="text" class="form-control form-control-lg" name="uname1" id="uname1" required="">
                        <div class="invalid-feedback">Oops, you missed this one.</div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control form-control-lg" id="pwd1" required="" autocomplete="new-password">
                        <div class="invalid-feedback">Enter your password too!</div>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="rememberMe">
                      <label class="custom-control-label" for="rememberMe">Remember me on this computer</label>
                    </div>
                    <div class="form-group py-4">
                        <button class="btn btn-outline-secondary btn-lg" data-dismiss="modal" aria-hidden="true">Cancel</button>
                        <button type="submit" class="btn btn-danger btn-lg float-right" id="btnLogin">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>

-->

       
        <!-- <span class="sr-only">(current)</span> -->