<?php
    include("loadclass.php");
    if($_SESSION['userid']){ 
        error_reporting(0);
?>  

<?php
    if($_SESSION['userid']){ 
        $user = new User();
        $users = $user->getAllUser(); 

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

<html>
    <head>
        <link href="styles/css/bootstrap.css" rel="stylesheet" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="styles/js/bootstrap.js"></script>
        <title>Home | FreeFood4U</title>
    </head>

    <body>
        <?php include('navbar.php'); ?>

        <section class="container">
                <div class="bg-light p-5 my-3 rounded">
                    <h1>User Listing</h1>
                    <p class="lead">Listing of receivers applied for provision</p>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    if($users)
                                    {
                                        foreach($users as $users_row)     //get all row with same id
                                        {   
                                            
                                        include('userCard.php'); 
                                        }
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            <div
                class="modal fade modal-lg"
                id="addModal"
                tabindex="-1"
                role="dialog"
                aria-labelledby="addModal"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-content rounded-4 shadow">
                            <div class="modal-header p-5 pb-4 border-bottom-0">
                                <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                                <h1 class="fw-bold mb-0 fs-2">Add</h1>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
        
                            <div class="modal-body p-5 pt-0">
                                <form action="addUser.php" method="post">

                                    <label class="px-2 mb-1">Email</label>
                                    <div class="form-floating mb-3">
                                        <input
                                            type="text"
                                            class="form-control rounded-3"
                                            id="floatingName"
                                            name="email"/>
                                    </div>
                                    
                                    <label class="px-2 mb-1">Password</label>
                                    <div class="form-floating mb-3">
                                        <input
                                            type="text"
                                            class="form-control rounded-3"
                                            id="floatingPhone"
                                            name="password"/>
                                    </div>
                                    
                                    <label class="px-2 mb-1">Role</label>
                                    <div class="form-check py-1">
                                        <input class="form-check-input" type="radio" name="role" value="admin" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Grant admin
                                        </label>
                                    </div>
                                    <div class="form-check py-1">
                                        <input class="form-check-input" type="radio" name="role" value="receiver" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Grant receiver
                                        </label>
                                    </div>
                                    <div class="form-check py-1">
                                        <input class="form-check-input" type="radio" name="role" value="donator">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Grant donator
                                        </label>
                                    </div>

                                    <button
                                        class="w-100 mb-2 btn btn-lg rounded-3 btn-primary"
                                        type="submit">
                                        Save
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="modal fade modal-lg"
                id="editModal"
                tabindex="-1"
                role="dialog"
                aria-labelledby="editModal"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-content rounded-4 shadow">
                            <div class="modal-header p-5 pb-4 border-bottom-0">
                                <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                                <h1 class="fw-bold mb-0 fs-2">Edit</h1>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
        
                            <div id='edit'></div>
                        </div>
                    </div>
                </div>
            </div>
        
        </section>
        <?php
            if($user_data ['Role'] == 'admin'){
                ?>
            <div style="position: fixed; bottom: 0px; right: 0px; padding: 50px">
                <button
                    type="button"
                    style="width: 70px; height: 70px; border-radius: 50%; font-size: 40px; font-weight: bold; box-shadow: 0px 0px 10px 0px #000000"
                    class="btn btn-primary btn-sm"
                    data-bs-toggle="modal"
                    data-bs-target="#addModal">
                    +
                </button>
            </div>
        <?php
            }
        ?>
    </body>

    <script>
        function logout() {
            window.location.href = "logout.php";
        }
    </script>
</html>
<?php
    }else{
        header("Location: indexN2.php");
    }
?>
