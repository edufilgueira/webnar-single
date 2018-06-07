<?php
    class db{
        // Properties

        // Connect
        public function connect(){

			$conn = new PDO('mysql:host=localhost;dbname=edusan64_dbase;charset=utf8', 'edusan64_dbase', 'v03admin%');
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
			
			return $conn;
        }
        
    }