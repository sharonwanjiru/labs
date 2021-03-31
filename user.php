


<?php
  
    include 'db.php';
    include 'account.php';

    class User extends DBConnector implements Account {
        //properties 
        protected $email;
        protected $password;
        protected $fullname;
        protected $city;
        protected $image;
        protected $db,$pdo;
        protected $id;
        protected $oldpassword;
        protected $newpassword;

        //class constructor 
        function __construct(){
           $data = new DBConnector();
            $this->pdo=$data->connectToDB();
        }
        public function setoldpassword ($oldpassword){
        	$this->oldpassword = $oldpassword;
        }
        
        public function getoldpassword (){
        	return $this->oldpassword;
        }
        public function setnewpassword ($newpassword){
        	$this->newpassword = $newpassword;
        }
        
        public function getnewpassword (){
        	return $this->newpassword;
        }

       
        public function setfullname ($fullname){
        	$this->fullname = $fullname;
        }
        
        public function getfullname (){
        	return $this->fullname;
        }
       
        public function setemail ($email){
        	$this->email= $email;
        }
        
        public function getemail (){
        	return $this->email;
        }
      
        public function setpassword ($password){
        	$this->password= $password;
        }
       
        public function getpassword (){
        	return $this->password;
        }
     
        public function setcity ($city){
        	$this->city= $city;
        }
        
        public function getcity (){
        	return $this->city;
        }
        public function setimage ($image){

        	$this->image= $image;
        }
        
        public function getimage(){
        	return $this->image;
        }
        public function runQuery($sql)  {
            $stmt = $this->pdo->prepare($sql);
            return $stmt;
        }
        public function is_loggedin() {
            if(isset($_SESSION['user_session'])) {
                return true;
            }
        }
        public function register ($pdo){
            $passwordHash = password_hash($this->password,PASSWORD_DEFAULT);
            try {
                $stmt = $pdo->prepare ('INSERT INTO `persons` (fullname,email,password,city,image) VALUES(?,?,?,?,?)');
                $stmt->execute([$this->getfullname(),$this->email,$passwordHash,$this->getcity(),$this->getimage()]);
                return "Registration was successiful";
            } catch (PDOException $e) {
            	return $e->getMessage();
            }            
        }
        
        
        
        public function login ($pdo)
        {            
            try 
            {  
                session_start();
                $stmt = $pdo->prepare("SELECT password,fullname FROM persons WHERE email=?");
                $stmt->execute([$this->email]);   
                $row = $stmt->fetch();  
                if($row == null)
                {
                    return "user exists";
                }          
                if (password_verify($this->password,$row['password']))
                {       
                    $_SESSION["name"]=$row["fullname"];    
                    return "loged in";
                }                
                return "check password";
            } 
            catch (PDOException $e) 
            {     
                return $e->getMessage();
            }   
        } 

        public function redirect($url) {
            header("Location: $url");
            exit;
        }
        public function logout($pdo){
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
    
        }
        public function changepassword($pdo){
            try{
                $stmt = $pdo->prepare("UPDATE password  SET `password`=[?]");
                $stmt->execute([$this->password]);
                $row=$stmt->fetch();
            }
            catch(PDOEXCEPTION $e){
                return $e->getMessage();
            }



        }
    }
?>

