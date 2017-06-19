<?php
class CSVfileread
{
    var $filename;
		function __construct($file_name) {		
			$this->name = $file_name;
                }
                function _read() {
                $csvfile = 'sample_text1.csv';
                $file_handle = fopen($csvfile, 'r');
                while(!feof($file_handle))
               {
                     codecept_debug(fgetcsv($file_handle, 1024));
               }
               fclose($file_handle);
                    
                }
                function _write() {
                    $list = array
                     (
                       "Aman,18,20000",
                       "Rohit,20,24000"
                     );
                $file = fopen("sample_text1.csv","w");
                foreach ($list as $line)
                {
                    fputcsv($file,explode(',',$line));
                }
                fclose($file);
                    
                }
}