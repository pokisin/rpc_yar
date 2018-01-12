<?php
// Servicio para operaciones basicas
class Operacion {

    /**
     * Suma dos oepradores
     * @param interge 
     * @return interge
     */
    public function add($a, $b) {
        return $this->_add($a, $b);
    }

    /**
     * Resta
     * @param interge 
     * @return interge
     */
    public function sub($a, $b) {
        return $a - $b;
    }

    /**
     * Multiplicación
     * @param interge 
     * @return interge
     */
    public function mul($a, $b) {
        return $a * $b;
    }

    /**
     * Methodo protegido, no está espuesto
     * @param interge 
     * @return interge
     */
    protected function _add($a, $b) {
        return $a + $b;
    }
}

$server = new Yar_Server(new Operacion());
$server->handle();

?>