<?php
class DAL {  
	//public function __construct(){} 
	private $var;
	public $catarr=0;
 	public function connect_db() {
		global $ARR_CFGS;
		if (!isset($GLOBALS['dbcon'])) {
			$GLOBALS['dbcon'] =	mysql_connect($ARR_CFGS["db_host"], $ARR_CFGS["db_user"], $ARR_CFGS["db_pass"]);
			mysql_select_db($ARR_CFGS["db_name"]) or die("Could not connect to database. Please check configuration and ensure MySQL is running.");
		}
	}
	public function db_query_($sql, $dbcon2 = null) {
		if($dbcon2=='') {
			if(!isset($GLOBALS['dbcon'])) {
				$this->connect_db();
			}
			$dbcon2	= $GLOBALS['dbcon'];
		}
		$time_before_sql = $this->checkpoint();
		$result	= mysql_query($sql,	$dbcon2) or	die($this->db_error($sql));
		return $result;
	}
	
	public function db_query($sql, $dbcon2 = null) {
		$sql = str_replace("#_", tb_Prefix, $sql);
		if($dbcon2=='') {
			if(!isset($GLOBALS['dbcon'])) {
				$this->connect_db();
			}
			$dbcon2	= $GLOBALS['dbcon'];
		}
		$time_before_sql = $this->checkpoint();
		$result	= mysql_query($sql,	$dbcon2) or	die($this->db_error($sql));
		return $result;
	}
	
	public function db_fetch_array($rs) {
		$array	= mysql_fetch_array($rs);
		return $array;
	}
	
	
	public function db_scalar($sql, $dbcon2 = null) {
		if($dbcon2=='') {
			if(!isset($GLOBALS['dbcon'])) {
				$this->connect_db();
			}
			$dbcon2	= $GLOBALS['dbcon'];
		}
		$result	= $this->db_query($sql, $dbcon2);
		if ($line =	$this->db_fetch_array($result)) {
			$response =	$line[0];
		}
		return $response;
	}
	
	
	public function getSingleresult($sql, $dbcon2 = null) {
		if($dbcon2=='') {
			if(!isset($GLOBALS['dbcon'])) {
				$this->connect_db();
			}
			$dbcon2	= $GLOBALS['dbcon'];
		}
		$result	=$this->db_query($sql, $dbcon2);
		if ($line =	$this->db_fetch_array($result)) {
			$response =	$line[0];
		}
		return $response;
	}
	public function sqlquery_($rs='exe',$tablename,$arr,$update='',$id='',$update2='',$id2='') {
	
		$sql = $this->db_query_("DESC $tablename");
		$row = mysql_fetch_array($sql);
		if($update == '')
			$makesql = "insert into ";
		else
			$makesql = "update " ;
		$makesql .= "$tablename set ";
	
		$i = 1;
		while($row = mysql_fetch_array($sql)) {
			if(array_key_exists($row['Field'], $arr)) {
	
	
				if($i != 1)
					$makesql .= ", ";
	
				//$makesql .= $row['Field']."='".$this->ms_addslashes((is_array($arr[$row['Field']]))?implode(":",$arr[$row['Field']]):$arr[$row['Field']])."'";
				
				$makesql .= $row['Field']."='".addslashes((is_array($arr[$row['Field']]))?implode(":",$arr[$row['Field']]):$arr[$row['Field']])."'";
				
				
				$i++;
			}
	
		}
		if($update)
			$makesql .= " where ".$update."='".$id."'".(($update2 && $id2)?" and ".$update2."='".$id2."'":"");
		if($rs == 'show') {
			echo $makesql;
			exit;
		}
		else {
			$this->db_query_($makesql);
		}
		return ($update)?$id:mysql_insert_id();
	}
	
	public function sqlquery($rs='exe',$tablename,$arr,$update='',$id='',$update2='',$id2='') {
	
		$sql = $this->db_query("DESC ".tb_Prefix."$tablename");
		$row = mysql_fetch_array($sql);
		if($update == '')
			$makesql = "insert into ";
		else
			$makesql = "update " ;
		$makesql .= tb_Prefix."$tablename set ";
	
		$i = 1;
		while($row = mysql_fetch_array($sql)) {
			if(array_key_exists($row['Field'], $arr)) {
	
	
				if($i != 1)
					$makesql .= ", ";
	
				//$makesql .= $row['Field']."='".$this->ms_addslashes((is_array($arr[$row['Field']]))?implode(":",$arr[$row['Field']]):$arr[$row['Field']])."'";
				
				$makesql .= $row['Field']."='".addslashes((is_array($arr[$row['Field']]))?implode(":",$arr[$row['Field']]):$arr[$row['Field']])."'";
				
				
				$i++;
			}
	
		}
		if($update)
			$makesql .= " where ".$update."='".$id."'".(($update2 && $id2)?" and ".$update2."='".$id2."'":"");
		if($rs == 'show') {
			echo $makesql;
			exit;
		}
		else {
			$this->db_query($makesql);
		}
		return ($update)?$id:mysql_insert_id();
	}
	public function filequery($rs='exe',$tablename,$foldername,$arr,$update='',$id='',$update2='',$id2='') {
		$sp = array_keys($arr);
		$aa = "";
		for($c=0;$c<=(count($sp)-1);$c++) {
			if($arr[$sp[$c]]['name']) {
				$path = $this->bannerup($foldername);
				$sql = $this->db_query("DESC ".tb_Prefix."$tablename");
				$row = mysql_fetch_array($sql);
				if($update == '')
					$makesql = "insert into ";
				else
					$makesql = "update " ;
				$makesql .= tb_Prefix."$tablename set ";
	
				$i = 1;
				while($row = mysql_fetch_array($sql)) {
	
					if($row['Field'] == $sp[$c]) {
						$filename =$this-> uploadFile1($path,$arr[$row['Field']]['name'],$row['Field']);
						if($i != 1)
							$makesql .= ", ";
	
						//$makesql .= $row['Field']."='".$this->ms_addslashes($filename)."'";
						$makesql .= $row['Field']."='".addslashes($filename)."'";
						$i++;
					}
	
				}
				if($update)
					$makesql .= " where ".$update."='".$id."'".(($update2 && $id2)?" and ".$update2."='".$id2."'":"");
				if($rs == 'show') {
					echo $makesql;
					exit;
				}
				else {
					$this->db_query($makesql);
				}
				return ($update)?$id:mysql_insert_id();
			}
		}
	}
	
	public function getSingleresult_($sql, $dbcon2 = null) {
		if($dbcon2=='') {
			if(!isset($GLOBALS['dbcon'])) {
				$this->connect_db();
			}
			$dbcon2	= $GLOBALS['dbcon'];
		}
		$result	=$this->db_query_($sql, $dbcon2);
		if ($line =	$this->db_fetch_array($result)) {
			$response =	$line[0];
		}
		return $response;
	}
	
	
	public function db_error($sql) {
		echo "<div style='font-family: tahoma; font-size: 11px; color: #333333'><br>".mysql_error()."<br>";
		$this->print_error();
		if(LOCAL_MODE) {
			echo "<br>sql: $sql";
		}
		echo "</div>";
	}
	
