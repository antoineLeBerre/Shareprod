<?php 
//if (!defined("BASE_URL")) die("ressource interdite");
function count_table($table, $tab_option=array())
{
	global $pdo;
	try {

        $query = "SELECT COUNT(*) AS nombre FROM ";
        if (is_array($table))
        {
            $i = 0;
            while ($i < sizeof($table)){
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
        if (isset($tab_option["WHERE"]) && (sizeof($tab_option["WHERE"])) > 1 && (sizeof($tab_option["WHERE"])) %2 == 0)
        {
            $query .= " WHERE ".$tab_option["WHERE"][0]."=".$tab_option["WHERE"][1];
            if (sizeof($tab_option["WHERE"]) > 2){
                $j = 2;
                while ($j < sizeof($tab_option["WHERE"])){
                    $query .= " AND ".$tab_option["WHERE"][$j]."=".$tab_option["WHERE"][$j+1];
                    $j += 2;
                }
            }
        }

		$cursor = $pdo->query($query);
		$cursor->execute();
		$result = $cursor->fetch();
		$cursor->closeCursor();

		return $result[0];

	} catch (Exception $e) {
		echo "Failed : ".$e->getMessage();
	}
}
