<?php 

    include_once("_common/header.php"); 

    $item = $database->get("items", "text", [
        "id" => $_GET["id"]
    ]);
?>


<main class="container">
    <div class="row">
        <div class="page-header">
            <h1>Edit your ToDo item</h1>
        </div>

        <form id="edit-form" class="col-sm-6" action="_inc/edit-item.php" method="post">
            <p class="form-group">
                <textarea id="text" class="form-control" name="message" cols="10" rows="3"><?php echo $item ?></textarea>
            </p>

            <p class="form-group">
                <input class="btn-sm btn-danger" type="submit" value="edit item">
            </p>
        </form>
    </div> 
</main>

<?php include("_common/footer.php") ?>