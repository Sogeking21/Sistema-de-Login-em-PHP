<?php


    use Vitor\Database\Connection;

    class User{
        private $id;
        private $name;
        private $email;
        private $password;

        public function validatelogin(){
            //conectar no banco de dados
            $conn = Connection::getConn();
            
            //conectar no banco de dados
            $sql = 'SELECT * FROM users WHERE email = :email';

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(":email", $this->email);
            $stmt->execute();

            if($stmt->rowConut()){
                $result = $stmt->fetch();

                if($result["pass"] === $this->password){
                    $_SESSION['usr'] = $result['id'];

                    return true;

                }
            }

            throw new \Exception('Login Inavalido');

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