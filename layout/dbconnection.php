<?php
    require_once("../layout/profileboxes.php");

    //Get specified team's info
    function get_specteaminfo ($name) {

        $link = new mysqli("138.197.179.196:3306","scoreboard_account", "gimme them scorez yoo", "scoreboard_db");

        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        
          $query = "SELECT TeamName, TeamRanking, TeamImage FROM Team WHERE TeamName = '$name'";
            if ($result = mysqli_query($link, $query)){
                $resArray = mysqli_fetch_assoc($result);



                $test = profile_box_member([
                    "name"=>$resArray['TeamName'],
                    "img_url"=>$resArray['TeamImage'],
                    "img_small"=> true,
        
                    "show_stats"=>true,
                    "stats_short"=> true,
                    "stats"=>["won"=> 13, "lost"=> 3, "part"=>7],
                    "show_rank"=> true,
                    "rank"=> $resArray['TeamRanking'],
                    "show_score"=> true,
                    "score"=> 9001,
                    "buttons" => [
                        "kick"=> false
                    ]
                    ]);
        
                 echo "$test";

            }

    }





?>