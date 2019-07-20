<?php
class Database{
    private $con;
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "project";
    public function __construct(){
        $this->con = mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
    }
    public function execute($sql){
        if(mysqli_query($this->con, $sql));{
            return 1;
        }else
            return 0;
    }
    public function__destruct{
        mysqli_close($this->con);
    }
}

?>