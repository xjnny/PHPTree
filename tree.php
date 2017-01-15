<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>PHP TREE</title>
    </head>
    <body> 

<?php

$size = $_POST['size'];

for ($forest = 0; $forest < $size; $forest++) {
    echo '<div class="forest">';
    echo makeTree();
    echo '</div>';
    echo '<br>';
}



function makeTree() {
        $height = $_POST['height'];
        $tree = '<div class="star">🌟 </div><br>';
        
        for ($row = 1 ; $row < $height; $row ++) {
            for ($column = 0; $column < $row; $column++) {
                $tree = $tree . '<div class="box"></div>';
            }
            $tree = $tree . '<br>';
        }
        $tree = $tree . '<div class="trunk"></div>';
        
        return $tree . '<br><br>';
        }
        
        ?>
    </body>
</html>

        