	public function print_error() {
		$debug_backtrace = debug_backtrace();
		for ($i = 1; $i < count($debug_backtrace); $i++) {
			$error = $debug_backtrace[$i];
			echo "<br><div><span>File:</span> ".str_replace(SITE_FS_PATH, '',$error['file'])."<br><span>Line:</span> ".$error['line']."<br><span>Function:</span> ".$error['function']."<br></div>";
		}
	}
	
	
	public function mysql_time($hour, $minute,	$ampm) {
		if ($ampm == 'PM' && $hour != '12') {
			$hour += 12;
		}
		if ($ampm == 'AM' && $hour == '12') {
			$hour =	'00';
		}
		$mysql_time	= $hour	. ':' .	$minute	. ':00';
		return $mysql_time;
	}
	
	
	public function price_format($price) {
		if ($price != '' &&	$price != '0') {
			$price = number_format($price, 0); 
			return CUR.$price;
		}
	}
	
	
	public function opin_date_format($date) {
		if (strlen($date) >= 10) {
			if ($date == '0000-00-00 00:00:00' || $date	== '0000-00-00') {
				return '';
			}
			$mktime	= mktime(0,	0, 0, substr($date,	5, 2), substr($date, 8,	2),	substr($date, 0, 4));
			return date("M j, Y", $mktime);
		} else {
			return $s;
		}
	}
	public function dateshow($time,$format='F j,Y'){
		return date($format,$time);
	}
	
	
	public function datetime_format($date) {
		global $arr_month_short;
		if (strlen($date) >= 10) {
			if ($date == '0000-00-00 00:00:00' || $date	== '0000-00-00') {
				return '';
			}
			$mktime	= mktime(substr($date, 11, 2), substr($date, 14, 2), substr($date, 17, 2),substr($date,	5, 2), substr($date, 8,	2),	substr($date, 0, 4));
			return date("M j, Y h:i A ", $mktime);
		} else {
			return $s;
		}
	}
	
	
	public function time_format($time) {
		if (strlen($time) >= 5) {
			$hour =	substr($time, 0, 2);
			$hour =	str_pad($hour, 2, "0", STR_PAD_LEFT);
	
			return $hour . ':' . substr($time, 3, 2) . ' ' . $ampm;
		} else {
			return $s;
		}
	}
	
	
	public function ms_print_r($var) {
		//if(LOCAL_MODE || $_SESSION['debug']){
		echo "<textarea rows='10' cols='148' style='font-size: 11px; font-family: tahoma'>";
		print_r($var);
		echo "</textarea>";
		//}
	}
	
	
	public function ms_form_value($var) {
		return is_array($var) ? array_map('ms_form_value', $var) : htmlspecialchars(stripslashes(trim($var)));
	}
	
	
	public function ms_display_value($var) {
		return is_array($var) ? array_map('ms_display_value', $var) : nl2br(htmlspecialchars(stripslashes(trim($var))));
	}
	
	public function ms_adds($var) {
		return trim(addslashes(stripslashes($var)));
	}
	
	
	public function ms_stripslashes($var) {
		return is_array($var) ? array_map('ms_stripslashes', $var) : stripslashes(trim($var));
	}
	
	
	public function ms_addslashes($var) {
		//return is_array($var) ? array_map('ms_addslashes', $var) : addslashes(stripslashes(trim($var)));
		//return addslashes(stripslashes(trim($var)));
	}
	
	
	public function ms_trim($var) {
		return is_array($var) ? array_map('ms_trim', $var) : trim($var);
	}
	
	public function is_image_valid($file_name) {
		global $ARR_VALID_IMG_EXTS;
		$ext = file_ext($file_name);
		if (in_array($ext, $ARR_VALID_IMG_EXTS)) {
			return true;
		} else {
			return false;
		}
	}
	
	
	public function getmicrotime() {
		list($usec,	$sec) =	explode(" ", microtime());
		return ((float)$usec + (float)$sec);
	}
	
	
	public function file_ext($file_name) {
		$path_parts = pathinfo($file_name);
		$ext = strtolower($path_parts["extension"]);
		return $ext;
	}
	
	
	public function blank_filter($var) {
		$var = trim($var);
		return ($var != '' && $var != '&nbsp;');
	}
	
	
	public function apply_filter($sql,	$field,	$field_filter, $column) {
		if (!empty($field)) {
			if ($field_filter == "=" || $field_filter == "") {
				$sql = $sql	. "	and	$column	= '$field' ";
			} else if ($field_filter == "like") {
				$sql = $sql	. "	and	$column	like '%$field%'	";
			} else if ($field_filter ==	"starts_with") {
				$sql = $sql	. "	and	$column	like '$field%' ";
			} else if ($field_filter ==	"ends_with") {
				$sql = $sql	. "	and	$column	like '%$field' ";
			} else if ($field_filter ==	"not_contains") {
				$sql = $sql	. "	and	$column	not	like '%$field%'	";
			} else if ($field_filter == ">") {
				$sql = $sql . " and $column > '$field' ";
			} else if ($field_filter == "<") {
				$sql = $sql . " and $column < '$field' ";
			} else if ($field_filter ==	"!=") {
				$sql = $sql	. "	and	$column	!= '$field'	";
			}
		}
		return $sql;
	}
	
	public function filter_dropdown($name	= 'filter',	$sel_value) {
		$arr = array( "like" => 'Contains', '=' => 'Is', "starts_with" => 'Starts with', "ends_with"	=> 'Ends with', "!=" => 'Is not' , "not_contains" => 'Not contains');
		return $this->array_dropdown($arr, $sel_value, $name);
	}
	
	
	public function move_up($table_name, $where_clause_all, $where_clause_item, $sort_order, $move_by) {
		$dest_order	= $sort_order -	$move_by;
		// $arr_ids_to_move=Array();
		// echo	"<br>$movie_artist_id, $movie_id, $artistcate_id, $sort_order, $move_by, $dest_order<br>";
		for($i = $sort_order-1;	$i > $dest_order-1;	$i--) {
			$sql = " update	$table_name	set	sort_order=sort_order+1	where $where_clause_all	and	sort_order='$i'";
			// echo	"<br>$sql<br>";
			$this->db_query($sql);
		}
		$sql = " update	$table_name	set	sort_order=sort_order-$move_by where $where_clause_item";
		// echo	"<br>$sql<br>";
		$this->db_query($sql);
	}
	
	
	public function move_down($table_name,	$where_clause_all, $where_clause_item, $sort_order,	$move_by) {
		$dest_order	= $sort_order +	$move_by;
		// $arr_ids_to_move=Array();
		// echo	"<br>$movie_artist_id, $movie_id, $artistcate_id, $sort_order, $move_by, $dest_order<br>";
		for($i = $sort_order + 1; $i < $dest_order + 1;	$i++) {
			$sql = " update	$table_name	set	sort_order=sort_order-1	where $where_clause_all	and	sort_order='$i'	";
			// echo	"<br>$sql<br>";
			$this->db_query($sql);
		}
		$sql = " update	$table_name	set	sort_order=sort_order+$move_by where $where_clause_item";
		// echo	"<br>$sql<br>";
		$this->db_query($sql);
	}
	
	// refine_list: Updated 31 may 2006
	public function refine_list($id_column, $table_name, $where_clause) {
		$sql = " select	$id_column,	sort_order from	$table_name	where $where_clause	order by sort_order";
		// echo	"<br>$sql<br>";
		$result	= $this->db_query($sql);
		$i = 1;
		while ($line = mysql_fetch_array($result)) {
			$sql = " update	$table_name	set	sort_order='$i'	where $id_column='$line[0]'";
			// echo	"<br>$sql<br>";
			$this->db_query($sql);
			$i++;
		}
	}
	
	
	public function make_url($url) {
		$parsed_url	= parse_url($url);
		if ($parsed_url['scheme'] == '') {
			return 'http://' . $url;
		} else {
			return $url;
		}
	}
	
	public function url($url, $dir='') {
		return SITE_PATH.(($dir)?$dir."/":'').$url.".html";
	}
	public function folder($url) {
		//$bodytag = str_replace(" ", "-", strtolower($url));
		//$bodytag = str_replace(" ", "-", $url);
		return $url;
	}
	public function onclickurl($url, $dir='') {
		return "onClick=\"location.href='".SITE_PATH.(($dir)?$dir."/":'').$url.".html'\"";
	}
	
	public function url2($url, $dir='') {
		return SITE_PATH.(($dir)?$dir."/":'').$url;
	}
	public function ms_mail($to, $subject, $message, $arr_headers= array()) {
		$str_headers = '';
		foreach($arr_headers as $name=>$value) {
			$str_headers .= "$name: $value\n";
		}
		@mail($to, $subject, $message, $str_headers);
		return true;
	}
	
