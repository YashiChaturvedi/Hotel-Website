

<?php
   class Contact{
      private $host = "localhost";
      private $user = "root";
      private $pass = "";
      private $db = "test";
      public $mysqli;

      public function __construct(){

         return $this->msqli = new msqli($this->host, $this-> user, $this-> pass, $this-> db);
      }

      public fuction contact_us($data){
         $email = $data['email'];
         $msg = $data['feedback'];

         $q = "insert into contact set email = '$email', feedback = '$msg'";

         return $this->msqli -> query($q);
      }
   }


   


?>