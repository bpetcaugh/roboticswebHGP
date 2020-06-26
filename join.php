<?php include 'connectdb.php'; ?>
<!doctype html>
<html lang="en">
  <head>
  <?php include 'head.php'; ?>
    <style>

    </style>

  </head>
  <body>
    <header>
    <?php $page = 'join'; include 'navbar.php'; ?>
</header>

<main role="main">

  <div class="container noCarouselpadding">
        <div class="pb-2 mt-4 mb-2 border-bottom">
            <h1>So You Want To Join The Team ...</h1>
        </div>
        <br>
        <h2>Requirements</h2>
        <ul style="list-style-type: square;">
          <li>You must be a current, or incoming, student at HGP or VJM.</li>
          <li>You should be interested in robotics/engineering/computer science. No prior experience required.</li>
          <li>You can not be currently failing a class.</li>
        </ul>

        <br>

        <h2>First Steps</h2>
        <p>Below are steps that you can take now to join the team. Additional pieces will be added
          throughout the summer, once documents and forms become finalized. 
        </p>

        <br>

        <ol>
          <li>Read the introduction letter, which is addressed to all students and parents: <a href="forms/robotics_2020season.pdf">LINK TO PDF</a></li>
          <li>Each student needs to fill out all personal information in the Google Form located here: <a href="https://forms.gle/9BPTVXPRx33WgTPFA">LINK</a></li>
          <li>Once the form has been completed, each student will be contacted with login information for the new HGP Robotics website. Next steps will be available once the student is logged in.</li>
        </ol>

        <p>While you wait for login information, remember to make sure that all email addresses for 
          parents, students, and other family members are registered with our mailing list (link in the navigation bar at the top of this page).
        </p>

        <hr>

<!--        <h2>First Steps</h2>
        <p>Read the <a href="about.html">About</a> page to learn more about our team structure, and team meeting logistics.</p>
        <p>Contact the coach to determine the date of the first after-school meeting you should attend.</p>
        <p>Add yourself to the mailing list. (both parents and students)</p>

        <br>

        <h2>Before the First Meeting</h2>
        <p>Check out some of the <a href="resources.html">Team Resources</a> to get an explanation of the current VEX challenge, and to begin your journey learning about the VEX systems and programming language.</p>

        <br>

        <h2>Am I On The Team Now?</h2>
        <p>Students are considered members of the team once they have submitted the following materials:</p>
        <ul style="list-style-type: square;">
          <li>A $150 check made out to <i>Holy Ghost Preparatory School</i>.</li>
          <li><a href="https://www.roboticseducation.org/documents/2018/03/participant-release-form.pdf/">VEX Photo Release Form</a>, signed by a parent or guardian. (second page of the PDF in the link)</li>
          <li>A pair of safety goggles, to be kept in the lab. Students can take their own goggles home once the season is over.</li>
        </ul>
        <p>You are view an up-to-date list of current members on our <a href="teams.html">Teams</a> page, under 'Member List.'</p>
        <hr>-->
  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
  <?php include 'footer.php'; ?>
  </footer>
</main>

<?php include 'bootstrapScripts.php'; ?>      
</body>
</html>
