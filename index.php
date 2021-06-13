<?php include_once("_common/header.php") ?>


<main class="container">
    <div class="row">
        <div class="page-header">
            <h1>To Do app</h1>
        </div>
        
        <?php $data = $database->select("items", [ "id", "text"]); ?>

        <ul id="item-list"  class="list-group col-sm-6">
            <?php 
                
                if ($data) {
                    new_li($data);
                } 
                else {
                    echo '<p class="empty"> Nothing to show, add new tasks using the form </p>';
                };
                
            ?>
        </ul>
        
        <?php include_once("_common/form.php") ?>
        
    </div> 
</main>

<?php include_once("_common/footer.php") ?>