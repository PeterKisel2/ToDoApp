<?php include_once("_common/header.php") ?>


<main class="container">
    <div class="row">
        <div class="page-header">
            <h1>To Do app</h1>
        </div>
        
        <?php $data = $database->select("items", [ "id", "text"]); ?>

        <ul class="list-group col-sm-6">
            <?php 
                foreach ( $data as $item) {
                    echo '<li id="item-' . $item["id"] . '" class="list-group-item d-flex align-items-center justify-content-between">';
                    echo  $item["text"];
                    echo '  <div class="controls d-flex align-items-center">';
                    echo '      <a href="edit.php?id='. $item["id"] .'"class="edit-link text-decoration-none">edit</a>';
                    echo '      <a href="delete.php?id='. $item["id"] .'"class="delete-link ms-2"><i class="fas fa-trash-alt"></i></a>';
                    echo '  </div>';
                    echo '</li>';
                };
            ?>
        </ul>
        
        <form id="add-form" class="col-sm-6" action="_inc/add-item.php" method="post">
            <p class="form-group">
                <textarea id="text" class="form-control" name="message" cols="10" rows="3" placeholder="add new to-do thing"></textarea>
            </p>

            <p class="form-group">
                <input class="btn-sm btn-danger" type="submit" value="add new item">
            </p>
        </form>
    </div> 
</main>

<?php include_once("_common/footer.php") ?>