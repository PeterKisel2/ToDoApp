<?php include "_common/header.php" ?>


<main class="container">
    <div class="row">
        <div class="page-header">
            <h1>To Do app</h1>
        </div>

        <ul class="list-group col-sm-6">
            <li class="list-group-item">do this pls</li>
            <li class="list-group-item">also do this stuff asap</li>
        </ul>

        
        <form class="col-sm-6" action="add-new.php">
            <p class="form-group">
                <textarea class="form-control" name="message" id="text" cols="10" rows="3" placeholder="add new to-do thing"></textarea>
            </p>

            <p class="form-group">
                <input class="btn-sm btn-danger" type="submit" value="add new item">
            </p>
        </form>
    </div> 
</main>

<?php include "_common/footer.php" ?>