<?php
namespace classes;

require '../mail/PHPMailer.php';
require '../mail/Exception.php';
require '../mail/SMTP.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use Exception;
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

    public function __construct($userName,$password,$email)
    {
        $this->password = $password;
        $this->userName = $userName;
        $this->email = $email;
        
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
                if(password_verify($this->password, $db_password)){ 
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
                //for plain text password
                /*if($this->password == $db_password){  
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

    public function forgotPassword($con){
        try{
           
            $query = "SELECT * FROM user WHERE email=?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1,$this->email);
            $pstmt->execute();

            $rs = $pstmt->fetch(PDO::FETCH_OBJ);
            $db_email = $rs->email;

            if(!empty($rs)){
                //$code = bin2hex(random_bytes(16));
                $code = bin2hex(random_bytes(8)); 
                $shortCode = substr($code, 0, 6);
                
                $_SESSION["reset_code"] = $shortCode;
                $_SESSION["reset_email"] = $this->email;

                if($this->sendResetEmail()){
                    return 1; 
                }
                else{
                    return 2;
                }
            }else{
                return 0;
            }

        }catch(PDOException $e){
            die("Error in User class's forgotPassword method".$e->getMessage());
        }

    }

    public function sendResetEmail(){
        try{

            $code= $_SESSION["reset_code"];
            $email = $_SESSION["reset_email"];

            $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
            $hostname = $_SERVER['HTTP_HOST'];
            $baseURL = $protocol . $hostname;

            $username = $this->getUserName();

            $mail = new PHPMailer(true);
            $mail->SMTPDebug = 0;                     
            $mail->isSMTP();                                            
            $mail->Host = 'smtp.gmail.com';                    
            $mail->SMTPAuth = true;                                  
            $mail->Username = 'sachinformationsystem@gmail.com';                     
            $mail->Password = 'upyjmbtlcfckzoke';                               
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port = 465; 

            $mail->setFrom('aststore39@gmail.com');
            $mail->addAddress($this->email);

            $mail->isHTML(true);                                  
            $mail->Subject = 'Reset Password';
            $message = "Dear,".$username."<br><br>";
            $message .= "To reset your password, please click on the following link<br><br>";
            $message .= "Your reset code is: ".$code."<br><br>";
            $message .= "<a href='{$baseURL}/fp2/fp2.php?code={$code}'>Click here to Reset Password</a><br><br>";
            $message .= "If you did not request a password reset, you can ignore this email. Your password will not be changed.<br><br>";
            $message .= "Regards,<br>";
            $message .= "Sach Infomation System" ."<br>";
        
            $mail->Body = $message;
        
            if ($mail->send()) {
                return true;
            } else {
                return false;
            }
        }catch(Exception $e){
            return false;
        }
    }

    public function updatePassword($con){
        try{
            
            $update_query = "UPDATE user SET Password = ? WHERE email = ?";
            $pstmt = $con->prepare($update_query);
            $pstmt->bindValue(1,$this->password);
            $pstmt->bindValue(2,$this->email);
            if($pstmt->execute()){
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            die("Error in User class's updatePassword function: ".$e->getMessage());
        }
    }

 

}



