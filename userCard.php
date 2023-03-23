<tr>
    <th scope="row">
        <?php echo $users_row['id'] ?>
    </th>
    <td>
        <?php echo $users_row['Email'] ?>
    </td>
    <td>
        <?php echo $users_row['Password'] ?>
    </td>
    <td>
        <?php echo $users_row['Role'] ?>
    </td>
    <td>
        <button name = "edit" type="button" id=<?php $id = $users_row['id'] ; echo $id ?> data-bs-toggle="modal" data-bs-target="#editModal" class="btn btn-primary">Edit</button>
        <!-- <button name = "delete" type="button" id=<?php $id = $users_row['id']; echo $id ?> class="btn btn-danger">Delete</button> -->
    </td>
</tr>

<script>
    document.querySelectorAll('button').forEach(occurence => {
        let button = $(occurence);
        if(button.attr('name') == 'edit'){
            let id = occurence.getAttribute('id');
            occurence.addEventListener('click', function() {
                $.post('editUserInfo.php', {id: id}, function(data) {
                    // console.log(data);
                    document.getElementById('edit').innerHTML = data;
                });
                console.log('A button with ID ' + id + ' was clicked!') 
            });
        } 
    });
</script>

