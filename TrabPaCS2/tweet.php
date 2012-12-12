<?php

require_once('twitteroauth.php');
require_once('config.php');
require_once ('frases.php');

class tweet {

    public function ejecutar() {
        $connection = new twitteroauth('PQIliWFlSgGp4tq7Vt80A', 'FIpD44LDn8NVZ2rA0t8mxdbyhOAlLYTB6mqBNBAYpU',
                        '314193702-XAksZakQBQSbqN8P8b6cn2RpglNSqC7WoAkyAV1i', 'c3hg8ToLoX6P85bASzZO1GGeeg7CYMagNi5f46Otg');


        $content = $connection->get('account/verify_credentials');
        $mensajes = $connection->get('statuses/mentions', array('count' => 4));


        foreach ($mensajes as $mensaje) {
            $obj = new frases();
            $num = rand(0, 4);
            $msn = $obj->generar($num);
            $tieneHashTag = 0;
            $estado = str_replace('@AForlando #EstoyCansadoDe', '', $mensaje->text, $tieneHashTag);

            $usuario = "@".$mensaje->user->screen_name;

            if ($tieneHashTag) {
                $mensaj = $usuario. " ".$msn." ".$estado;
                $connection->post('statuses/update', array('status' => $mensaj));
                $this->_mostrar();
                echo "".$mensaj;
            }
        }
    }

    private function _mostrar() {
        require_once 'trabParcial.html';
    }

}

$mi = new tweet();
$mi->ejecutar();
