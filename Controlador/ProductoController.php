<?php
class ProductoController{

    //private Servicio;

    public function __construct()
    {
        //Aqui creamos la construción al objeto del Servicio
    }

    public function listarProducto(){
        //Usar el atrivubuto servicio y traerse los datos ed BBDD para mostrarlo en la web
    }

    public function ejecuta(){
        $producto = $this->listarProducto();

        //Cargar la vista y guardar los productos
        require_once("Vista/Main.php");
    }


}