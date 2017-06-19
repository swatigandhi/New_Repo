<?php 
include("CSVread.php");
	$csv = new CSVfileread("CSVread.php");
	echo "read the file data: ".$csv->_write();
        echo "write data into the file : ".$csv->_read();







