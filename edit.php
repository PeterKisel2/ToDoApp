<?php 

    include_once("_common/header.php"); 

    $item = $database->get("items", "text", [
        'id' => $_GET['id']
    ]);

    if ( ! $item ) {
        header("HTTP/1.0 404 Not Found");
        include_once("404.php");
        die();
    }
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
                <input name="id" type="hidden" value="<?php echo $_GET['id']?>">
                <input class="btn-sm btn-success" type="submit" value="edit item">
                <span class="controls">
                    <a href="<?php echo $base_url ?>" class="text-decoration-none">back</a>
                </span>
            </p>
        </form>
    </div> 
</main>

<?php include_once("_common/footer.php") ?>