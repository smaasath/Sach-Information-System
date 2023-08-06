<?php
namespace classes;

use PDOException;
use PDO;

class User{
    private $userId;
    private $userName;
    private $instituteId;
    private $studentId;
    private $staffId;
    private $password;
    private $email;
    private $role;

    public function __construct($userName,$password)
    {
        $this->password = $password;
        $this->userName = $userName;
        
    }
    public function getUserId(){
        return $this->userId;
    }
    public function setUserId($userId){
        $this->userId = $userId;
    }
    public function getUserName(){
        return $this->userName;
    }
    public function setUserName($userName){
        $this->userName = $userName;
    }
    public function getInstituteId(){
        return $this->instituteId;
    }
    public function setInstituteId($instituteId){
        $this->instituteId = $instituteId;
    }
    public function getStudentId(){
        return $this->studentId;
    }
    public function setStudentId($studentId){
        $this->studentId = $studentId;
    }
    public function getStaffId(){
        return $this->staffId;
    }
    public function setStaffId($staffId){
        $this->staffId = $staffId;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password= $password;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getRole(){
        return $this->role;
    }
    public function setRole($role){
        $this->role = $role;
    }

    public function login($con){
        try{
            
            $query = "SELECT * FROM user WHERE userName=?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1,$this->userName);
            $pstmt->execute();

            $rs = $pstmt->fetch(PDO::FETCH_OBJ);
            $db_password = $rs->Password;
            if(!empty($rs)){
                //for hashed password
                /*if(password_verify($this->password, $db_password)){ 
                    $this->userId = $rs->uderId;
                    $this->userName = $rs->userName;
                    $this->instituteId = $rs->institutetId;
                    $this->studentId = $rs->studentId;
                    $this->staffId = $rs->staffId;
                    $this->email = $rs->email;
                    $this->role = $rs->Role;
                    $this->password = null;
                    return true;
                }*/
                //for plain text password
                if($this->password == $db_password){  
                    $this->userId = $rs->uderId;
                    $this->userName = $rs->userName;
                    $this->instituteId = $rs->institutetId;
                    $this->studentId = $rs->studentId;
                    $this->staffId = $rs->staffId;
                    $this->email = $rs->email;
                    $this->role = $rs->Role;
                    $this->password = null;
                    return true;
                }
                else{
                    return false;
                }
            }else{
                return false;
            }

        }catch(PDOException $e){
            die("Error in User class's login function: ".$e->getMessage());
        }
    }

    /*public function forgotPassword($con){
        try{
            $con = DBConnector :: getConnection();
            $query = "SELECT * FROM user WHERE email=?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1,$this->email);
            $pstmt->execute();

            $rs = $pstmt->fetch(PDO::FETCH_OBJ);
            $db_email = $rs->email;

            if(!empty($rs)){
                $new_password = $this->generateRandomPassword();
                

            }else{
                return false;
            }

        }catch(PDOException $e){
            die("Error in User class's forgotPassword method".$e->getMessage());
        }

    }

    private function generateRandomPassword($length = 5) {
        $possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        $reset_password = "";

        for ($i = 0; $i < $length; $i++) {
            $reset_password .= $possible[rand(0, strlen($possible) - 1)];
        }

        return $reset_password;
    }*/

}



