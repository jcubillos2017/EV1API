<?php

class Servicio {
    private $conn;
public function __construct($db) {
    $this->conn = $db;
}
public function obtenerServicios() {
    $query = "SELECT ID, Titulo_Esp, Descripcion_Esp FROM coningenio.servicios";       // definimos la consulta SQL
    $stmt = $this->conn->prepare($query);                                             // preparamos la consulta
    $stmt->execute();                                                                 // ejecutamos la consulta
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);                                      // obtenemos todos los resultados

    foreach ($result as $servicio) {                                                  // si no hay resultado, podemos devolver una descripcion por defecto
        if (empty($servicio['Descripcion_Esp'])) {                                   // si la descripcion esta vacia, asignamos un valor por defecto
            $servicio['Descripcion_Esp'] = 'Descripción no disponible';              // valor por defecto
          }
    
        }         
    return $result;                                                                  // retornamos los resultados procesados
}
}
?>


