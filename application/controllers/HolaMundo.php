<?php
class HolaMundo extends CI_Controller {

   function __coonstruct()
   {
       parent::__construct();
       $this->load->helper('url');
   }
    
   
    function index()
   {
      echo 'Hola Mundo';
      echo anchor('HolaMundo/menu', 'Menu');
   }
   
   function HolaMundo()
   {
       echo 'Hola Mundo';
       echo anchor('HolaMundo', 'Volver');
   }
   
   function AdiosMundo()
   {
       echo 'Adiós Mundo';
       echo anchor('HolaMundo', 'Volver');
   }
   
   function menu()
   {
       echo anchor('HolaMundo/HolaMundo', 'Hola Mundo');
       echo anchor('HolaMundo/AdiosMundo', 'Adiós Mundo');
       echo anchor('QueTalEstas/CuentaNumeros/5', 'Menor que 5');
       echo anchor('QueTalEstas/CuentaNumeros', 'Menor que 10');
       echo anchor('QueTalEstas/CuentaNumeros/100', 'Menor que 100');
       echo anchor('HolaMundo', 'Volver');
   }
}
?>

