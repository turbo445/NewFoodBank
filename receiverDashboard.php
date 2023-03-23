<?php
    include("loadclass.php");
    if($_SESSION['userid']){ 
        error_reporting(0);
?>  

<?php
    if($_SESSION['userid']){ 
        $receiver = new Receiver();
        $receivers = $receiver->getAllReceiver(); 
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
                <h1>Receiver Listing</h1>
                <p class="lead">Listing of receivers applied for provision</p>
            </div>

            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <?php

                            if($receivers)
                            {
                                foreach($receivers as $receivers_row)     //get all row with same id
                                {   
                                    
                                include('receiverCard.php'); 
                                }
                            }

                        ?>
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
                            <!-- <form action="addReceiver.php" method="post">

                                <label class="px-2 mb-1">Name</label>
                                <div class="form-floating mb-3">
                                    <input
                                        type="text"
                                        class="form-control rounded-3"
                                        id="floatingName"
                                        name="name"/>
                                </div>
                                
                                <label class="px-2 mb-1">Phone Number</label>
                                <div class="form-floating mb-3">
                                    <input
                                        type="text"
                                        class="form-control rounded-3"
                                        id="floatingPhone"
                                        name="phone"/>
                                </div>
                                
                                <label class="px-2 mb-1">Address</label>
                                <div class="form-floating mb-3">
                                    <textarea 
                                        type="text"
                                        class="form-control rounded-3" 
                                        id="address" 
                                        rows="4"
                                        name="address"></textarea>
                                </div>
                                
                                <label class="px-2 mb-1">Ethnicity</label>
                                <div class="form-floating mb-3">
                                    <input
                                        type="text"
                                        class="form-control rounded-3"
                                        id="floatingPassword"
                                        name="ethnicity"/>
                                </div>

                                <label class="px-2 mb-1">Note</label>
                                <div class="form-floating mb-3">
                                    <textarea 
                                        type="text"
                                        class="form-control rounded-3" 
                                        id="description" 
                                        rows="4"
                                        name="note"></textarea>
                                </div>

                                <button
                                    class="w-100 mb-2 btn btn-lg rounded-3 btn-primary"
                                    type="submit">
                                    Save
                                </button>
                            </form> -->
                            <form class="needs-validation" action="addReceiver.php" method="POST" novalidate >
                                <div class="row g-3">
                                    <div class="col-sm-12">
                                    <label for="receiverName" class="form-label">Receiver Name</label>
                                    <input type="text" class="form-control" id="receiverName" name="name" placeholder="Receiver ABC" value="" required>
                                    <div class="invalid-feedback">
                                        Valid receiver name is required.
                                    </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                    <label for="receiverNumber" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="phoneNumber" name="phone" placeholder="012-34567890" value="" required>
                                    <div class="invalid-feedback">
                                        Valid phone number is required.
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="text" class="form-control" id="age" name="age" placeholder="21" value="" required>
                                    <div class="invalid-feedback">
                                        Valid age is required.
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="state" name="gender" required>
                                        <option value="">Choose...</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>				
                                   </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid gender.
                                    </div>
                                    </div>

                                    <div class="col-12">
                                    <label for="receiverAddress" class="form-label">Address</label>
                                    <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required>
                                    <div class="invalid-feedback">
                                        Please enter a foodbank address.
                                    </div>
                                    </div>

                                    <div class="col-12">
                                    <label for="receiverAddress2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                                    <input type="text" class="form-control" name="address2" id="address2" placeholder="Apartment or suite">
                                    </div>	
                                    
                                    <div class="col-md-6">
                                    <label for="receiverState" class="form-label">State</label>
                                    <select class="form-select" id="state" name="state" required>
                                        <option value="">Choose...</option>
                                        <option value="Johor">Johor</option>
                                        <option value="Kedah">Kedah</option>
                                        <option value="Kelantan">Kelantan</option>
                                        <option value="Malacca">Malacca</option>
                                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                                        <option value="Pahang">Pahang</option>
                                        <option value="Penang">Penang</option>
                                        <option value="Perak">Perak</option>
                                        <option value="Perlis">Perlis</option>
                                        <option value="Sabah">Sabah</option>
                                        <option value="Sarawak">Sarawak</option>
                                        <option value="Selangor">Selangor</option>
                                        <option value="Terengganu">Terengganu</option>
                                        <option value="W.P. Kuala Lumpur">W.P. Kuala Lumpur</option>
                                        <option value="W.P. Labuan">W.P. Labuan</option>
                                        <option value="W.P. Putrajaya">W.P. Putrajaya</option>
                                   </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="receiverCity" class="form-label">City</label>
                                        <input type="text" class="form-control" name="city" id="city" placeholder="City" required>
                                        <div class="invalid-feedback">
                                            Postcode required.
                                        </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 pt-2">
                                    <label for="receiverPostcode" class="form-label">Postcode</label>
                                    <input type="text" class="form-control" id="postcode" name="postcode" placeholder="12345" required>
                                    <div class="invalid-feedback">
                                        Postcode required.
                                    </div>
                                    </div>
                                    <div class="col-12 pt-2">
                                        <label for="receiverNote" class="form-label">Note <span class="text-muted">(Optional)</span></label>
                                        <textarea class="form-control" id="note" name="note" placeholder="Foodbank Information"> </textarea>
                                    </div>	
                                </div>
                                <div class="mb-5 text-center"><button class="w-50 btn btn-primary btn-lg" type="submit">Add Receiver</button></div>
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
                        <div id="edit"></div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div
            class="modal fade modal-lg"
            id="viewModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="viewModal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-content rounded-4 shadow">
                        <div class="modal-header p-5 pb-4 border-bottom-0">
                            <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                            <h1 class="fw-bold mb-0 fs-2">View</h1>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div id="view"></div>
                        <?php //loadFoodbank($id);?>
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
    <script src="script/validation.js"></script>
</html>
<?php
    }else{
        header("Location: indexN2.php");
    }
?>
