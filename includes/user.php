<?php
    class User extends DB{

        private $Usuario;
        private $Contraseña;

        public function userExists($user,$pass){
            $md5pass=md5($pass);

            $query=$this->connect()->prepare('Select * from usuarios WHERE Usuario= :user AND Contraseña=:pass');
            $query->execute(['user'=>$user,'pass'=>$md5pass]);

            if($query->rowCount()){
                return true;
            }else{
                return false;
            }
        }

        public function setUser($user){
            $query= $this->connect()->prepare('SELECT * FROM usuarios WHERE Usuario=:user');
            $query->execute(['user' => $user]);

            foreach($query as $currentUser){
                $this->Usuario=$currentUser['Usuario'];
            }
        }

        public function getUsuario(){
            return $this->Usuario;
        }
    }
?>