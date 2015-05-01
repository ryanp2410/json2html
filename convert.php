<?php

$json = 
'{
    {
        "tag": "div",
        "attr": {
            "class": "container"
        },
        "value": {
            "tag": "p",
            "attr": {
                "class": "text",
                "id": "hello-world"
            },
            "value": "Hello World!"
        }
    }
}';

/*$json = $_POST["input"];*/
$data = json_decode($json, true);
var_dump($data);
function iterate($stuff) {
    foreach ($stuff as $object) {
        foreach ($object as $key => $value) {
            $tag = $getTag($key);
            $attrs = getAttrs($tag);
            $tagValue = getValue($key);
            ?> <<?=$tag?> <?php
            foreach ($attrs as $attr => $var) {
                ?> <?=$attr?>="<?=$var?>" <?php
            }
            ?> ><?=$value?> </<?=$tag?>> <?php
        }
    }
}

function getAttrs($key) {
    if ($key == "attr") {
        return $key;
    }
    return false;
}

function getTag($key) {
    if ($key == "tag") {
        return $key;
    }
    return false;
}

function getValue($key) {
    if ($key == "value") {
        return $key;
    }
    return false;
}
