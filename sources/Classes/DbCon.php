<?php
//this is for safe dbconnection
    Class DbCon 
    {
        public function connect()
        {
            $dbCD = parse_ini_file ("dbconfig.ini");
            $con = new mysqli($dbCD["host"], $dbCD["username"], $dbCD["password"], $dbCD["dbname"]);
            
            return $con;
        }
        public static function writeData($sql)
        {
            $oDbCon = new DbCon();
            $con = $oDbCon->connect();

            $results= mysqli_query($con, $sql);

            return $results;
        }
        public static function fetchData($sql)
        {
            $oDbCon = new DbCon();
            $con = $oDbCon->connect();

            $results= mysqli_query($con, $sql);

            while($row = mysqli_fetch_assoc($results))
            {
                $data[]=$row;
            }
            return $data;
        }
    }
?>