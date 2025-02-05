<?php 

function views($path){
    return __DIR__ . "/../views/{$path}.view.php";
}

function controllers($path) {
    return __DIR__ . "/../controllers/{$path}.php";
}

function partials($path, $variables = []){
    extract($variables);
    require __DIR__ . "/../views/partials/{$path}.php";
}
function abort(){
    http_response_code(404);
    echo "<h1>404 Not Found</h1>";
    exit;
}