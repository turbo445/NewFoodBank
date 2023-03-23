<?php
    include("loadclass.php");

    $id = $_POST['id'];
    // echo $id;
    // echo "<script>console.log(.$id.) </script>";

    $foodbank = new Foodbank();
    $foodbankDetails = $foodbank->getdetailFoodbank($id); 
    $login = new Login();
    $user_data = $login->check_login($_SESSION['userid']);

    // echo "<pre>";
    // print_r($foodbankDetails);
    // echo "</pre>";

echo' <form class="needs-validation" action="addRequest.php" method="post" novalidate>';
echo'    <div class="row g-3 px-4 py-4">';
echo'        <div class="col-sm-12">';
echo'        <label for="foodbankName" class="form-label">Foodbank Name</label>';
echo'        <input type="text" class="form-control" id="foodbankName" name="fb_name" value="'.$foodbankDetails[0]['Fb_name'].'" readonly>';


echo'        <div class="col-12">';
echo'        <label for="foodBankEmail" class="form-label">Email</label>';
echo'        <input type="email" class="form-control" id="email" name="email" value="'.$user_data['Email'].'" readonly>';
echo'        </div>';
echo'';

echo'        <div class="col-12">';
echo'            <label for="foodbankDescription" class="form-label">Description <span class="text-muted">(Optional)</span></label>';
echo'            <textarea class="form-control" id="note" name="note"> </textarea>';
echo'        </div>	';
echo'    </div>';
echo'    <div class="mb-5 text-center"><button class="w-50 btn btn-primary btn-lg" type="submit">Update</button></div>';
echo'    </form>';
?>
<script src="script/validation.js"></script>