	// make_thumb_im
	public function make_thumb_im($file_path, $arr_options) {
		$width		= $arr_options['width'];
		$height		= $arr_options['height'];
		$prefix		= $arr_options['prefix'];
		$target_dir	= $arr_options['target_dir'];
		$quality	= $arr_options['quality'];
	
		$path_parts = pathinfo($file_path);
	
		if($width=='') {
			$width = '120';
		}
	
		if($prefix=='') {
			$prefix = 'thumb_';
		}
		if($target_dir=='') {
			$target_dir = $path_parts["dirname"];
		}
	
		if($quality=='') {
			$quality = '70';
		}
	
		$size = @getimagesize($file_path);
		if($size=='') {
			return false;
		}
		$path_parts = pathinfo($file_path);
	
		$thumb_path="$target_dir/".$prefix.$path_parts["basename"];
	
		$cmd ="convert -resize ".$width.'x'." -quality $quality \"$file_path\" \"$thumb_path\" ";
		system($cmd);
		//echo("<br>$cmd");
		return $prefix.$path_parts["basename"];
	}
	
	
	public function date_to_mysql($date) {
		list($month, $day, $year) = explode('/', $date);
		return "$year-$month-$day";
	}
	
	
	public function export_delimited_file($sql, $arr_columns, $file_name='', $arr_substitutes='', $arr_tpls='' ) {
		if($file_name=='') {
			$file_name = time().'.txt';
		}
		header("Content-type: application/txt");
		header("Content-Disposition: attachment; filename=$file_name");
		$arr_db_cols= array_keys($arr_columns);
		$arr_headers= array_values($arr_columns);
		$str_columns = implode(',', $arr_db_cols);
		$sql= "select ".$str_columns." $sql" ;
	
		$result = $this->db_query($sql);
		$num_cols = count($arr_columns);
		//$i=0;
	
		foreach($arr_headers as $header) {
			//$i++;
			echo $header."\t";
			//if($i!=$num_cols){
			//	echo "\t";
			//}
		}
		while($line=mysql_fetch_array($result, MYSQL_ASSOC)) {
			echo "\r\n";
			//echo("<br> ");
			foreach($line as $key => $value) {
				$value=str_replace("\n","",$value);
				$value=str_replace("\r","",$value);
				$value=str_replace("\t","",$value);
				if(is_array($arr_substitutes[$key])) {
					$value = $arr_substitutes[$key][$value];
				}
				if(isset($arr_tpls[$key])) {
					$code = str_replace('{1}', $value, $arr_tpls[$key]);
					//echo ("\$value = $code;");
					//echo("<br>");
					eval ("\$value = $code;");
				}
				echo $value."\t";
			}
		}
	}
	
	// to check how much time is lapsed before first call of this public function
	public function checkpoint($from_start = false) {
		global $PREV_CHECKPOINT;
		if($PREV_CHECKPOINT=='') {
			$PREV_CHECKPOINT = SCRIPT_START_TIME;
		}
		$cur_microtime = $this->getmicrotime();
	
		if($from_start) {
			return $cur_microtime - SCRIPT_START_TIME;
		} else {
			$time_taken = $cur_microtime - $PREV_CHECKPOINT;
			$PREV_CHECKPOINT = $cur_microtime;
			return $time_taken;
		}
	}
	
	
	public function readable_col_name($str) {
		return ucwords( str_replace('_', ' ', strtolower($str) ) );
	}
	
	
	public function ms_echo($str) {
		if(LOCAL_MODE) {
			echo($str);
		}
	}
	
	
	public function make_dropdown($sql, $sel_value =	'',	$combo_name, $extra = '', $choose_one = '') {
	
		$result	= $this->db_query($sql);
		if (mysql_num_rows($result)	> 0) {
			$str_dropdown = "<select name='$combo_name' id='$combo_name' $extra>";
			if(is_array($choose_one)) {
				foreach($choose_one as $key => $value) {
					$str_dropdown .= "<option value='$key '>$value</option>";
				}
			} else if ($choose_one	!= '') {
				$str_dropdown .= "<option value=''>$choose_one</option>";
			}
			while	($line = mysql_fetch_array($result)) {
				// if($css== "opt1"){ $css='opt2';}else{$css='opt1';};
				$str_dropdown .= "<option value=\"" . $this->ms_form_value($line[0]) . "\"";
				if(is_array($sel_value)) {
					if (in_array($line[0], $sel_value )) {
						$str_dropdown .= " selected ";
					}
				} else {
					if (trim($sel_value) == $line[0]) {
						$str_dropdown .= " selected='selected' ";
					} else {
						$str_dropdown .= "";
					}
				}
				$str_dropdown .= ">" .	$line[1] . "</option>";
			}
			$str_dropdown .= "</select>";
		}
		return $str_dropdown;
	}
	
	
	public function array_dropdown( $arr, $sel_value='', $name='', $extra='', $choose_one='', $arr_skip= array()) {
		$combo="<select name='$name' id='$name' $extra >";
		if($choose_one!='') {
			$combo.="<option value=\"\">$choose_one</option>";
		}
		foreach($arr as $key => $value) {
			if(is_array($arr_skip) && in_array($key, $arr_skip)) {
				continue;
			}
			$combo.='<option value="'.htmlspecialchars($key).'"';
			if(is_array($sel_value)) {
				if(in_array($key, $sel_value) || in_array(htmlspecialchars($key), $sel_value)) {
					$combo.=" selected ";
				}
			} else {
				if($sel_value==$key || $sel_value==htmlspecialchars($key)) {
					$combo.=" selected ";
				}
			}
			$combo.=" >$value</option>";
		}
		$combo.=" </select>";
		return $combo;
	}
	public function make_checkboxes($arr_tmp, $checkname, $checksel = '', $cols,	$missit, $style	= '', $tableattr = '') {
		if ($style != "") {
			$style = "class='" . $style	. "'";
		}
	
		$colwidth =	100	/ $cols;
		$colwidth =	round($colwidth, 2);
		$j = 0;
		/*
		$arr_tmp['Any']="Any";
		if($checksel==''){
			$checksel=Array("Any");
		}
		*/
		if(is_array($arr_tmp) && count($arr_tmp)) {
			foreach($arr_tmp as	$key =>	$value) {
				$tochecked = "";
				if (is_array($checksel)	&& in_array($key, $checksel)) {
					$tochecked = "checked";
				}
				if ($key !=	$missit) {
					if ($value != "") {
						if ($j == 0) {
							$checkstr .= "<table $tableattr><tr>\n";
						} else if (($j % $cols)	== 0) {
							$checkstr .= "</tr><tr>\n";
						}
						$checkstr .= "<td valign=top><INPUT TYPE='checkbox' $javascript	 NAME='$checkname" . '[]' .	"' value='$key'	$tochecked ></td><td $style nowrap> $value	</td>\n";
						$j++;
					}
				}
			}
			$j--;
			// echo	"$cols-($j%$cols)=".$cols-($j%$cols);
			// echo	"<BR>($j%$cols)=".($j%$cols);
			for($x = $j	% $cols;$x < 4;$x++) {
				if ($x != 3) {
					$checkstr .= "<td>&nbsp;</td>\n";
				} else {
					$checkstr .= "<td>&nbsp;</td></tr>\n";
				}
			}
			$checkstr .= "</table>";
		}
		return $checkstr;
	}
	
	
	public function make_radios($arr_tmp, $checkname, $checksel = '', $cols,	$missit, $style	= '', $tableattr = '') {
		if ($style != "") {
			$style = "class='" . $style	. "'";
		}
	
		$colwidth =	100	/ $cols;
		$colwidth =	round($colwidth, 2);
		$j = 1;
		/*
		$arr_tmp['Any']="Any";
		if($checksel==''){
			$checksel=Array("Any");
		}
		*/
		foreach($arr_tmp as	$key =>	$value) {
			$tochecked = "";
			if ($checksel == $key) {
				$tochecked = "checked";
			}
			if ($key !=	$missit) {
				if ($value != "") {
					if ($j == 1) {
						$checkstr .= "<table $tableattr><tr>\n";
					} else if (($j % $cols)	== 1) {
						$checkstr .= "</tr><tr>\n";
					}
					$checkstr .= "<td width='" . $colwidth . "%' $style	valign=top><INPUT TYPE='radio' $javascript	 NAME='$checkname' value='$key'	$tochecked	   > $value	</td>\n";
					$j++;
				}
			}
		}
		$j--;
		// echo	"$cols-($j%$cols)=".$cols-($j%$cols);
		// echo	"<BR>($j%$cols)=".($j%$cols);
		for($x = $j	% $cols;$x < 4;$x++) {
			if ($x != 3) {
				$checkstr .= "<td>&nbsp;</td>\n";
			} else {
				$checkstr .= "<td>&nbsp;</td></tr>\n";
			}
		}
		$checkstr .= "</table>";
		return $checkstr;
	}
	
	
	 
	
	
 
	
	
   
	
	
