<?php
if(isset($_POST['search'])){

$search = $_POST['searching'];

if(!empty($search)){
    header("Location: ../view/search.php?searching=$search");
}

}
