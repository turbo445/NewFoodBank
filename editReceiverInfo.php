<?php
    include("loadclass.php");

    $id = $_POST['id'];
    // echo $id;
    // echo "<script>console.log(.$id.) </script>";

    $receiver = new Receiver();
    $receiverDetails = $receiver->getdetailReceiver($id); 
    // echo "<pre>";
    // print_r($foodbankDetails);
    // echo "</pre>";

    // not loading editReceiver

echo'<div class="modal-body p-5 pt-0">';
echo'    <form class="needs-validation" action="editReceiver.php" method="POST" novalidate >';
echo'        <input';
echo '          type="hidden"';
echo'           value="'.$receiverDetails[0]['id'].'"';
echo '          class="form-control rounded-3"';
echo '          name="id"';
echo '          id="floatingName"/>';
echo'        <div class="row g-3">';
echo'            <div class="col-sm-12">';
echo'            <label for="receiverName" class="form-label">Receiver Name</label>';
echo'            <input type="text" class="form-control" id="receiverName" name="name" placeholder="Receiver ABC" value="'.$receiverDetails[0]['Name'].'" required>';
echo'            <div class="invalid-feedback">';
echo'                Valid receiver name is required.';
echo'            </div>';
echo'            </div>';
echo'            ';
echo'            <div class="col-sm-12">';
echo'            <label for="receiverNumber" class="form-label">Phone Number</label>';
echo'            <input type="text" class="form-control" id="phoneNumber" name="phone" placeholder="012-34567890"value="'.$receiverDetails[0]['Phone'].'" required>';
echo'            <div class="invalid-feedback">';
echo'                Valid phone number is required.';
echo'            </div>';
echo'            </div>';
echo'            ';
echo'            <div class="col-md-6">';
echo'            <label for="age" class="form-label">Age</label>';
echo'            <input type="text" class="form-control" id="age" name="age" placeholder="21" value="'.$receiverDetails[0]['Age'].'" required>';
echo'            <div class="invalid-feedback">';
echo'                Valid age is required.';
echo'            </div>';
echo'            </div>';
echo'            ';
echo'            <div class="col-md-6">';
echo'            <label for="gender" class="form-label">Gender</label>';
echo'            <select class="form-select" id="state" name="gender" required>';
echo'                <option value="'.$receiverDetails[0]['Gender'].'" selected hidden>'.$receiverDetails[0]['Gender'].'</option>';
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
echo'            <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" value="'.$receiverDetails[0]['Address'].'" required>';
echo'            <div class="invalid-feedback">';
echo'                Please enter a foodbank address.';
echo'            </div>';
echo'            </div>';
echo'';
echo'            <div class="col-12">';
echo'            <label for="receiverAddress2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>';
echo'            <input type="text" class="form-control" name="address2" id="address2" placeholder="Apartment or suite" value="'.$receiverDetails[0]['Address2'].'" required>';
echo'            </div>	';
echo'            ';
echo'            <div class="col-md-6">';
echo'            <label for="receiverState" class="form-label">State</label>';
echo'            <select class="form-select" id="state" name="state" required>';
echo'                <option value="'.$receiverDetails[0]['State'].'" selected hidden>'.$receiverDetails[0]['State'].'</option>';
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
echo'                <input type="text" class="form-control" name="city" id="city" placeholder="City" value="'.$receiverDetails[0]['City'].'" required>';
echo'                <div class="invalid-feedback">';
echo'                    Postcode required.';
echo'                </div>';
echo'                </div>';
echo'            </div>';
echo'            ';
echo'            <div class="col-md-6 pt-2">';
echo'            <label for="receiverPostcode" class="form-label">Postcode</label>';
echo'            <input type="text" class="form-control" id="postcode" name="postcode" placeholder="12345" value="'.$receiverDetails[0]['Postcode'].'" required>';
echo'            <div class="invalid-feedback">';
echo'                Postcode required.';
echo'            </div>';
echo'            </div>';
echo'            <div class="col-12 pt-2">';
echo'                <label for="receiverNote" class="form-label">Note <span class="text-muted">(Optional)</span></label>';
echo'                <textarea class="form-control" id="note" name="note" placeholder="Foodbank Information">'.$receiverDetails[0]['Note'].' </textarea>';
echo'            </div>	';
echo'        <div class="mt-5 mb-3 text-center"><button class="w-50 btn btn-primary btn-lg" type="submit">Update</button></div>';
echo'    </form>';
echo'</div>';

?>
<script src="script/validation.js"></script>