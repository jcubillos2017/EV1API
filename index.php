<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Content-Type: application/json; charset=UTF-8');

require_once './controllers/ServicioController.php';
require_once './config/database.php';

$database = new Database();
$db = $database->getConnection();

$servicioController = new ServicioController($db);

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        $servicioController->obtenerServicios();
        break;

    
    default:
        http_response_code(405);
        echo json_encode(["mesage" => "Método $method no permitido"]);
        break;
  /*  case 'POST':
        $data = json_decode(file_get_contents("php://input"), true);

        if (!empty($data['nombre']) && !empty($data['descripcion'])) {
            $servicioController->insertarServicio($data['nombre'], $data['descripcion']);
        } else {
            http_response_code(400);
            echo json_encode(array("message" => "Faltan datos requeridos: nombre y descripcion"));
        }
        break;

    case 'PUT':
        $data = json_decode(file_get_contents("php://input"), true);
        if (!empty($data['id']) && !empty($data['nombre']) && !empty($data['descripcion'])) {
            $servicioController->actualizarServicio($data['id'], $data['nombre'], $data['descripcion']);
        } else {
            http_response_code(400);
            echo json_encode(["message" => "Faltan datos requeridos: id, nombre y descripcion"]);
        }
        break;

    case 'DELETE':
        $id = $_GET['id'] ?? null;
        if (!empty($id)) {
            $servicioController->eliminarServicio($id);
            http_response_code(200);
            echo json_encode(["message" => "Servicio eliminado con éxito"]);
        } else {
            http_response_code(400);
            echo json_encode(["message" => "Falta el id del servicio a eliminar"]);
        }
        http_response_code(200);
        echo json_encode(["message" => "Servicio eliminado con éxito"]);
        break;*/
}
?>