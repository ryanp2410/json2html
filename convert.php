<?php

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
        "parent": "div#world"
    }
}';

$data = json_decode($json, true);

foreach ($data as $tag => $stuff) {
    
}