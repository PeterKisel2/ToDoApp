<?php 

//Global functions

//404 error page
function show_404() {
    header("HTTP/1.0 404 Not Found");
    include_once("404.php");
    die();
}



//redirect
function redirect($page, $status_code = 302) {

    global $base_url;

    $page = ltrim($page, '/');

        if ($page === "" || $page === "/") {
            header("Location: $base_url/index.php", true, $status_code);
            die();
        }
        else {
            if ( strpos($page, '.php') !== false ) {
                $page;
            }
            else {
                $page = $page . '.php';
            };

            if ( strpos($page, $base_url) !== false ) {
                header("Location: $page", true, $status_code);
                die();
            }
            else {
                header("Location: $base_url/$page", true, $status_code);
                die();
            };
        };
    }
    



//returns text from DB or return false 
function get_item() {
    if ( ! isset($_GET["id"]) || empty($_GET["id"])) {
        return false;
    };

    global $database;

    $item = $database->get("items", "text", [
        'id' => $_GET['id']
    ]);

    if ( ! $item ) {
        return false;
    }

    return $item;
}



// add new HTML li to list 
function new_li($data) {

    foreach ( $data as $item) { ?>
        <li id="item-<?= $item["id"] ?>" class='list-group-item d-flex align-items-center justify-content-between'>
            <span><?= $item["text"] ?></span> 
            <div class='controls d-flex align-items-center'>
                <a href='' class='done-link'><i class='fas fa-check'></i></a>
                <a href='edit.php?id=<?= $item["id"] ?>' class='edit-link text-decoration-none'><i class='fas fa-pen'></i></a>
                <a href='delete.php?id=<?= $item["id"] ?>' class='delete-link'><i class='fas fa-trash-alt'></i></a>
            </div>
        </li>
    <?php };
}

?>