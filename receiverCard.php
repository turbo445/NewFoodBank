<div class="col">    
    <div class="card shadow-sm">
        <svg
            class="bd-placeholder-img card-img-top"
            width="100%"
            height="225"
            xmlns="http://www.w3.org/2000/svg"
            role="img"
            aria-label="Placeholder: Thumbnail"
            preserveAspectRatio="xMidYMid slice"
            focusable="false">
            <title>Placeholder</title>
            <rect
                width="100%"
                height="100%"
                fill="#55595c" />
            <text
                x="50%"
                y="50%"
                fill="#eceeef"
                dy=".3em">
                Thumbnail
            </text>
        </svg>

        <div class="card-body">
            <p class="card-text">
                Email: <?php echo $receivers_row['email'] ?>
                <br>
                Name: <?php echo $receivers_row['Name'] ?>
            </p>
            <div
                class="d-flex justify-content-between align-items-center">
                <form id="form" method="POST">
                    <input type="hidden" name="postvar" value="" />
                    <div class="btn-group">
                        <a href="#viewModal?id=<?php $id = $receivers_row['id']; echo $id ?>">
                        <button
                            type="button"
                            name="view"
                            id=<?php $id = $receivers_row['id']; echo $id ?>
                            class="btn btn-sm btn-outline-secondary"
                            data-bs-toggle="modal" 
                            data-bs-target="#viewModal">
                            View
                        </button>
                        </a>
                        <?php
                        if($user_data ['Role'] == 'admin'){
                        ?>
                       
                            <a href="#editModal?id=$id = $receivers_row['id']">
                            <button
                                type="button"
                                name="edit"
                                class="btn btn-sm btn-outline-secondary"
                                id=<?php $id = $receivers_row['id']; echo $id ?>
                                data-bs-toggle="modal" 
                                data-bs-target="#editModal">
                                Edit
                            </button>
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </form>
                
                <small class="text-muted">9 mins</small>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('button').forEach(occurence => {
        let button = $(occurence);
        if(button.attr('name') == 'view'){
            let id = occurence.getAttribute('id');
            occurence.addEventListener('click', function() {
                $.post('viewReceiverInfo.php', {id: id}, function(data) {
                    // console.log(data);
                    document.getElementById('view').innerHTML = data;
                });
                console.log('A button with ID ' + id + ' was clicked!') 
            });
        }else if(button.attr('name') == 'edit'){
            let id = occurence.getAttribute('id');
            occurence.addEventListener('click', function() {
                $.post('editReceiverInfo.php', {id: id}, function(data) {
                    // console.log(data);
                    document.getElementById('edit').innerHTML = data;
                });
                console.log('A button with ID ' + id + ' was clicked!') 
            });
        } 
    });
</script>

