
<?php

function renderTitle($title){
    $header = <<<HTML
         <header class="row blue darken-2">
            <div class="col s12 center">
                <h2 class="white-text">$title</h2>
            </div>
        </header>
HTML;
    echo $header;
}

function renderArticles($title, $text, $author, $date){
   $a = <<<HTML
    <div class="row  blue lighten-2 " id="theTitle">
        <h4>$title</h4>
        <div class="col s10 blue lighten-5" id="theAuthor">
            $author
        </div>
        <div class="col s2 blue lighten-5" id="theDate">
            $date
        </div>
            <div class="col s12 blue lighten-5" id="theText">
                <h6>$text</h6>
            </div>
        </div>
HTML;
   return $a;
}
/*
<h6 class="white-text"><?php include "config.php" ?></h6>*/