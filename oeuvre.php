<?php include('partials_/header.php'); ?>
<?php include('oeuvres.php'); ?>
<?php
    $id = $_GET["id"];
    $oeuvre = $gallery_all[$id];
?>

<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $oeuvre["image"]; ?>" alt="Aashaaheen Baadal">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvre["title"]; ?></h1>
            <p class="description"><?php echo $oeuvre["author"]; ?></p>
            <p class="description-complete"><?php echo $oeuvre["desc"]; ?></p>
        </div>
    </article>
</main>

<?php include('partials_/footer.php'); ?>
