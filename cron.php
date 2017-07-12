<?php
/*
    Here's your secret message;
    Thank you for saving me, a/s/4.
*/

$status = [
    "status"=> [
        [
        "dc1"=> [
            "state"=>"up",
            "refreshed"=> time()
        ],"dc2"=> [
            "state"=>"up",
            "refreshed"=> time()
        ],"dc4"=> [
            "state"=>"up",
            "refreshed"=> time()
        ],"dc1-new"=> [
            "state"=>"up",
            "refreshed"=> time()
        ],"aquarius"=> [
            "state"=>"up",
            "refreshed"=> time()
        ],"taurus"=> [
            "state"=>"dead",
            "refreshed"=> time()
        ],"gemini"=> [
            "state"=>"dead",
            "refreshed"=> time()
        ],"aries"=> [
            "state"=>"up",
            "refreshed"=> time()
        ],"pisces"=> [
            "state"=>"up",
            "refreshed"=> time()
        ],"capicron"=> [
            "state"=>"up",
            "refreshed"=> time()
        ],"hayashi-vps-mon-1"=> [
            "state"=>"up",
            "refreshed"=> time()
        ],"minazuki-vps-gitlab"=> [
            "state"=>"dead",
            "refreshed"=> time()
        ],"hayashi-vps-postgre"=> [
            "state"=>"up",
            "refreshed"=> time()
        ]
        ]
    ]
];
file_put_contents("docs/status/all.json", json_encode($status, JSON_PRETTY_PRINT));
exec('git add --all');
exec('git commit -m "' . "status punch for " . date('Y-m-d H:i:s') . '"');
exec('git push -u origin master');