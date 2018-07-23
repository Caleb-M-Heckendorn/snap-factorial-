<?php
{
	$no = $no * ($no - 1) * ($no - 2) * 2 * 1;
	$zero = 1;
	function factor($no) {
		$result = $no;
		if($no < 0) throw(new \RangeException ("No negatives!"));
		if($no > 20) throw(new\RangeException ("21! and above overflow the int type"));
		return $result;
	}

}