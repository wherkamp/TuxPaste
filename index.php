<?php
/**
 * Created by PhpStorm.
 * User: wyatt
 * Date: 5/10/2018
 * Time: 2:22 PM
 */
include 'common.php';
if ($configJson->{'installed'} == "true") {
    if (isset($_GET['paste'])) {

    } else if (isset($_POST['submit'])) {

    } else {
        if (isset($_GET['post'])) {
            if ($_GET['post'] == "file") {

                $index = file_get_contents(ROOT . "/public/post-paste-file.html");
                $index = parseDefault($index);
                echo $index;
            } elseif ($_GET['post'] == "text") {

                $index = file_get_contents(ROOT . "/public/post-paste-regular.html");
                $index = parseDefault($index);
                echo $index;
            }
        } else {
            $index = file_get_contents(ROOT . "/public/index.html");
            $index = parseDefault($index);
            echo $index;
        }
    }
} else {
    //Do Install

    //Finished!
    $configJson->{'installed'} = "true";
    file_put_contents(json_encode($configJson));
    header("Location: " . ROOT . "/installed");
}
function parseDefault(string $content): string
{
    $content = str_replace("{root}", ROOT, $content);
    if (isset($_GET['installed'])) {
        $content = str_replace("motd", '<div class="alert alert-success" role="alert">
        	<strong>Install Successful</strong>
        </div>', $content);
    }
    return $content;
}