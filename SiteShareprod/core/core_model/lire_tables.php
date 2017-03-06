<?php 
//if (!defined("BASE_URL")) die("ressource interdite");
function lire_tables($table, $tab_option = array())
{
	global $pdo;
	try {

	    $query = "SELECT * FROM ";
	    if (is_array($table))
        {
            $i = 0;
            while ($i <= sizeof($table) -1){
                if ($i == sizeof($table) -1){
                    $query .= $table[$i];
                }
                else{
                    $query .= $table[$i].", ";
                }
                $i++;
            }
        }
        else{
	        $query .= $table;
        }
		if (isset($tab_option["WHERE"]) && (sizeof($tab_option["WHERE"])) > 1 && (sizeof($tab_option["WHERE"])) %2 == 0 ) {
			$query .= " WHERE '".$tab_option["WHERE"][0]."'='".$tab_option["WHERE"][1]."'";
			if (sizeof($tab_option["WHERE"]) > 2){
			    $j = 2;
			    while ($j < sizeof($tab_option["WHERE"])){
                    if ($j == sizeof($tab_option["WHERE"])){
                        $query .= "'";
                    }
                    else{
                        $query .= " AND '".$tab_option["WHERE"][$j]."'='".$tab_option["WHERE"][$j+1];
                    }
                    $j += 2;
                }
            }
		}
		if (isset($tab_option["ORDER BY"])) {
			$query .= " ORDER BY ".$tab_option["ORDER BY"];
			if (isset($tab_option["ORDER"])) {
				$query .= " ".$tab_option["ORDER"];
			}
		}
        var_dump($query);
        die();
		if (isset($tab_option["LIMIT"])) {
			$query .= " LIMIT ";
			if (isset($tab_option["OFFSET"])) {
				$query .= $tab_option["OFFSET"]. ",";
			}
			$query .= $tab_option["LIMIT"];
		}
		$cursor = $pdo->query($query);
		
		$cursor->execute();
		$results = $cursor->fetchAll();
		$cursor->closeCursor();

		return $results;

	} catch (Exception $e) {
		echo "Failed : ".$e->getMessage();
	}
}