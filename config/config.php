<?php

    class config{

        private $HOST="localhost";
        private $USERNAME="root";
        private $PASSWORD="";
        private $DB_NAME="exam";
        private $conn;
    

        public function initDB(){
            $this->conn=mysqli_connect($this->HOST,$this->USERNAME,$this->PASSWORD,$this->DB_NAME);
            return $this->conn;
        }


// RAILWAY

        public function insertRailway($name){
            $this->initDB();
            $query="INSERT INTO railway(name) VALUES('$name')";
            return mysqli_query($this->conn,$query);
        }

        public function fetchRailway(){
            $this->initDB();
            $query="SELECT * FROM railway";
            return mysqli_query($this->conn,$query);
        }

        
        public function deleteRailway($id){
            $this->initDB();
            $query="DELETE FROM railway WHERE id=$id";
            return mysqli_query($this->conn,$query);
        }

        
        public function fetchSingleRailway($id) {
            $this->initDB();
            $query="SELECT * FROM railway WHERE id=$id";
            return mysqli_query($this->conn,$query);    
        }

        public function updateRailway($id,$name){
            $this->initDB();
            $query="UPDATE railway SET name='$name' WHERE id=$id";
            return mysqli_query($this->conn,$query);
        }



// CUSTOMER
    
        public function insertCustomer($trainId,$name){
            $this->initDB();
            $query="SELECT * FROM railway WHERE id=$trainId";
            $res=mysqli_query($this->conn,$query);
            $record=mysqli_fetch_assoc($res);

            if($record){
                $query="INSERT INTO customer(name,train_id) VALUES('$name',$trainId)";
                return mysqli_query($this->conn,$query);
            }else{
                return false;
            }
        }

        public function fetchCustomer(){
            $this->initDB();
            $query="SELECT * FROM customer";
            return mysqli_query($this->conn,$query);
        }


        public function deleteCustomer($id){
            $this->initDB();
            $query="DELETE FROM customer WHERE id=$id";
            return mysqli_query($this->conn,$query);
        }

        public function fetchSingleCustomer($id){
            $this->initDB();
            $query="SELECT * FROM customer WHERE id=$id";
            return mysqli_query($this->conn,$query);
        }


        public function updateCustomer($trainId,$id,$name){
            $this->initDB();
            $query="UPDATE customer set name='$name',train_id=$trainId WHERE id=$id";
            return mysqli_query($this->conn,$query);
        }
    

    }


?>