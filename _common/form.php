<?php 

$page = basename($_SERVER["SCRIPT_NAME"], ".php");
global $item, $base_url;

if ($page === "index" || $page === "") {
    $page = "add";
    { ?>
        <form id='<?= $page ?>-form' class='col-sm-6' action='_inc/<?= $page ?>-item.php' method='post'>
            <p class='form-group'>
                <textarea id='text' class='form-control' name='message' cols='10' rows='3' placeholder='add new to-do thing' required></textarea>
            </p>
            <p class='form-group'>
                <input class='btn-sm btn-danger' type='submit' value='<?= $page ?> item'>
            </p>
         </form>
    <?php };
}

else {
    
    { ?>
        <form id='<?= $page ?>-form' class='col-sm-6' action='_inc/<?= $page ?>-item.php' method='post'>
           <p class='form-group'>
               <textarea id='text' class='form-control' name='message' cols='10' rows='3'><?= $item ?></textarea>
           </p>
           <p class='form-group'>
               <input name='id' type='hidden' value='<?= $_GET["id"] ?>'>
               <input class='btn-sm btn-danger' type='submit' value='<?= $page ?> item'>
               <span class='controls'><a href='<?= $base_url ?>' class='text-decoration-none'>back</a></span>
           </p>
        </form>
    <?php };
};

?>