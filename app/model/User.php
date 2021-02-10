<?php


    use Vitor\Database\Connection;

    class User{
        private $id;
        private $name;
        private $email;
        private $password;

        public function validatelogin(){

            $conn = Connection::getconn();
            $conn2 = Connection::getconn();
            var_dump($conn,$conn2);
            //conectar no banco de dados
            //selecionar o usuario que tenha o mesmo email do informado
            //conferir senha do usuario
            // se tiver tudo ok.... criar session e direcionar para tela dashboard
            // se tiver agum erro...redirecionar de volta para a tela inicial
        }

        public function setEmail($email){

            $this->email = $email;
        }
        public function setName($name){

            $this->name = $name;
        }
        public function setPassword($password){

            $this->password = $password;
        }

        public function getName(){

            return $this->name;
        }
        public function getEmail(){

            return $this->email;
        }
        public function getPassword(){

            return $this->password;
        }


    }