<?php 
    class Models {

        public function __construct($host = "localhost", $login = "root", $passowrd = "", $db = "Fronter"){
            $this->host = $host;
            $this->login = $login;
            $this->password = $passowrd;
            $this->db = $db;
            $this->conn = new mysqli($this->host, $this->login, $this->password, $this->db);
        }

        public  function create($data){
            $keys = "";
            $values = "";
            foreach ($data as $key => $value){
                $values .= "$values, ";
                $keys .= "$key";

            }
            $keys = substr($keys, -2, " )");
            $values = substr($values, -2, " )");

            $sql = "INSERT INTO $this->table ($keys) VALUES ($values)";

            return $this->conn->query($sql);
        }
        public function find($id){
            $sql = "SELECT * FROM $this->table WHERE `id` = $id";
            return $this->conn->query($sql)->fetch_array(MYSQLI_ASSOC);
        }
        public function all(){
            $sql = "SELECT * FROM $this->table";


            $res =  $this->conn->query($sql);


            return $res->fetch_all(MYSQLI_ASSOC);
        }

    }

?>