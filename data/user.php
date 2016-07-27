<?php
include_once 'connect.php'; 
$database = new Database(); 
$conn = $database->getConnection();

class User{
    // table name
   
    private $table_name = "user_profiles";
 
    // object properties
    public $user_id;
    public $password;
    public $full_name;
    public $status;
 
 //
        //write query
        $query = "INSERT INTO
                    " . $this->user_profiles . "
                SET
                    full_name = ?,";
 
        $stmt = $this->conn->prepare($query);
 
        // posted values
        $this->full_name=($this->full_name);
        $this->user_id=($this->user_id);
        $this->password=($this->password);
        $this->status=($this->status);
       
 
        // bind values
        $stmt->bindParam(1, $this->full_name);
        $stmt->bindParam(2, $this->user_id);
        $stmt->bindParam(3, $this->password);
        $stmt->bindParam(3, $this->status);
       
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    //    // read products
    //    function readAll(){
 
    //     // select all query
    //         $query = "SELECT 
    //            user_id, full_name, password, status
    //         FROM 
    //             " . $this->user_profiles . "
    //         ORDER BY 
    //             id DESC";
 
    // // prepare query statement
    // $stmt = $this->conn->prepare( $query );
     
    // // execute query
    // $stmt->execute();
     
    // return $stmt;
}

      // used when filling up the update product form
// function readOne(){
     
//     // query to read single record
//     $query = "SELECT 
//               ser_id,full_name,password,status  
//             FROM 
//                 " . $this->user_profiles . "
//             WHERE 
//                 user_id = ? 
//             LIMIT 
//                 0,1";
 
    // prepare query statement
    // $stmt = $this->conn->prepare( $query );
     
    // // bind id of product to be updated
    // $stmt->bindParam(1, $this->user_id);
     
    // // execute query
    // $stmt->execute();
 
    // // get retrieved row
    // $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
//     // set values to object properties
//     $this->user_id = $row['user_id'];
//     $this->full_name = $row['full_name'];
//     $this->password = $row['password'];
//     $this->status = $row['status'];
// }
 
//     }
// }



// ?>