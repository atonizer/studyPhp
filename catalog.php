<?php
$pageTitle = "Full Catalog";
$section = null;

if(isset($_GET["category"])){
    if ($_GET["category"] == "books"){
        $pageTitle = "Books";
        $section = "books";
    } else if ($_GET["category"] == "movies"){
        $pageTitle = "Movies";
        $section = "movies";
    } else if ($_GET["category"] == "music"){
        $pageTitle = "Music";
        $section = "music";
    }
}

include("inc/header.php"); ?>

<div class="section page">
    <h1><?php echo $pageTitle; ?></h1>
</div>

<?php include("inc/footer.php"); ?>