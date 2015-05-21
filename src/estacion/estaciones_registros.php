<?php

function inicializarEstacion(){
    
    $estacion=array( 'id'=>'','estatus'=>'',
                'usuario_nombre'=>'',
                'usuario_indicador'=>'',
                'usuario_id_empresa'=>'',
                'usuario_id_gerencia'=>'',
                'usuario_id_ubicacion'=>'',
                    'equipo_id_marca'=>'',
                    'equipo_serial'=>'',
                    'equipo_etiqueta_pdvsa'=>'',
                'almacenamiento_ram'=>'',
                'almacenamiento_dd'=>'',
                'almacenamiento_dd_cantidad'=>'',
                    'procesador_marca_modelo'=>'',
                    'procesador_velocidad'=>'',
                    'procesador_cantidad'=>'',
                'monitor_marca_modelo'=>'',
                'monitor_tamaño'=>'',
                'monitor_cantidad'=>'',
                    'video_integrada'=>'',
                    'video_memoria'=>'',
                    'video_marca_modelo'=>'',
                    'video_cantidad'=>'',
                'red_ip'=>'',
                'red_hostname'=>'',
                'red_gateway'=>'',
                'red_mascara'=>'',
                'red_mac'=>'',
                    'energia_dispositivo'=>'',
                    'energia_estado'=>'',
                    'energia_marca_modelo'=>'',
                'software_id_sistema_operativo'=>'',
                'software_aplicaciones'=>'',
                    'observacion'=>'');
    return ($estacion);
}