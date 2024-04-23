<?php

$conn = mysqli_connect("localhost", "root", "", "gold_db");


function query($query) {
	global $conn;
	$result = mysqli_query ($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {

	
	$foto = $data["foto_guru"];
	$teks = $data["teks_guru"];

	$query = "INSERT INTO guru_tbl VALUES
				('', '$foto', '$teks')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

?>