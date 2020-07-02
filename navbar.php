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
                  <a class="nav-link <?php echo ($page == 'join') ? "active" : ""; ?>" href="join.php">Join</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo ($page == 'subscribe') ? "active" : ""; ?>" href="subscribe.php">Subscribe</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo ($page == 'meettheteam') ? "active" : ""; ?>" href="meettheteam.php">Meet the Team</a>
              </li>

              <!--
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
            </li>-->
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
            <button type="button" class=" btn login mx-auto d-block" style="background:#a41e34;color:#fff;" data-toggle="modal" data-target="#login">Login</button>
            <!--<button type="button"  data-toggle="modal fade" href= "loginModal" class="btn btn-danger" disabled>Login</button>-->

          </ul>

          </div>
        </nav>

			<!-- Login modal -->
      <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Member Login</h5>
                            <button type="btn" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="panel mx-auto">
                                <h2 class="text-center">Login</h2>
                                <p class="text-center">Please enter your login credentials</p><hr>
                                <form method="post" action="loginAuth.php">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>" />
                                    </div>
                                    <button type="submit" class="btn btn-danger">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
