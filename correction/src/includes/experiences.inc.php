<?php

foreach(getAll($dataBase, 'experiences')as $value) {
    echo "<h1>" . $value['title_experience'] . "</h1>";
    echo "<p>" . $value['long_text_experience'] . "</p>";

}