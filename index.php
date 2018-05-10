<?php
/**
 * Created by PhpStorm.
 * User: wyatt
 * Date: 5/10/2018
 * Time: 2:22 PM
 */
include 'common.php';
if (isset($_GET['paste'])) {

} else if (isset($_POST['submit'])) {

} else {
    $index = file_get_contents(ROOT . "/public/index.html");
    $index = parseDefault($index);
    echo $index;
}
function parseDefault(string $content): string
{
    $content = str_replace("{root}", ROOT, $content);

    return $content;
}