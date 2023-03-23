<?php
    include("loadclass.php");
    if($_SESSION['userid']){ 
        error_reporting(0);
?>  

<?php
    if($_SESSION['userid']){ 
        $user = new User();
        $users = $user->getAllUser(); 
        $receiver = new Receiver();
        $receivers = $receiver->getAllReceiver();

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

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Profile Management</title>

<link href="styles/css/bootstrap.min.css" rel="stylesheet"></link>
<script src="styles/js/bootstrap.bundle.min.js"></script>
<script src="script/validation.js"></script>

<style>
body {
    background: orange;
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>
<body>
<?php include('navbar.php'); ?>
		
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <!-- <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div> -->
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                    <?php
                    $x = false;
                    if($receivers)
                    {
                        foreach($receivers as $receiver_row)     //get all row with same id
                        {   
                            if ($receiver_row['email'] == $user_data['Email'])
                            {
                                echo'<div class="modal-body p-5 pt-0">';
                                echo'    <form class="needs-validation" action="editReceiver.php" method="POST" novalidate >';
                                echo'        <input';
                                echo '          type="hidden"';
                                echo'           value="'.$receiver_row['id'].'"';
                                echo '          class="form-control rounded-3"';
                                echo '          name="id"';
                                echo '          id="floatingName"/>';
                                echo'        <input';
                                echo '          type="hidden"';
                                echo'           value="'.$receiver_row['email'].'"';
                                echo '          class="form-control rounded-3"';
                                echo '          name="email"';
                                echo '          id="floatingName"/>';
                                echo'        <div class="row g-3">';
                                echo'            <div class="col-sm-12">';
                                echo'            <label for="receiverName" class="form-label">Receiver Name</label>';
                                echo'            <input type="text" class="form-control" id="receiverName" name="name" placeholder="Receiver ABC" value="'.$receiver_row['Name'].'" required>';
                                echo'            <div class="invalid-feedback">';
                                echo'                Valid receiver name is required.';
                                echo'            </div>';
                                echo'            </div>';
                                echo'            ';
                                echo'            <div class="col-sm-12">';
                                echo'            <label for="receiverNumber" class="form-label">Phone Number</label>';
                                echo'            <input type="text" class="form-control" id="phoneNumber" name="phone" placeholder="012-34567890"value="'.$receiver_row['Phone'].'" required>';
                                echo'            <div class="invalid-feedback">';
                                echo'                Valid phone number is required.';
                                echo'            </div>';
                                echo'            </div>';
                                echo'            ';
                                echo'            <div class="col-md-6">';
                                echo'            <label for="age" class="form-label">Age</label>';
                                echo'            <input type="text" class="form-control" id="age" name="age" placeholder="21" value="'.$receiver_row['Age'].'" required>';
                                echo'            <div class="invalid-feedback">';
                                echo'                Valid age is required.';
                                echo'            </div>';
                                echo'            </div>';
                                echo'            ';
                                echo'            <div class="col-md-6">';
                                echo'            <label for="gender" class="form-label">Gender</label>';
                                echo'            <select class="form-select" id="state" name="gender" required>';
                                echo'                <option value="'.$receiver_row['Gender'].'" selected hidden>'.$receiver_row['Gender'].'</option>';
                                echo'                <option value="Male">Male</option>';
                                echo'                <option value="Female">Female</option>				';
                                echo'           </select>';
                                echo'            <div class="invalid-feedback">';
                                echo'                Please provide a valid gender.';
                                echo'            </div>';
                                echo'            </div>';
                                echo'';
                                echo'            <div class="col-12">';
                                echo'            <label for="receiverAddress" class="form-label">Address</label>';
                                echo'            <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" value="'.$receiver_row['Address'].'" required>';
                                echo'            <div class="invalid-feedback">';
                                echo'                Please enter a foodbank address.';
                                echo'            </div>';
                                echo'            </div>';
                                echo'';
                                echo'            <div class="col-12">';
                                echo'            <label for="receiverAddress2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>';
                                echo'            <input type="text" class="form-control" name="address2" id="address2" placeholder="Apartment or suite" value="'.$receiver_row['Address2'].'" required>';
                                echo'            </div>	';
                                echo'            ';
                                echo'            <div class="col-md-6">';
                                echo'            <label for="receiverState" class="form-label">State</label>';
                                echo'            <select class="form-select" id="state" name="state" required>';
                                echo'                <option value="'.$receiver_row['State'].'" selected hidden>'.$receiver_row['State'].'</option>';
                                echo'                <option value="Johor">Johor</option>';
                                echo'                <option value="Kedah">Kedah</option>';
                                echo'                <option value="Kelantan">Kelantan</option>';
                                echo'                <option value="Malacca">Malacca</option>';
                                echo'                <option value="Negeri Sembilan">Negeri Sembilan</option>';
                                echo'                <option value="Pahang">Pahang</option>';
                                echo'                <option value="Penang">Penang</option>';
                                echo'                <option value="Perak">Perak</option>';
                                echo'                <option value="Perlis">Perlis</option>';
                                echo'                <option value="Sabah">Sabah</option>';
                                echo'                <option value="Sarawak">Sarawak</option>';
                                echo'                <option value="Selangor">Selangor</option>';
                                echo'                <option value="Terengganu">Terengganu</option>';
                                echo'                <option value="W.P. Kuala Lumpur">W.P. Kuala Lumpur</option>';
                                echo'                <option value="W.P. Labuan">W.P. Labuan</option>';
                                echo'                <option value="W.P. Putrajaya">W.P. Putrajaya</option>';
                                echo'           </select>';
                                echo'            <div class="invalid-feedback">';
                                echo'                Please provide a valid state.';
                                echo'            </div>';
                                echo'            </div>';
                                echo'';
                                echo'            <div class="col-md-6">';
                                echo'                <label for="receiverCity" class="form-label">City</label>';
                                echo'                <input type="text" class="form-control" name="city" id="city" placeholder="City" value="'.$receiver_row['City'].'" required>';
                                echo'                <div class="invalid-feedback">';
                                echo'                    Postcode required.';
                                echo'                </div>';
                                echo'                </div>';
                                echo'            </div>';
                                echo'            ';
                                echo'            <div class="col-md-6 pt-2">';
                                echo'            <label for="receiverPostcode" class="form-label">Postcode</label>';
                                echo'            <input type="text" class="form-control" id="postcode" name="postcode" placeholder="12345" value="'.$receiver_row['Postcode'].'" required>';
                                echo'            <div class="invalid-feedback">';
                                echo'                Postcode required.';
                                echo'            </div>';
                                echo'            </div>';
                                echo'            <div class="col-12 pt-2">';
                                echo'                <label for="receiverNote" class="form-label">Note <span class="text-muted">(Optional)</span></label>';
                                echo'                <textarea class="form-control" id="note" name="note" placeholder="Foodbank Information">'.$receiver_row['Note'].' </textarea>';
                                echo'            </div>	';
                                echo'        <div class="mt-5 mb-3 text-center"><button class="w-50 btn btn-primary btn-lg" type="submit">Update</button></div>';
                                echo'    </form>';
                                echo'</div>';
                            $x = true;
                            break;
                            }
                        }
                    }
                    if($x == false){
                        echo '
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
                                <label for="receiverEmail" class="form-label">Receiver Email</label>
                                <input type="email" class="form-control" id="receiverEmail" name="email" placeholder="Receiver@gmail.com" value="'.$user_data['Email'].'" readonly>
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
                            <div class="my-2 text-center"><button class="btn btn-primary profile-button btn-lg" type="Submit">Save Profile</button></div>
                        </form>
                        ';
                    }
                ?>
            </div>
        </div>       
    </div>
</div>
</div>
</div>
</body>
</html>
<?php
    }else{
        header("Location: indexN2.php");
    }
?>