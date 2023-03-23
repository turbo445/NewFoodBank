<?php
    include 'loadclass.php';
    $id = $_POST['id'];

    $user = new User();
    $userDetails = $user->getdetailUser($id);

echo' <div class="modal-body p-5 pt-0">';
echo'   <form method="post" action = "editUser.php">';
echo'     <div class="form-floating mb-3">';
echo'       <input';
echo'           type="hidden"';
echo'           class="form-control rounded-3"';
echo'           value="'.$userDetails[0]['id'].'"';
echo '          name="id"';
echo'           id="floatingName"/>';
echo'   </div>';
echo'      <label class="px-2 mb-1">Email</label>';
echo'     <div class="form-floating mb-3">';
echo'       <input';
echo'           type="text"';
echo'           class="form-control rounded-3"';
echo'           value="'.$userDetails[0]['Email'].'"';
echo '          name="email"';
echo'           id="floatingName"/>';
echo'   </div>';
        
echo'   <label class="px-2 mb-1">Password</label>';
echo'   <div class="form-floating mb-3">';
echo'       <input';
echo'           type="text"';
echo'           class="form-control rounded-3"';
echo'           value="'.$userDetails[0]['Password'].'"';
echo '          name="password"';
echo'           id="floatingPhone"/>';
echo'   </div>';
        
echo' <label class="px-2 mb-1">Role</label>';
echo' <div class="form-check py-1">';
    if($userDetails[0]['Role'] == 'admin'){
echo'    <input class="form-check-input" type="radio" name="role" value="admin" checked>';
} else {
echo'    <input class="form-check-input" type="radio" name="role" value="admin">';
}
echo'    <label class="form-check-label" for="flexRadioDefault1">';
echo'        Grant admin';
echo'    </label>';
echo' </div>';

echo' <div class="form-check py-1">';
    if($userDetails[0]['Role'] == 'receiver'){
echo'    <input class="form-check-input" type="radio" name="role" value="receiver" checked>';
    } else {
echo '    <input class="form-check-input" type="radio" name="role" value="receiver">';
}
echo'    <label class="form-check-label" for="flexRadioDefault1">';
echo'        Grant receiver';
echo'    </label>';
echo'</div>';

echo'<div class="form-check py-1">';
    if($userDetails[0]['Role'] == 'donator'){
echo'    <input class="form-check-input" type="radio" name="role" value="donator" checked>';
    } else {
echo'    <input class="form-check-input" type="radio" name="role" value="donator">';
}
echo'    <label class="form-check-label" for="flexRadioDefault2">';
echo'        Grant donator';
echo'    </label>';
echo'</div>';

echo'   <button';
echo'       class="w-100 mb-2 btn btn-lg rounded-3 btn-primary"';
echo'       type="submit">';
echo'       Save';
echo'   </button>';
echo'</form>';
echo'</div>';



?>