	public function get_qry_str($over_write_key = array(),	$over_write_value =	array()) {
		global $_GET;
		$m = $_GET;
		if (is_array($over_write_key)) {
			$i = 0;
			foreach($over_write_key	as $key) {
				$m[$key] = $over_write_value[$i];
				$i++;
			}
		} else {
			$m[$over_write_key]	= $over_write_value;
		}
		$qry_str = $this->qry_str($m);
		return $qry_str;
	}
	
	
	public function qry_str($arr, $skip = '') {
		$s = "?";
		$i = 0;
		foreach($arr as	$key =>	$value) {
			if ($key !=	$skip) {
				if (is_array($value)) {
					foreach($value as $value2) {
						if ($i == 0) {
							$s .= $key . '[]=' . $value2;
							$i = 1;
						} else {
							$s .= '&' .	$key . '[]=' . $value2;
						}
					}
				} else {
					if ($i == 0) {
						$s .= "$key=$value";
						$i = 1;
					} else {
						$s .= "&$key=$value";
					}
				}
			}
		}
		return $s;
	}
	
	
	public function check_radio($s, $s2) {
		if (is_array($s2)) {
			// echo("<br>$s");
			// print_r($s2);
			if (in_array($s, $s2)) {
				return " checked ";
			}
		} else if ($s == $s2) {
			return " checked ";
		}
	}
	

	
	public function is_post_back() {
		if(count($_POST)>0) {
			return true;
		} else {
			return false;
		}
	
	}
	
	
	public function request_to_hidden($arr_skip='') {
		foreach($_REQUEST as $name => $value) {
			$s .= '<input type="hidden" name="'.$name.'" value="'.htmlspecialchars(stripslashes($value)).'">'."\n";
		}
		return $s;
	}
	
	public function sql_to_array_file($arr_name, $sql, $file, $full_table=false) {
		$str = "<?\n";
		$result = $this->db_query($sql);
		while ($line = mysql_fetch_array($result)) {
			//$line = $this->ms_addslashes($line);
			$line = addslashes($line);
			if($full_table) {
				$key = $line[0];
				foreach($line as $name=>$value) {
					if(!is_numeric($name)) {
						$str .= '$'.$arr_name."['".$key."']['".$name."'] = '".$value."';\n";
					}
				}
				$str .= "\n";
			} else {
				$str .= '$'.$arr_name."['".$line[0]."'] = '".$line[1]."';\n";
			}
		}
		$str .= "\n?>";
	
		$fh = fopen($file, 'w');
		fwrite($fh, $str);
		fclose($fh);
		return true;
	}
	
	
	public function array_radios($arr, $sel_value = '', $name = '', $cols = 3, $extra = '') {
		if ($style != "") {
			$style = "class='" . $style . "'";
		}
	
		$colwidth = 100 / $cols;
		$colwidth = round($colwidth, 2);
		$j = 1;
		foreach($arr as $key => $value) {
			$tochecked = "";
			if (is_array($sel_value) && in_array($key, $sel_value)) {
				$tochecked = "checked";
			}
			if ($key != $missit) {
				if ($value != "") {
					if ($j == 1) {
						$checkstr .= "<table $tableattr><tr>\n";
					} else if (($j % $cols) == 1 || $cols==1) {
						$checkstr .= "</tr><tr>\n";
					}
	
					$checkstr .= "<td width='" . $colwidth . "%' $style valign=top><INPUT TYPE='radio' $javascript  NAME='$name' value='$key' $tochecked     > $value </td>\n";
					$j++;
				}
			}
		}
		$j--;
		for($x = $j % $cols;$x < 4;$x++) {
			if ($x != 3) {
				$checkstr .= "<td>&nbsp;</td>\n";
			} else {
				$checkstr .= "<td>&nbsp;</td></tr>\n";
			}
		}
		$checkstr .= "</table>";
		return $checkstr;
	} 
	
	
	public function make_thumb_gd($imgPath, $destPath, $newWidth, $newHeight, $ratio_type = 'width', $quality = 70, $verbose = false) {
		$size = getimagesize($imgPath);
		if (!$size) {
			if ($verbose) {
				echo "Unable to read image info.";
			}
			return false;
		}
		$curWidth	= $size[0];
		$curHeight	= $size[1];
		$fileType	= $size[2];
	
		// width/height ratio
		$ratio =  $curWidth / $curHeight;
		$thumbRatio = $newWidth / $newHeight;
	
		$srcX = 0;
		$srcY = 0;
		$srcWidth = $curWidth;
		$srcHeight = $curHeight;
	
		if($ratio_type=='width_height') {
			$tmpWidth	= $newHeight * $ratio;
			if($tmpWidth > $newWidth) {
				$ratio_type='width';
			} else {
				$ratio_type='height';
			}
		}
	
	
		if($ratio_type=='width') {
			// If the dimensions for thumbnails are greater than original image do not enlarge
			if($newWidth > $curWidth) {
				$newWidth = $curWidth;
			}
			$newHeight	= $newWidth / $ratio;
		} else if($ratio_type=='height') {
			// If the dimensions for thumbnails are greater than original image do not enlarge
			if($newHeight > $curHeight) {
				$newHeight = $curHeight;
			}
			$newWidth	= $newHeight * $ratio;
		} else if($ratio_type=='crop') {
			if($ratio < $thumbRatio) {
				$srcHeight = round($curHeight*$ratio/$thumbRatio);
				$srcY = round(($curHeight-$srcHeight)/2);
			} else {
				$srcWidth = round($curWidth*$thumbRatio/$ratio);
				$srcX = round(($curWidth-$srcWidth)/2);
			}
		} else if($ratio_type=='distort') {
		}
	
		// create image
		switch ($fileType) {
			case 1:
				if (function_exists("imagecreatefromgif")) {
					$originalImage = imagecreatefromgif($imgPath);
				} else {
					if ($verbose) {
						echo "GIF images are not support in this php installation.";
						return false;
					}
				}
				$fileExt = 'gif';
				break;
			case 2:
				$originalImage = imagecreatefromjpeg($imgPath);
				$fileExt = 'jpg';
				break;
			case 3:
				$originalImage = imagecreatefrompng($imgPath);
				$fileExt = 'png';
				break;
			default:
				if ($verbose) {
					echo "Not a valid image type.";
				}
				return false;
		}
		// create new image
	
		$resizedImage = imagecreatetruecolor($newWidth, $newHeight);
		//echo "$srcX, $srcY, $newWidth, $newHeight, $curWidth, $curHeight";
		//echo "<br>$srcX, $srcY, $newWidth, $newHeight, $srcWidth, $srcHeight<br>";
		imagecopyresampled($resizedImage, $originalImage, 0, 0, $srcX, $srcY, $newWidth, $newHeight, $srcWidth, $srcHeight);
		imageinterlace($resizedImage, 1);
		switch ($fileExt) {
			case 'gif':
				imagegif($resizedImage, $destPath, $quality);
				break;
			case 'jpg':
				imagejpeg($resizedImage, $destPath, $quality);
				break;
			case 'png':
				imagepng($resizedImage, $destPath, $quality);
				break;
		}
		// return true if successfull
		return true;
	} 
	
	// show_thumb
	public function show_thumbOld($file_org, $width, $height, $ratio_type = 'width') {
		$path_parts = pathinfo($file_org);
		/*$file_name = str_replace(SITE_WS_PATH."/", "", $file_org);
		$file_name = str_replace("/", "^", $file_name);
		$cache_file = $width."x".$height.'__'.$ratio_type .'__'.$file_name;
	
		$file_fs_path = str_replace(SITE_WS_PATH, SITE_FS_PATH, $file_org);*/
		//$file_fs_path = str_replace(SITE_WS_PATH, SITE_FS_PATH, $file_org);
	
		$file_name = $path_parts['basename'];
		$file_name = str_replace("/", "^", $file_name);
		$cache_file = $width."x".$height.'__'.$ratio_type .'__'.$file_name;
		if(!is_file($path_parts['dirname']."/".$cache_file)) {
			$this->make_thumb_gd($file_org, $path_parts['dirname']."/".$cache_file, $width, $height, $ratio_type );
	
		}
		return $path_parts['dirname']."/".$cache_file;
	}
	
