<?php
    include("loadclass.php");
    if($_SESSION['userid']){ 
        error_reporting(0);
?>  

<?php
    // global $foodbankDetails, $id;
    
    // function loadFoodbank($id){
    //     $foodbank = new Foodbank();
    //     $foodbankDetails = $foodbank->getdetailFoodbank($id); 
    //     echo "<pre>";
    //     print_r($foodbankDetails);
    //     echo "</pre>";

    //     echo '<div class="modal-body p-5 pt-0">';
    //     echo '<form class="">';

    //     echo '<label class="px-2 mb-1">Name</label>';
    //     echo '<div class="form-floating mb-3">';
    //     echo $foodbankDetails[0]['Fb_name'];
    //     echo '</div>';
            
    //     echo '<label class="px-2 mb-1">Phone Number</label>"';
    //     echo '<div class="form-floating mb-3">';
    //     echo $foodbankDetails[0]['Phone'];
    //     echo '</div>';
            
    //     echo '<label class="px-2 mb-1">Address</label>';
    //     echo '<div class="form-floating mb-3">';
    //     echo $foodbankDetails[0]['Address'];
    //     echo '</div>';
            
    //     echo '<label class="px-2 mb-1">Closing Time</label>';
    //     echo '<div class="form-floating mb-3">';
    //     echo $foodbankDetails[0]['Time'];
    //     echo '</div>';

    //     echo '<label class="px-2 mb-1">Description</label>';
    //     echo '<div class="form-floating mb-3">';
    //     echo $foodbankDetails[0]['Description'];
    //     echo '</div>';
    //     echo '</form>';
    //     echo '</div>';
    // }
    // if(isset($_POST['view']) or isset($_POST['edit'])){
    //     $foodbankDetails = $foodbank->getdetailFoodbank($id); 
    //     if(isset($_GET['id'])  && is_numeric($_GET['id'] ))
    //     {
    //         $foodbankDetails = $foodbank->getdetailFoodbank($id); 
            
    //     }else{
    //         echo"error";
    //     }
        
    //     echo "<pre>";
    //     print_r($foodbankDetails);
    //     echo "</pre>";
    // }
?>

<?php
    if($_SESSION['userid']){ 
        $foodbank = new Foodbank();
        $foodbanks = $foodbank->getAllFoodbank(); 

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
                <h1>Food Bank Listing</h1>
                <p class="lead">Listing of food bank near you</p>
            </div>

            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <?php

                            if($foodbanks)
                            {
                                foreach($foodbanks as $foodbanks_row)     //get all row with same id
                                {   
                                    
                                include('foodbankCard.php'); 
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
                            <!-- <form action="addFoodbank.php" method="post">

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
                                
                                <label class="px-2 mb-1">Closing Time</label>
                                <div class="form-floating mb-3">
                                    <input
                                        type="time"
                                        class="form-control rounded-3"
                                        id="floatingPassword"
                                        name="time"/>
                                </div>

                                <label class="px-2 mb-1">Description</label>
                                <div class="form-floating mb-3">
                                    <textarea 
                                        type="text"
                                        class="form-control rounded-3" 
                                        id="description" 
                                        rows="4"
                                        name="description"></textarea>
                                </div>

                                <button
                                    class="w-100 mb-2 btn btn-lg rounded-3 btn-primary"
                                    type="submit">
                                    Save
                                </button>
                            </form> -->
                            <form class="needs-validation" action="addFoodbank.php" method="post" novalidate>
                                <div class="row g-3">
                                    <div class="col-sm-12">
                                    <label for="foodbankName" class="form-label">Foodbank Name</label>
                                    <input type="text" class="form-control" id="foodbankName" name="fb_name" placeholder="Foodbank ABC" value="" required>
                                    <div class="invalid-feedback">
                                        Valid foodbank name is required.
                                    </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                    <label for="foodBankNumber" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="phoneNumber" name="phone" placeholder="012-34567890" value="" required>
                                    <div class="invalid-feedback">
                                        Valid phone number is required.
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                    <label for="openTime" class="form-label">Opening Time</label>
                                    <select class="form-select" id="state" name="openTime" required>
                                        <option value="">Choose...</option>
                                        <option value="7.00am">7.00am</option>
                                        <option value="7.30am">7.30am</option>
                                        <option value="8.00am">8.00am</option>
                                        <option value="8.30am">8.30am</option>
                                        <option value="9.00am">9.00am</option>
                                        <option value="9.30am">9.30am</option>
                                        <option value="10.00am">10.00am</option>
                                        <option value="10.30am">10.30am</option>
                                        <option value="11.00am">11.00am</option>
                                        <option value="11.30am">11.30am</option>
                                        <option value="12.00pm">12.00pm</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid time.
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                    <label for="closeTime" class="form-label">Closing Time</label>
                                    <select class="form-select" id="state" name="closeTime" required>
                                        <option value="">Choose...</option>
                                        <option value="5.00pm">5.00pm</option>
                                        <option value="5.30pm">5.30pm</option>
                                        <option value="6.00pm">6.00pm</option>
                                        <option value="6.30pm">6.30pm</option>
                                        <option value="7.00pm">7.00pm</option>
                                        <option value="7.30pm">7.30pm</option>
                                        <option value="8.00pm">8.00pm</option>
                                        <option value="8.30pm">8.30pm</option>
                                        <option value="9.00pm">9.00pm</option>
                                        <option value="9.30pm">9.30pm</option>
                                        <option value="10.00pm">10.00pm</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid time.
                                    </div>
                                    </div>

                                    <div class="col-12">
                                    <label for="foodBankEmail" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                    </div>

                                    <div class="col-12">
                                    <label for="foodBankAddress" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                                    <div class="invalid-feedback">
                                        Please enter a foodbank address.
                                    </div>
                                    </div>

                                    <div class="col-12">
                                    <label for="foodBankAddress2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                                    <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite">
                                    </div>	
                                    
                                    <div class="col-md-6">
                                    <label for="foodBankState" class="form-label">State</label>
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
                                        <label for="foodBankCity" class="form-label">City</label>
                                        <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                                        <div class="invalid-feedback">
                                            Postcode required.
                                        </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                    <label for="foodBankPostcode" class="form-label">Postcode</label>
                                    <input type="text" class="form-control" id="postcode" name="postcode" placeholder="12345" required>
                                    <div class="invalid-feedback">
                                        Postcode required.
                                    </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="foodbankDescription" class="form-label">Description <span class="text-muted">(Optional)</span></label>
                                        <textarea class="form-control" id="description" name="description" placeholder="Foodbank Information"> </textarea>
                                    </div>	
                                </div>
                                <div class="mb-5 text-center"><button class="w-50 btn btn-primary btn-lg" type="submit">Add FoodBank</button></div>
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
            id="applyModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="applyModal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-content rounded-4 shadow">
                        <div class="modal-header p-5 pb-4 border-bottom-0">
                            <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                            <h1 class="fw-bold mb-0 fs-2">Apply Provision</h1>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
    
                        <div id="apply"></div>
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
