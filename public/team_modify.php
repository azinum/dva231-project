<?php
    require_once("../layout/shadow.php");
    require_once("../layout/tablayout.php");
    require_once("../layout/profileboxes.php");
    require_once("../layout/searchoverlay.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tablayout example</title>
        <?php tablayout_headtags(); ?>
        <link rel="stylesheet" type="text/css" href="/css/profile.css">
        <link rel="stylesheet" type="text/css" href="/css/team_modify.css">
        <?php searchoverlay_headtags(); ?>
    </head>
    <body>
        <?php searchoverlay(); ?>
        <div class="midbar">
            <?php shadow_start(); ?>
                <div class="shadowparent tabcontainer">
                    <?php
                        tablayout_begin([
                            0 => "Bio",
                            1 => "Members"
                        ]);

                        tabcontent_begin(0);
                        ?>
                            <div class="teambio">
                                <div class="profilepic">
                                    <img src="/img/tmp_profile.jpg">
                                </div>
                                <form>
                                    <input type="file" placeholder="Profile picture">
                                    <input type="text" placeholder="Name">
                                    <textarea>
                                    </textarea>
                                </form>
                            </div>
                        <?php
                        tabcontent_end();

                        tabcontent_begin(1);
                            
                        teambox(["name" => "Good Team","imgurl" => "/img/tmp_profile.jpg"], false);
                        teambox(["name" => "Good Team","imgurl" => "/img/tmp_profile.jpg"], false);
                        teambox(["name" => "Good Team","imgurl" => "/img/tmp_profile.jpg"], false);

                        ?>
                            <?php shadow_start("addmembershadow"); ?>
                            <div class="addmember shadowparent" onclick="searchoverlay_toggle();">
                                <img src="/img/plus.svg">
                            </div>
                            <?php shadow_end(); ?>
                        <?php

                        tabcontent_end();

                        tablayout_end();
                    ?>
                </div>
            <?php shadow_end(); ?>
        </div>
    </body>
</html>
