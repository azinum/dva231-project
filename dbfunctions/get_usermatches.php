<?php
    //Get matches specified user has participated in, returns array of match id's
	function get_usermatches ($link, $id) {
        $escName = mysqli_real_escape_string($link, $id);

        $matchquery = "SELECT Matches FROM MatchParticipation WHERE User = '$escName' ";

        if ($result = mysqli_query($link, $matchquery)){
            
            $retArray = [];
            $var = 0;
               while($resArray = mysqli_fetch_array($result, MYSQLI_NUM)) { 
                $retArray[$var] = $resArray[0][0];
                echo $retArray[$var];
                $var++;
               }
            return $retArray;
        }
    }

?>