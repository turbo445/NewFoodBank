<?php
    include("loadclass.php");
    if($_SESSION['userid']){ 
        error_reporting(0);
?>  

<?php
    if($_SESSION['userid']){ 
        $user = new User();
        $request = new Request();
        $foodbank = new Foodbank();
        $message = new Message();
        $receiver = new Receiver();
        $users = $user->getAllUser(); 
        $userCount = $user->getUserCount();
        $foodbankCount = $foodbank->getFoodbankCount();
        $messageCount = $message->getMessageCount();
        $receiverCount = $receiver->getReceiverCount();
        $requestCount = $request->getRequestCount();
        $donatorCount = $user->getDonatorCount();
        $receiverCount = $user->getReceiverCount();
        $adminCount = $user->getAdminCount();

        // if(isset($_GET['id'])  && is_numeric($_GET['id'] ))
        // {
        //     $foodbankDetails = $foodbank->getdetailFoodbank($id); 
            
        // }else{
        //     echo"error";
        // }
        
        // echo "<pre>";
        // print_r($foodbankDetails);
        // echo "</pre>";
    } else {
        header("Location: login.php");
    }
    $login = new Login();
    $user_data = $login->check_login($_SESSION['userid']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta
            name="author"
            content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
        />
        <meta name="generator" content="Hugo 0.104.2" />
        <title>View Report</title>

        <link
            rel="canonical"
            href="https://getbootstrap.com/docs/5.2/examples/checkout/"
        />

        <link href="styles/css/bootstrap.css" rel="stylesheet" />

        <style>
            body {
                background: orange;
            }

            .form-control:focus {
                box-shadow: none;
                border-color: #ba68c8;
            }

            .profile-button {
                background: rgb(99, 39, 120);
                box-shadow: none;
                border: none;
            }

            .profile-button:hover {
                background: #682773;
            }

            .profile-button:focus {
                background: #682773;
                box-shadow: none;
            }

            .profile-button:active {
                background: #682773;
                box-shadow: none;
            }

            .back:hover {
                color: #682773;
                cursor: pointer;
            }

            .labels {
                font-size: 11px;
            }

            .add-experience:hover {
                background: #ba68c8;
                color: #fff;
                cursor: pointer;
                border: solid 1px #ba68c8;
            }

            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            .b-example-divider {
                height: 3rem;
                background-color: rgba(0, 0, 0, 0.1);
                border: solid rgba(0, 0, 0, 0.15);
                border-width: 1px 0;
                box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
                    inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
            }

            .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 100vh;
            }

            .bi {
                vertical-align: -0.125em;
                fill: currentColor;
            }

            .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
            }

            .nav-scroller .nav {
                display: flex;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }
        </style>

        <!-- Custom styles for this template -->
        <link href="test.css" rel="stylesheet" />
    </head>
    <body>
        <?php include 'navbar.php'; ?>
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="container">
                <main>
                    <div class="py-5 text-center">
                        <img
                            src="images/logo.png"
                            alt="FreeFood4U"
                            width="180"
                            height="150"
                            class="d-inline-block align-text-top"
                        />
                        <h2>View Report</h2>
                        <p class="lead">Your report have been generated!</p>
                    </div>

                    <div class="row g-5">
                        <div class="col-md-7 col-lg-8">
                            <h4 class="mb-3">Foodbank Information</h4>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="foodbankName" class="form-label"
                                        >Total number of foodbank
                                        available:</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="totalFoodBank"
                                        value="<?php echo $foodbankCount; ?> "readonly
                                    />
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="foodbankName" class="form-label"
                                        >Total Amount of Users</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="totalAdmin"
                                        value=" <?php echo $userCount; ?> "readonly
                                    />
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="foodbankName" class="form-label"
                                        >Total number of Donators:</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="totalDonator"
                                        value="<?php echo $donatorCount; ?> "readonly
                                    />
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="foodbankName" class="form-label"
                                        >Total number of Receivers:</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="totalReceiver"
                                        value=" <?php echo $receiverCount; ?> "readonly
                                    />
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="foodbankName" class="form-label"
                                        >Total Amount of Admins</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="totalAdmin"
                                        value=" <?php echo $adminCount; ?> "readonly
                                    />
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="foodbankName" class="form-label"
                                        >Total Amount of Requests</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="totalAdmin"
                                        value=" <?php echo $requestCount; ?> "readonly
                                    />
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="foodbankName" class="form-label"
                                        >Total Amount of Messages</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="totalAdmin"
                                        value=" <?php echo $messageCount; ?> "readonly
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <br />
                </main>

                <script src="styles/js/bootstrap.bundle.min.js"></script>

                <script src="test.js"></script>
            </div>
        </div>
    </body>
</html>
<?php
    }else{
        header("Location: indexN2.php");
    }
?>