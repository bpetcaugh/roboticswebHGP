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
            
          </div>
        </nav>

        <!-- <span class="sr-only">(current)</span> -->