	public function show_thumb($file_org, $width, $height, $ratio_type = 'width') {
		$file_name = str_replace(SITE_WS_PATH."/", "", $file_org);
		$file_name = str_replace("/", "^", $file_name);
		$cache_file = $width."x".$height.'__'.$ratio_type .'__'.$file_name;
	
		$file_fs_path = str_replace(SITE_WS_PATH, SITE_FS_PATH, $file_org);
		if(!is_file(SITE_FS_PATH."/".THUMB_CACHE_DIR."/".$cache_file)) {
			$this->make_thumb_gd($file_fs_path, SITE_FS_PATH."/".THUMB_CACHE_DIR."/".$cache_file, $width, $height, $ratio_type );
		}
		return SITE_WS_PATH.THUMB_CACHE_DIR."/".$cache_file;
	}
	// ms_parse_keywords: Updated 31 may 2006
	// Temporary function. Need to be made more elegant or replace with regular expression
	public function ms_parse_keywords($keywords) {
		$arr_keywords = array();
		$dq_end =true;
		$sp_end = true;
		for ($i=0;$i<strlen($keywords);$i++) {
			//echo "<br>cur_token:$cur_token, cur_keyword:$cur_keyword, dq_start:$dq_start, dq_end:$dq_end, sp_start:$sp_start, sp_end:$sp_end,";
			$cur_token = $keywords[$i];
			if($cur_token=='"') {
				if($dq_start) {
					$dq_end = true;
					$dq_start = false;
					$arr_keywords[] = $cur_keyword;
					$cur_keyword = '';
				} else if($dq_end) {
					$dq_end = false;
					$dq_start = true;
					$sp_start = false;
				} else {
					$dq_end = false;
					$dq_start = true;
				}
			} else if($cur_token==' ') {
				if($sp_start || $dq_end) {
					$sp_end = true;
					$sp_start = false;
					$arr_keywords[] = $cur_keyword;
					$cur_keyword = '';
				} else if($sp_end && !$dq_start) {
					$sp_end = false;
					$sp_start = true;
				} else if($dq_start) {
					$cur_keyword .= $cur_token;
				}
			} else {
				$cur_keyword .= $cur_token;
			}
		}
	
		$arr_keywords[] =$cur_keyword;
		return $arr_keywords;
	}
	
	
	// pagesize_dropdown
	public function pagesize_dropdown($name, $value) {
		$arr = array('1'=>'1','10'=>'10','25'=>'25','50'=>'50','100'=>'100');
		$m = $_GET;
		unset($m['pagesize']);
		return $this->array_dropdown($arr, $value , $name, '  onchange="location.href=\''.$_SERVER['PHP_SELF'].qry_str($m).'&pagesize=\'+this.value" ');
	}
	
	// sql_to_assoc_array
	public function sql_to_assoc_array($sql) {
		$arr = array();
		$result = $this->db_query($sql);
		while ($line = mysql_fetch_array($result)) {
			$line = $this->ms_form_value($line);
			$arr[$line[0]] = $line[1];
		}
		return $arr;
	}
	
	
	// sql_to_index_array
	public function sql_to_index_array($sql) {
		$arr = array();
		$result = $this->db_query($sql);
		while ($line = mysql_fetch_array($result)) {
			$line = $this->ms_form_value($line);
			$arr[] = $line[0];
		}
		return $arr;
	}
	
	// sql_to_array
	public function sql_to_array($sql) {
		$arr = array();
		$result = $this->db_query($sql);
		while ($line = mysql_fetch_array($result)) {
			$line = $this->ms_form_value($line);
			array_push($arr, $line);
		}
		return $arr;
	}
	
	
	public function qry_str_to_hidden($str) {
		$fields='';
		if(substr($str,0,1)=='?') {
			$str = substr($str,1);
		}
		$arr = explode('&', $str);
		foreach($arr as $pair) {
			list($name, $value) = explode('=',$pair);
			if($name!='') {
				$fields.='<input type="hidden" name="'.$name.'" id="'.$name.'" value="'.$value.'" />';
			}
		}
		return $fields;
	}
	
	// enum_to_array
	
	public function enum_to_array($table, $column) {
		$result = $this->db_query("show fields from $table");
		while ($line_raw = mysql_fetch_assoc($result)) {
			$line = $this->ms_display_value($line_raw);
			if($line['Field']==$column) {
				$Type = $line['Type'];
				$Type = substr($Type,6,-2);
				$arr_tmp = explode("','", $Type);
				foreach($arr_tmp as $val) {
					$arr[$val]=$val;
				}
				return $arr;
			}
		}
	}
	
	public function redir($url,$inpage=0) {
		if($inpage==0) {
			header('location: '.$url) or die("Cannot Send to next page");
			exit;
		}
		else {
			echo '
			<script type="text/javascript">
			<!--
			window.location.href="'.$url.'";
			-->
			</SCRIPT>'
			;
			exit;
		}
	}
			
	public function getFilename($filename) {
		$uniq = uniqid("");
		$arr=explode('.',$filename);
		$ext = $arr[count($arr)-1];
	
		$allowed = "/[^a-z0-9\\_]/i";
		$arr[0] = preg_replace($allowed,"",$arr[0]);
	
		$filename=$uniq.$arr[0]."_.".$ext;
	
		return $filename;
	}
	public function getextention($fname){
		$fext=explode(".",$fname);
		$ext=$fext[count($fext)-1];
		return $ext;
	}
	
	public  function checkpath($PATH){
		if(!is_dir($PATH)){
			mkdir($PATH,0777);
		}
	}
	public function uploadFile($PATH,$FILENAME,$FILEBOX){
		global $temp_file; 
		$this->checkpath($PATH);
		$PATH = $PATH.'/';
		$ext = strtolower($this->getextention($FILENAME));
		$FILENAME_= time()."_".mt_rand(1,1000);
		$temp_file = SITE_FS_PATH."/".THUMB_CACHE_DIR."/".$FILENAME_;
		if (isset($_FILES[$FILEBOX])){
			switch($_FILES[$FILEBOX]['type']){
				case "image/png":
					$file = $temp_file.".".$ext;
					$FILENAME = $FILENAME_.".jpg";
					move_uploaded_file($_FILES[$FILEBOX]['tmp_name'], $file);
					$imageObject = imagecreatefrompng($file);
					imagejpeg($imageObject,$PATH.$FILENAME);
					unlink($file);
					//imagedestroy($imageObject);
					break;
				case "image/gif":
					$file = $temp_file.".".$ext;
					$FILENAME = $FILENAME_.".jpg";
					move_uploaded_file($_FILES[$FILEBOX]['tmp_name'], $file);
					$imageObject = imagecreatefromgif($file);
					imagejpeg($imageObject,$PATH.$FILENAME);
					unlink($file);
					//imagedestroy($imageObject);
					break; 
				case "image/bmp":
					$file = $temp_file.".".$ext;
					$FILENAME = $FILENAME_.".jpeg";
					move_uploaded_file($_FILES[$FILEBOX]['tmp_name'], $file);
					$imageObject = imagecreatefromwbmp($file);
					imagejpeg($imageObject,$PATH.$FILENAME);
					unlink($file);
					//imagedestroy($imageObject);
					break; 
				default:
					$file = $PATH.$FILENAME_.".".$ext;
					$FILENAME = $FILENAME_.".".$ext;
					move_uploaded_file($_FILES[$FILEBOX]['tmp_name'], $file);	
			}
		}	
		return $FILENAME;
	}
	public function storeImage1($tmp_name, $filename, $path, $type, $typeid, $name='Main') {
		$filename = $this->getFilename($filename);
		$PATH = $path.'/';
		list($wi,$hi)=getimagesize($tmp_name);

		$this->db_query("insert into ".tb_Prefix."images set id='', name='$name', type='$type', type_id='$typeid', path= '$filename', status='Active'");
	}
	
	public function storeImage($tmp_name, $filename, $path, $type, $typeid, $name='Main') {
		$filename = $this->getFilename($filename);
		$PATH = $path.'/';
		list($wi,$hi)=getimagesize($tmp_name);
		$this->sqlquery("rs","pages",array($name=>$filename),'page_id',$typeid);
	}
	
	public function showimg($type,$id,$fol,$imgid='') {
		$nn = $fol;
		if($imgid)
			$wh = " and name='".$imgid."'";
		$img = $this->getSingleresult("select path from ".tb_Prefix."images where type='".$type."' and type_id='".$id."'".$wh);
		if($img != '' && file_exists($nn.'/'.$img)) {
			return $nn.'/'.$img;
		}
		else {
			return "images/noimgbig.gif";
		}
	}
	
