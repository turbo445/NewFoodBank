<nav
    class="navbar navbar-expand-lg navbar-dark bg-dark px-3 py-2"
    width="100%">
    <a href="" class="navbar-brand">
        <img
            src="images/logo.png"
            alt="FreeFood4U"
            width="30"
            height="24"
            class="d-inline-block align-text-top" />
        FF4U 2.0
    </a>
    <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#bdNavbar"
        aria-controls="bdNavbar"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="bdNavbar">
        <ul class="navbar-nav ms-auto text-center">
            <li>
                <a href="indexN2.php" class="nav-link">Home</a>
            </li>
            <li>
                <a href="foodbankDashboard.php" class="nav-link">Foodbank</a>
            </li>
            <?php
                if($user_data ['Role'] == 'admin'){
            ?>
                <li>
                    <a href="receiverDashboard.php" class="nav-link">Receivers</a>
                </li>
            <?php
                }
            ?>
            <?php
                if($user_data ['Role'] == 'admin'){
            ?>
                <li>
                    <a href="userDashboard.php" class="nav-link">Users</a>
                </li>
            <?php
                }
            ?>
            <?php
                if($user_data ['Role'] == 'admin'){
            ?>
            <li>
                <a href="viewReport.php" class="nav-link">Report</a>
            </li>
            <?php
                }
            ?>
            <?php
                if($user_data ['Role'] == 'receiver'){
            ?>
            <li>
                <a href="receiverProfile.php" class="nav-link">Profile</a>
            </li>
            <?php
                }
            ?>
            <?php
                if($user_data ['Role'] == 'admin' || $user_data ['Role'] == 'donator'){
            ?>
            <li>
                <a href="requestDashboard.php" class="nav-link">Request</a>
            </li>
            <?php
                }
            ?>
            <?php
                if($user_data ['Role'] == 'admin' || $user_data ['Role'] == 'donator'){
            ?>
            <li>
                <a href="contactDashboard.php" class="nav-link">Messages</a>
            </li>
            <?php
                }
            ?>
            <li>
                <a href="logout.php" class="nav-link">Logout</a>
            </li>
        </ul>
    </div>
</nav>