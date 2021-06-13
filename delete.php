<?php 

    include_once("_common/header.php"); 

    $item = get_item();
    if ( !$item ) {
        show_404();
    }

?>


<main class="container">
    <div class="row">
        <div class="page-header">
            <h1>Delete item</h1>
        </div>

        <form id="delete-form" class="col-sm-6" action="_inc/delete-item.php" method="post">
            <p class="form-group">
                <textarea disabled id="text" class="form-control" name="message" cols="10" rows="1"><?php echo $item ?></textarea>
            </p>

            <p class="form-group">
                <input name="id" type="hidden" value="<?php echo $_GET['id']?>">
                <input class="btn-sm btn-success" type="submit" value="delete item">
                <span class="controls">
                    <a href="<?php echo $base_url ?>" class="text-decoration-none">back</a>
                </span>
            </p>
        </form>
    </div> 
</main>

<?php include_once("_common/footer.php") ?>