	public function showmess(){  
		   if($_SESSION['sessmsg'] && $_SESSION['type']){
		   if($_SESSION['type']=='s'){ $conds = 'background-color: green;';}else{$conds = 'background-color: rgba(202, 0, 0, 0.94);';}
				$prnt =  '<div style="width: 100%;color: #fff; padding: 10px; font-size: 14px; '.$conds.'">'.$_SESSION['sessmsg'].'</div>';
				echo $prnt;
				$_SESSION['sessmsg'] = '';
				$_SESSION['type'] = '';
				unset($_SESSION['sessmsg']);
				unset($_SESSION['type']);
		   } 
	}
	public function sessset($val,$cond){
		$_SESSION['sessmsg'] = $val;
		$_SESSION['type'] = $cond;
	}
	public function alt($val){
		return 'alt="'.$val.'" title="'.$val.'"';
	}
	
	public function sendmail($to, $subject, $message, $fname='', $femail=''){
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: '.(($fname)?$fname:$this->getSingleresult("select company from #_setting where `id`='1'")).' <'.(($femail)?$femail:$this->getSingleresult("select email from #_setting where `id`='1'")).'>' . "\r\n";
		@mail($to, $subject, $message, $headers);
	}
	public function  sform($vals=''){
		return '<form method="post" enctype="multipart/form-data" name="aforms" action=""  '.$vals.'>';
	}
	
	public function  eform(){
		return '</form>';
	}
	public function pageinfo($page){
		$pageInfo = array();
		$pageInfo[title] = $this->get_static_content('meta_title',$page);
		$pageInfo[keyword] = $this->get_static_content('meta_keyword',$page);
		$pageInfo[description] = $this->get_static_content('meta_description',$page);
		$pageInfo[heading] = $this->get_static_content('heading',$page);
		$pageInfo[body] = $this->get_static_content('body',$page);
		//$pageInfo[pimage] = $this->get_static_content('pimage',$page);
		return $pageInfo;
	}

	public function get_static_content($key,$pname){
		return $rs = $this->db_scalar("select ".$key." from #_pages where url='$pname'");
	}
	
