<?php 

    class LoginController{
        public function index()
        {
            $loader = new \Twig\Loader\FilesystemLoader('app/view');
            $twig = new \Twig\Environment($loader, [
            'cache' => '/path/to/compilation_cache',
            'auto_reload' => true,
            ]);

            $template = $twig->load('login.html');

            return $template->render();
        }

        public function check(){
            try{
                $Usar = new User;
                $Usar->setEmail($_POST['email']);
                $Usar->setPassword($_POST['password']);
                $Usar->validatelogin();
                 
                }catch(\Exception $e) {
                header('location:http://localhost/Sistema-de-Login-em-PHP/login/check');
            }
        }
    }