<?php

/*
 *  UBICACION BUSCAR
 */

$ubicacion->get('/ubicacion/buscar/{id}',function($id) use($app){

    try{

        //SQL
        $sql = 'SELECT * FROM ubicaciones WHERE id = ? ';	

        //BUSCAR ID
        $ubicacion = $app['db']->fetchAssoc($sql, array($id));

        //MOSTRAR DATOS
        return $app['twig']->render('ubicacion/ubicacion_datos.twig',
                                    array('ubicacion' => $ubicacion ,'editar' =>TRUE));
    
    } catch (Exception $e) {
        
        //MENSAJE
        $app['session']->getFlashBag()->add('danger',array('message' => $e->getMessage()));
        
        //MOSTRAR MENSAJE ERROR
        return $app['twig']->render('mensaje_error.twig');   
        
    }
    
})
->bind('ubicacionBuscar');