<?php

use Codexpress\viauy\libs\Controlador;


class Index_Controller extends Controlador
{
  public function index()
  {
    $this->cargarVista("index/index");
  }
  public function help()
  {
    $this->cargarVista("index/help");
  }
  public function agencias()
  {
    $this->cargarVista("index/agencias");
  }
  public function contacto()
  {
    $this->cargarVista("index/contacto");
  }
  public function destinos()
  {
    $this->cargarVista("index/destinos");
  }
  public function horarios()
  {
    $this->cargarVista("index/horarios");
  }
  public function noticias()
  {
    $this->cargarVista("index/noticias");
  }
  public function admin()
  {
    $this->cargarVista("index/admin");
  }
 

}
