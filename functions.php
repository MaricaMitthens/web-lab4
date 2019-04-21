
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
   $res = <<<HTML
    <div class="row  blue lighten-2 " id="theTitle">
        <h4>$title</h4>
        <div class="col s7 blue lighten-5" id="theAuthor">
            $author
        </div>
        <div class="col s5 blue lighten-5 right-align" id="theDate">
            $date
        </div>
            <div class="col s12 blue lighten-5" id="theText">
                <h6>$text</h6>
            </div>
        </div>
HTML;
   return $res;
}

function renderArticlesAdmin($id, $title, $text, $author, $date){
    $res = <<<HTML
    <div class="row  blue lighten-2 " id="theTitle">
        <div class="col s9">
            <h4>$title</h4>
        </div>
        <div class="col s3 right-align">
            <form action="deleteArticle.php" method="post">
                <button class="waves-effect waves-light red btn" type="submit" name="id" value="$id">DELETE</button>
            </form>
        </div>
        <div class="col s7 blue lighten-5" id="theAuthor">
            $author
        </div>
        <div class="col s5 blue lighten-5 right-align" id="theDate">
            $date
        </div>
            <div class="col s12 blue lighten-5" id="theText">
                <h6>$text</h6>
            </div>
        </div>
HTML;
    return $res;
}

function renderFormAdmin(){
    $res=<<<HTML
        <div class="row">
           
            <form action="addArticle.php" method="post">
            
            <div class="input-field col s6">
                <input id="title" name="title" type="text">
                <label for="title">TITLE</label>
            </div>
            
            <div class="input-field col s6">
                <input id="author" name="author" type="text">
                <label for="author">AUTHOR</label>
            </div>
            
            <div class="input-field col s12">
                <textarea id="text" name="text"></textarea>
                <label for="text">ARTICLE</label>
            </div>
            <button class="waves-effect waves-light green btn" type="submit" name="bnt">SUBMIT</button>
            </form>

        </div>
HTML;
    echo $res;
}


/*
<h6 class="white-text"><?php include "config.php" ?></h6>*/