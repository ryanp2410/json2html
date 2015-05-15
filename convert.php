<?php

require_once "Tag.php";

$json = 
'{
    "div#world": {
        "attr": {
            "class": "whatever"
        },
        "parent": "none"
    },
    "div#stuff": {
        "attr": {
            "class": "text"
        },
        "parent": "div#world",
        "value": "Hello World!"
    }
}';

$data = json_decode($json, true);

foreach ($data as $tag => $stuff) {
    if (strpos('#', $tag) != false)
    {
        $tagId = explode("#", $tag);
        $tagName = $tagId[0];
        $id = $tagId[1];
    }
    else
    {
        $tagName = "div";
        $id = null;
    }
    $value = isset($stuff["value"]) ? $stuff["value"] : null;
    $newTag = new Tag($tagName, $id, $stuff["attr"], $stuff["parent"], $value);
    $newTag->printTag();
}