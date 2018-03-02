<article>
    <?php
    foreach ($bulletins as $bulletin):
        ?>
        <hr>
        <p>Ville referente : <?php echo $bulletin['ville'];?></p>
        <p><?php echo $bulletin['meteo'];?></p>
        <p><?php echo $bulletin['contenu'];?></p>
        <p><?php  $bulletin['date'];?></p>
    <?php
    endforeach;
    ?>
</article>