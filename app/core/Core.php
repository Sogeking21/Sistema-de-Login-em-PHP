<?php

    class Core{

        private $url;
        private $controller;
        private $method = 'index';
        private $params = array(0);

        public function _construct(){

        }
        public function start($request){

            if (isset($request['url'])){
            $this->url = explode('/', $request['url']);

            $this->controller = ucfirst($this->url[0]).'controller';
            array_shift($this->url);

            if(isset($this->url[0]) && $this->url != ''){
                $this->method = $this->url[0];
                array_shift($this->url);

                if (isset($this->url[0]) && $this->url != ''){
                $this-> params = $this->url;
                }
            }
            
            }else {
                $this->controller = 'logincontroller';
                $this->method = 'index';

            }

            return call_user_func(array(new $this-> controller, $this-> method), $this->params);
            //var_dump($this->controller, $this->method, $this-> params);

        }
    }