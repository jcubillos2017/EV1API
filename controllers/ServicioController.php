<?php

set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . '/../');
require_once 'models/Servicio.php';
// require_once __DIR__.'/../models/Servicio.php';

class ServicioController {

    private $servicio;

    public function __construct($db) {
        $this->servicio = new Servicio($db);
    }

    public function obtenerServicios() {
        $servicios = $this->servicio->obtenerServicios();
        echo json_encode(["data" => $servicios]);
    }



    /*
    public function insertarServicio($nombre, $descripcion) {
        $resultado = $this->servicio->insertarServicio($nombre, $descripcion);
      
        if ($resultado) {
            http_response_code(201);
            echo json_encode(["message" => "Servicio Insertado correctamente"]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "No se pudo Insertar el servicio"]);
        }
    }

    public function actualizarServicio($id, $nombre, $descripcion) {
        $resultado = $this->servicio->actualizarServicio($id, $nombre, $descripcion);
        if ($resultado) {
            http_response_code(200);
            echo json_encode(["message" => "Servicio actualizado correctamente"]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "No se pudo actualizar el servicio"]);
        }
    }
    public function eliminarServicio($id) {
        $resultado = $this->servicio->eliminarServicio($id);
        if ($resultado) {
            echo json_encode(["message" => "Servicio eliminado correctamente"]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "No se pudo eliminar el servicio"]);
        }
    }
}
*/
}
?>