	public function cal($fld,$val="",$class='', $frmt='yyyy/mm/dd'){
	  return '<input type="text" value="'.(($val)?$val:'').'" class="'.$class.'" readonly name="'.$fld.'" onclick="displayCalendar(document.forms[0].'.$fld.',\''.$frmt.'\',this)"/><div id="debug"></div>';
		
	}
	public function ptr($key){
		$key1 = str_replace("<p>","", $key);
		$rs = str_replace("</p>","", $key1);
		$rs = str_replace("<span>","", $rs);
		$rs = str_replace("</span>","", $rs);
		return $rs;
	}
 
	 
 function getDiscountPercent($actprice, $disPricwe)
	{
	if(!$actprice) return 0; 
	if(!$disPricwe) return 0;
	$diff  =  $actprice - $disPricwe;
	$per = ceil(($diff*100)/$actprice);
	return $per; 
	}
	public function imgthumb($imgpath,$h,$w){  
			$image = imagecreatefromjpeg($imgpath); 
			//get image dimension
			$dim=getimagesize($imgpath); 
			//create empty image
			$thumb_image=imagecreatetruecolor($w, $h); 
			//Resize original image and copy it to thumb image
			imagecopyresampled($thumb_image, $image, 0, 0, 0, 0,
								$w, $h, $dim[0], $dim[1]); 
			//display thumb image
			return imagejpeg($thumb_image);
	}
	public function make_thumb($src, $dest, $desired_width,$desired_height) {

	/* read the source image */
	$source_image = imagecreatefromjpeg($src);
	$width = imagesx($source_image);
	$height = imagesy($source_image);
	
	/* find the "desired height" of this thumbnail, relative to the desired width  */
	//$desired_height = floor($height * ($desired_width / $width));
	
	/* create a new, "virtual" image */
	$virtual_image = imagecreatetruecolor($desired_width, $desired_height);
	
	/* copy source image at a resized size */
	imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
	
	/* create the physical thumbnail image to its destination */
	imagejpeg($virtual_image, $dest);
	}
	public function geturl(){
		$pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
		if ($_SERVER["SERVER_PORT"] != "80")
		{
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} 
		else 
		{
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
		return $pageURL;
	}
	 
	
 
	   
	  
	function getList($catId,$name){
						$prosubcat=$this->db_query("select pid,name from #_category where parentId='".$catId."' order by porder");
						if(mysql_num_rows($prosubcat)){?>
							<!--<optgroup label="<?=$name?>">--><?php
							while($subres=$this->db_fetch_array($prosubcat)){ 
								$prosubcat2=$this->db_query("select pid,name from #_category where parentId='".$subres[pid]."'order by porder");
								if(mysql_num_rows($prosubcat2)){									
									$subres2=$this->db_fetch_array($prosubcat2);
									?>															
								<option value="<?=$subres[pid]?>" <?=(($subres[pid]==$cat_id)?'selected="selected"':'')?>>
								<?=$name?> => <?=$subres[name]?></option><?php
									$this->getList($subres2[pid],$subres2[name]);									
								}else{?>															
								<option value="<?=$subres[pid]?>" <?=(($subres[pid]==$cat_id)?'selected="selected"':'')?>>
								<?=$subres[name]?></option><?php
								}
						} 
						//echo "</optgroup>";
						}else{?> 
							<option value="<?=$catId?>" <?=(($catId==$cat_id)?'selected="selected"':'')?>>
							<?=$name?></option>  <?php
						} 		
	}
	   	
	 function getList2($catId){
	 					//global $catarr; 
 						$subcat=$this->getSingleresult("select pid from #_category where parentId='".$catId."' order by porder");
						$subname=$this->getSingleresult("select name from #_category where pid='".$catId."' order by porder");
						//$catarr[] = $subname;	 
						if($subcat){ 
							
							 $catarr[] = $subname;	 
							//$catarr[] = "last ".$catId;
							$this->getList2($subcat);
						}
						else{
							 $catarr[] = "last ".$subname;
							//$catarr[] = "last ".$catId;	 
						} 
						return $catarr;
						 	
	}
	function roundUptoNearestN($biggs){ 
       $rounders = (strlen($biggs)-2) * -1;
       $places = strlen($biggs)-2;

       $counter = 0;
               while ($counter <= $places) {
                   $counter++;
                       if($counter==1) {
                               $holder = $holder.'1'; }
                       else {
                               $holder = $holder.'0'; }
               }

                       $biggs = $biggs + $holder;
                       $biggs = round($biggs, $rounders);

                       if($biggs<100) {
                                       if($biggs<100) { $biggs = 100; }
                                       else { $biggs = 100; }
                                                       }
       return $biggs;
}
function generateCode($maxLength){
  $length = $maxLength; // how long promotional code required
  $random= "";
  srand((double)microtime()*1000000);
  $data = "ABCDE123IJKLMN67QRSTUVWXYZ";
  $data .= "ABCDEFGHIJKLMN123PQ45RS67TUV89WXYZ";
  $data .= "FGH45P89";

  $uniqueCode = uniqid(); //the returned string will be 13 characters long
  $addRandLength = ($length - strlen($uniqueCode));
  for($i = 0; $i < $addRandLength; $i++){
    $random .= substr($data, (rand()%(strlen($data))), 1);
  }
  $Code = $prefix.$random.$uniqueCode;
  return strtoupper($Code);
}
function encryptcode($string){
 
  $key ='3647';
  
  $result = '';
  for($i=0; $i<strlen($string); $i++){
    $char = substr($string, $i, 1);
    $keychar = substr($key, ($i % strlen($key))-1, 1);
    $char = chr(ord($char)+ord($keychar));
    $result.=$char;
  }
return base64_encode($result);
}


/*function to decrypt promotional code*/
function decryptcode($string){
  $key ='3647';
  $result = '';
  $string = base64_decode($string);
  for($i=0; $i<strlen($string); $i++){
    $char = substr($string, $i, 1);
    $keychar = substr($key, ($i % strlen($key))-1, 1);
    $char = chr(ord($char)-ord($keychar));
    $result.=$char;
  }
  return $result;
}
function validatePromotionalCode($code){
	$qry="select id from #_gift_voucher where voucherCode ='".trim(encryptcode($code))."' and status='0'";
	$qurSql = $this->db_query($qry);
	$count =(int)mysql_num_rows($qurSql);
	if($count){ 
		return true; 
	}
	else{
    	return false;
	}
}
function checkEmail($email){
	$check = preg_match('/^([a-z0-9]+([_\.\-]{1}[a-z0-9]+)*){1}([@]){1}([a-z0-9]+([_\-]{1}[a-z0-9]+)*)+(([\.]{1}[a-z]{2,6}){0,3}){1}$/i', $email);
	if($check) return true;
	else return false;
}
public function removeSlash($str) {
 $badFriends = '/(\\\)/';
 $str = preg_replace($badFriends, '', $str);
 return $str;
}
function curPageURL() {
	 $pageURL = 'http';
	 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	 $pageURL .= "://";
	 if ($_SERVER["SERVER_PORT"] != "80") {
	  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	 } else {
	  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	 }
	 return $pageURL;
	}
public function baseurl21($vals){
		$vals = $this->removeSlash($vals);
		$vals = "$vals";
		$cnt = strlen(trim(strtolower($vals)));
		if($cnt<15){
			$vals = str_replace(" ", "",trim(strtolower($vals)));
		}else{
			$vals = str_replace(" ", "-",trim(strtolower($vals)));
		}
		
		$vals = str_replace("///", "-",$vals);
		$vals = str_replace("//", "-",$vals);
		$vals = str_replace("/", "-",$vals);
		$vals = str_replace("/'", "-",$vals);
		$vals = str_replace("(", "-",$vals);
		$vals = str_replace(")", "-",$vals);
		$vals = str_replace("&", "-",$vals);
		$vals = str_replace("#", "-",$vals);
		$vals = str_replace("---", "-",$vals);
		$vals = str_replace("--", "-",$vals);
		$vals = str_replace("\'", "",$vals);
		$vals = str_replace("'", "",$vals);
		$vals = str_replace("\/", "",$vals);
		$vals = str_replace("'", "",$vals);
		$vals = str_replace('""', "",$vals);

		return $vals;
}
public function sendSms($number,$mess,$storeid){
	if(!$storeid){  
		$this->db_query("insert into #_message_stats set msg = '$mess',number = '$number',store_id ='".$storeid."'  ");
		$mess = urlencode($mess);
		$url="http://sms.softgains.com/sendurlcomma.aspx?user=20066766&pwd=b62k6d&senderid=FIZZKT&mobileno=".$number."&msgtext=".$mess;
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$curl_scraped_page = curl_exec($ch);
		curl_close($ch); 
 	}else{
		$noOfMessage = $this->getSingleresult("select noOfMessage from #_store_detail where store_user_id = '".$storeid."' ");
		$currentUse = $this->getSingleresult("select count(*) from #_message_stats where store_id ='".$storeid."' "); 
		if($currentUse<$noOfMessage){
			$this->db_query("insert into #_message_stats set msg = '$mess',number = '$number',store_id ='".$storeid."'  ");
			$mess = urlencode($mess);
			$url = "http://sms.softgains.com/sendurlcomma.aspx?user=20066766&pwd=b62k6d&senderid=FIZZKT&mobileno=".$number."&msgtext=".$mess;
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$curl_scraped_page = curl_exec($ch);
			curl_close($ch); 
		}
	}
}

public function findPrice($vals){ 
		$vals = str_replace(".00", "",$vals);
		$vals = str_replace(".0", "",$vals);
		$vals = str_replace("Rs", "",$vals);
		$vals = str_replace("," , "",$vals);
		$vals = str_replace(".","",$vals);
		$vals = str_replace("RS", "",$vals);
		$vals = str_replace(" ", "",$vals);
		$vals = str_replace("---", "-",$vals);
		$vals = str_replace("--", "-",$vals);
		$vals = str_replace("-", "-",$vals);
		
		return $vals;
}
 
 function createThumbnailAny($pathToImage, $dest, $thumbWidth = 180, $thumbHeight=125) {
	$result = 'Failed';
	if (is_file($pathToImage)) {
		$info = pathinfo($pathToImage);
		 $extension = strtolower($info['extension']);
		if (in_array($extension, array('jpg', 'jpeg', 'png', 'gif'))) {

				switch ($extension) {
					case 'jpg':
						$img = imagecreatefromjpeg("{$pathToImage}");
						break;
					case 'jpeg':
						$img = imagecreatefromjpeg("{$pathToImage}");
						break;
					case 'png':
						$img = imagecreatefrompng("{$pathToImage}");
						break;
					case 'gif':
						$img = imagecreatefromgif("{$pathToImage}");
						break;
					default:
						$img = imagecreatefromjpeg("{$pathToImage}");
				}
				// load image and get image size

				$width = imagesx($img);
				$height = imagesy($img);

				// calculate thumbnail size
				$new_width = $thumbWidth;
				$new_height = $thumbHeight;

				// create a new temporary image
				$tmp_img = imagecreatetruecolor($new_width, $new_height);

				// copy and resize old image into new image
				imagecopyresized($tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
					$pathToImage = $dest."/".$info['filename'].".". $extension;
				// save thumbnail into a file
				imagejpeg($tmp_img, "{$pathToImage}");
				 $result = $pathToImage;
			} else {
				$result = 'Failed|Not an accepted image type (JPG, PNG, GIF).';
			}
		} else {
			$result = 'Failed|Image file does not exist.';
		}
		return $result;
	}
	function subdomain($str, $separator = 'dash', $lowercase = FALSE)
    {   
		$str  =  trim($str);
		$length = strlen($str);
		if($length<=15){ $str  = $str = str_replace(' ','', $str);   }
        $foreign_characters = array(
            '/ä|æ|ǽ/' => 'ae',
            '/ö|œ/' => 'oe',
            '/ü/' => 'ue',
            '/Ä/' => 'Ae',
            '/Ü/' => 'Ue',
            '/Ö/' => 'Oe',
            '/À|Á|Â|Ã|Ä|Å|Ǻ|Ā|Ă|Ą|Ǎ|А/' => 'A',
            '/à|á|â|ã|å|ǻ|ā|ă|ą|ǎ|ª|а/' => 'a',
            '/Б/' => 'B',
            '/б/' => 'b',
            '/Ç|Ć|Ĉ|Ċ|Č|Ц/' => 'C',
            '/ç|ć|ĉ|ċ|č|ц/' => 'c',
            '/Ð|Ď|Đ|Д/' => 'D',
            '/ð|ď|đ|д/' => 'd',
            '/È|É|Ê|Ë|Ē|Ĕ|Ė|Ę|Ě|Е|Ё|Э/' => 'E',
            '/è|é|ê|ë|ē|ĕ|ė|ę|ě|е|ё|э/' => 'e',
            '/Ф/' => 'F',
            '/ф/' => 'f',
            '/Ĝ|Ğ|Ġ|Ģ|Г/' => 'G',
            '/ĝ|ğ|ġ|ģ|г/' => 'g',
            '/Ĥ|Ħ|Х/' => 'H',
            '/ĥ|ħ|х/' => 'h',
            '/Ì|Í|Î|Ï|Ĩ|Ī|Ĭ|Ǐ|Į|İ|И/' => 'I',
            '/ì|í|î|ï|ĩ|ī|ĭ|ǐ|į|ı|и/' => 'i',
            '/Ĵ|Й/' => 'J',
            '/ĵ|й/' => 'j',
            '/Ķ|К/' => 'K',
            '/ķ|к/' => 'k',
            '/Ĺ|Ļ|Ľ|Ŀ|Ł|Л/' => 'L',
            '/ĺ|ļ|ľ|ŀ|ł|л/' => 'l',
            '/М/' => 'M',
            '/м/' => 'm',
            '/Ñ|Ń|Ņ|Ň|Н/' => 'N',
            '/ñ|ń|ņ|ň|ŉ|н/' => 'n',
            '/Ò|Ó|Ô|Õ|Ō|Ŏ|Ǒ|Ő|Ơ|Ø|Ǿ|О/' => 'O',
            '/ò|ó|ô|õ|ō|ŏ|ǒ|ő|ơ|ø|ǿ|º|о/' => 'o',
            '/П/' => 'P',
            '/п/' => 'p',
            '/Ŕ|Ŗ|Ř|Р/' => 'R',
            '/ŕ|ŗ|ř|р/' => 'r',
            '/Ś|Ŝ|Ş|Š|С/' => 'S',
            '/ś|ŝ|ş|š|ſ|с/' => 's',
            '/Ţ|Ť|Ŧ|Т/' => 'T',
            '/ţ|ť|ŧ|т/' => 't',
            '/Ù|Ú|Û|Ũ|Ū|Ŭ|Ů|Ű|Ų|Ư|Ǔ|Ǖ|Ǘ|Ǚ|Ǜ|У/' => 'U',
            '/ù|ú|û|ũ|ū|ŭ|ů|ű|ų|ư|ǔ|ǖ|ǘ|ǚ|ǜ|у/' => 'u',
            '/В/' => 'V',
            '/в/' => 'v',
            '/Ý|Ÿ|Ŷ|Ы/' => 'Y',
            '/ý|ÿ|ŷ|ы/' => 'y',
            '/Ŵ/' => 'W',
            '/ŵ/' => 'w',
            '/Ź|Ż|Ž|З/' => 'Z',
            '/ź|ż|ž|з/' => 'z',
            '/Æ|Ǽ/' => 'AE',
            '/ß/'=> 'ss',
            '/Ĳ/' => 'IJ',
            '/ĳ/' => 'ij',
            '/Œ/' => 'OE',
            '/ƒ/' => 'f',
            '/Ч/' => 'Ch',
            '/ч/' => 'ch',
            '/Ю/' => 'Ju',
            '/ю/' => 'ju',
            '/Я/' => 'Ja',
            '/я/' => 'ja',
            '/Ш/' => 'Sh',
            '/ш/' => 'sh',
            '/Щ/' => 'Shch',
            '/щ/' => 'shch',
            '/Ж/' => 'Zh',
            '/ж/' => 'zh',
			'/æ Æ/'=>'&',
        ); 
        $str = preg_replace(array_keys($foreign_characters), array_values($foreign_characters), trim($str));  
	    $replace =($separator == 'dash') ? ' ' : '-'; 
		$replace =($separator == '	zdsZ') ? '-' : '-';   
        $trans = array(
            '&\#\d+?;'               => '', 
            '&\S+?;'                 => '',
            '\s+'                    => $replace,
            '[^a-z0-9\-\._]' => '',
            $replace.'+'            => $replace,
            $replace.'$'            => $replace,  
            '^'.$replace            => $replace,  
            '\.+$'                    => ''
        ); 
        $str = strip_tags($str); 
        foreach ($trans as $key => $val)
        {
            $str = preg_replace("#".$key."#i", $val, $str);
        } 
        if ($lowercase === TRUE)
        {
            if( function_exists('mb_convert_case') )
            {
                $str = mb_convert_case($str, MB_CASE_LOWER, "UTF-8");
            }
            else
            {
                $str = strtolower($str);
            }
        } 
        $str = preg_replace('#[^a-z 0-9~%.:_\-]#i', '', $str);
	    $str = str_replace('','', $str);  
		$str = strtolower($str);
		
        return trim(stripslashes($str));
    }  
	function generate_random_password($length = 6) {
    //$alphabets = range('A','Z');
    $numbers =range('1','9');
    //$additional_characters = array('.');
    $final_array = array_merge($numbers);
         
    $password = '';
  
    while($length--) {
      $key = array_rand($final_array);
      $password .= $final_array[$key];
    } 
    return $password;
  }
  


 

       
  
	function array_is_unique($array) {
		   return array_unique($array) == $array;
		}
   
 
  
function breadcrumbs($text = '<font line-height: 24px;font-size: 18px;font-weight: normal;color: #FFF;text-shadow: 1px 1px 3px #999;float: left;
		display: block;></font> ', $sep = '&raquo;', $home = 'Home') {
		//Use RDFa breadcrumb, can also be used for microformats etc.
		$bc     = $text;
		//Get the website:
		//$site   =   'http://'.$_SERVER['HTTP_HOST'];
		//Get all vars en skip the empty ones
		$crumbs =   array_filter( explode("/",$_SERVER["REQUEST_URI"]) );
		//Create the home breadcrumb
		$bc    .=   '<a href="'.$site.'" rel="v:url" property="v:title">'.$home.'</a>'.$sep; 
		//Count all not empty breadcrumbs
		$nm     =   count($crumbs);
		$i      =   1;
		//Loop the crumbs
	foreach($crumbs as $crumb){
		//Make the link look nice
		$link    =  ucfirst( str_replace( array(".php","-","_"), array(""," "," ") ,$crumb) );
		//Loose the last seperator
		$sep     =  $i==$nm?'':$sep;
		$sep= preg_replace('/[0-9]+/', '', $sep);
		//Add crumbs to the root
		$site   .=  '/'.$crumb; 
		//Make the next crumb
		$link= preg_replace('/[0-9]+/', '', $link); 
		$link = preg_replace("/search.*/", "", $link);
		$link = preg_replace("/[&].*/", "", $link);  
		
		//$link = preg_replace("Tools",'Home', $link);
		$link = strtok($link, '?');
		if(empty($link)){ 
		$sep = str_replace('/search.*/','',$link);
		} 
		$bc .=  '<a href="'.$site.'" rel="v:url" property="v:title">'.$link.' </a> '.$sep;
		$i++; 
		
	} 
		 $bc = preg_replace('/Home/','',$bc);
		 $bc = preg_replace('/Catalog/','',$bc);
		 $bc = preg_replace('/Tools /','Home',$bc);
		 $bc = preg_replace('/Member /','Home',$bc);
         //$bc = preg_replace('/&raquo;Home/','Home',$bc); 
		 //$bc = preg_replace("/&raquo;.home/", '', $bc);
		 $bc = str_replace('&raquo;<a href="/tools" rel="v:url" property="v:title">Home</a>','<a href="/tools" rel="v:url" property="v:title">Home</a>', $bc);
		 $bc = str_replace('&raquo;<a href="/tools/catalog" rel="v:url" property="v:title"> </a>','', $bc);
		 $bc = str_replace('&raquo;<a href="/member" rel="v:url" property="v:title">Home</a>','<a href="/member" rel="v:url" property="v:title">Home</a>', $bc);
		 $bc = str_replace('&raquo;<a href="/member/catalog" rel="v:url" property="v:title"> </a>','', $bc);
		//Return the result 
		 return $bc;
}

function checkLogin(){
	if(empty($_SESSION[uid]))
	header("Location:".SITE_PATH."sign-in");
}


function getAvailableCategory($username){
	$array = array();
	if(empty($username)) return $array;
	
    $getuserid  = $this->getSingleresult("select pid from #_user where username = '".$username."'");
	$caTQuery  = "SELECT fz_products.cat_id from fz_products INNER JOIN fz_user_graphics_products on fz_user_graphics_products.porduct_id = fz_products.pid AND fz_products.status='Active' and fz_user_graphics_products.status='Active'  and fz_user_graphics_products.user_id='".$getuserid."' GROUP by fz_products.cat_id";
	$rsAdmin=$this->db_query($caTQuery);
	while($p=$this->db_fetch_array($rsAdmin)){
		$array[] = $p['cat_id'];
	}

	return $array;


}

function getAlltags($username){
	$array = array();
	if(empty($username)) return $array;
	
    $getuserid  = $this->getSingleresult("select pid from #_user where username = '".$username."'");
	$tagQuery  = "SELECT fz_product_tags.tag from fz_product_tags INNER join fz_user_submission on fz_product_tags.submission_id = fz_user_submission.pid and fz_user_submission.user_id='".$getuserid."' and fz_user_submission.status='Active'";
	$rsAdmin=$this->db_query($tagQuery);
	while($p=$this->db_fetch_array($rsAdmin)){
		$array[] = $p['tag'];
	}

	return $array;


}
function getSubscriptionlist($user_id){
    $array = array();
	$rsAdmin=$this->db_query("select stype from #_subscription where user_id='".$user_id."' ");
	while($arrAdmin=$this->db_fetch_array($rsAdmin)){
		$array[] = $arrAdmin[stype];
	}
	return $array;
}
 
    

}

?>