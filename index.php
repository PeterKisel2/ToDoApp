<?php include("_common/header.php") ?>


<main class="container">
    <div class="row">
        <div class="page-header">
            <h1>To Do app</h1>
        </div>
        
        <?php $data = $database->select("items", "text"); ?>

        <ul class="list-group col-sm-6">
            <?php 
                foreach ( $data as $item) {
                    echo '<li class="list-group-item">' . $item . '</li>';
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

<?php include("_common/footer.php") ?>