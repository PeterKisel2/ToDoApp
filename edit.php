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
            <h1>Edit your ToDo item</h1>
        </div>

        <?php include_once("_common/form.php") ?>
    </div> 
</main>

<?php include_once("_common/footer.php") ?>