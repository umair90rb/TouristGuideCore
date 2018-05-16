

<?php


	
///******************** Function for date formatting  ********************/
	function formatMySQLDate($mySQLDateTime, $dateFormat) { 
		$year = substr($mySQLDateTime,0,4);
		$mon  = substr($mySQLDateTime,5,2);
		$day  = substr($mySQLDateTime,8,2);
		$hour = substr($mySQLDateTime,11,2);
		$min  = substr($mySQLDateTime,14,2);
		$sec  = substr($mySQLDateTime,17,2);
		
		return date($dateFormat, mktime($hour,$min,$sec,$mon,$day,$year));
	}
	
	/* Conver dd-mm-yyyy format to MySQL DATE fromat */
	function conMySQLDate($date) { 
				
		//$date = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
		$date = date('Y-m-d', strtotime($date));
		return $date;
	}
	
	/* Conver 02/07/2009 00:07:00 format to MySQL DATE fromat */
	function conMySQLDateTime($date) { 
				
		$date = $date = preg_replace('#(\d{2})/(\d{2})/(\d{4})\s(.*)#', '$3-$2-$1 $4', $date);
		return $date;
	}
	




function clean($string) {
   $string = preg_replace('/[^A-Za-z0-9\-]/', ' ', $string); // Removes special chars.
	return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
}
/******************** Count Records *************************/

function countRecords($table, $where=1) {
		$sqlCount = "SELECT count(*) AS numRecords FROM " . $table . " WHERE " . $where;
		if($rsCount = mysql_query($sqlCount)) {
			if($recCount = mysql_fetch_array($rsCount)) {
				return $recCount["numRecords"];
			}
		}
		return FALSE;
	}


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
function summarize($string, $characters) {

	if (strlen($string) > $characters){
		return substr($string, 0, $characters) . "...";
		
	} else {
		return $string;
	}

}

////////////////////////////////////Country List/////////////////////

function categoryOption($catId = '')
{

	 $sql 	 = "SELECT * FROM tbl_category";
	 $result = mysql_query($sql) or die('Cannot get Program ' . mysql_error());
	
	$list = '';
	while($row = mysql_fetch_assoc($result)) {
	
	// build combo box options
	$list .= "<option value='" . $row['cat_id'] ."'";
			if (@$row['cat_id'] == @$catId) {
				$list.= " selected";
			}
			
			$list .= ">" . ucwords($row['cat_tittle']). "</option>\r\n";
	} //end while
	
	return $list;
}


/******************** Count Notifications *************************/
function counts($table, $where='') {
		 $sqlCount = "SELECT count(*) AS numRecords FROM " . $table ." WHERE ". $where;
		if($rsCount = mysql_query($sqlCount)) {
			if($recCount = mysql_fetch_array($rsCount)) {
				if($recCount["numRecords"]!=0){
				
				return $recCount["numRecords"];
				}
				else
				{
					return 0;
					}
			}
		}
		return FALSE;
	}
// City//
function CityOption($cityId = '')
{

	 $sql 	 = "SELECT * FROM tbl_city";
	 $result = mysql_query($sql) or die('Cannot get Program ' . mysql_error());
	
	$list = '';
	while($row = mysql_fetch_assoc($result)) {
	
	// build combo box options
	$list .= "<option value='" . $row['city_id'] ."'";
			if (@$row['city_id'] == @$cityId) {
				$list.= " selected";
			}
			
			$list .= ">" . ucwords($row['city_name']). "</option>\r\n";
	} //end while
	
	return $list;
}	
?>