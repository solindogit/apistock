<?php
function command ($a)
{
	global $mysqli;
	$result=$mysqli->query($a);
	return $result;
}

function mrows ($a)
{
	$result=$a->num_rows;
	return $result;
}

function mres ($a)
{
	$result=$a->fetch_object();
	return $result;
}

function mresr ($a)
{
	$result=$a->fetch_row();
	return $result;
}

function mresa ($a)
{
	$result=$a->fetch_array(MYSQLI_BOTH);
	return $result;
}
?>