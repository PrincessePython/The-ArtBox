<?php include('oeuvres.php'); ?>

<?php include('partials_/header.php'); ?>

<main>
    <div id="liste-oeuvres">
    <?php foreach ($gallery_all as $key => $oeuvre) {?>
                <article class="oeuvre">
                    <a href="./oeuvre.php?id=<?php echo $oeuvre['id']; ?>">
                        <img src="<?php echo $oeuvre["image"]; ?>" alt="art-image" ->
                        <h2><?php echo $oeuvre["title"]; ?></h2>
                        <p class="description"><?php echo $oeuvre["author"]; ?></p>
                    </a>
            </article>
        

<?php } ?> 

    </div>
</main>
<?php include('partials_/footer.php'); ?>



