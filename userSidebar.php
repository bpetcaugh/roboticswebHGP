<nav id="sidebar">
	<div class="sidebar-header">
		<table>
			<tr>
				<td width="40%">
					<a href="userDash.php"><img src="./pics/firebird-small.png" width="100%" alt="242"></a>
				</td>
				<td width="60%" style="padding-left: 15px;">
				    <!-- <img src="./res/icon-login.png" width="45px"> -->
                    <form action="logout.php">
                        <input type="submit" class="btn btn-danger login mx-auto d-block" value="Logout" style="position:relative; bottom: 30px; left:20%;" />
                    </form>

				</td>
			</tr>
		</table>
    </div>
    <br />
    <ul class="list-unstyled components">
        <li>
			<a href="userprofile.php">My Profile</a>
		</li>
		<?php
		if ($_SESSION["setAccessLevel"]) {
			echo '		<li>
			<a href="userList.php">User Information</a>
		</li>';
		} ?>

		<li>
			<a href="filesMissing.php">Missing Files</a>
		</li>
		<li>
			<a href="filesListAll.php">List All Policies</a>
		</li>
		<?php
		if ($_SESSION["setAccessLevel"]) {
			echo '		<li>
			<a href="pendingUpdates.php">Pending Updates</a>
		</li>';
		} ?>

	</ul>
</nav>