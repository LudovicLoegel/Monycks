<h4>
    <a href="<?php $project_path ?>index.php?type=create">+ Add new type</a>

</h4>

<?php messageFlash(); ?>


<?php
foreach (getUserType($bdd) as $t) {
    echo '<h2>#' . $t['id'] . ' ' . $t['type'] . ' <a href="' . $project_path . 'index.php?type=edit&id=' . $t['id'] . '">✎</a>
          <a href="' . $project_path . 'index.php?type=deleteAction&id=' . $t['id'] . '">×</a></h2><br>';
    foreach(getUserByType($bdd,$t['id']) as $t2){
        echo $t2['login'] . '<br>';
    }
}
?>
    <br>