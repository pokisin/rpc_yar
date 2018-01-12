<?php
// Servicio para operaciones basicas
class Operacion {

    /**
     * Suma dos operadores
     * @param integer 
     * @return integer
     */
    public function add($a, $b) {
        return $this->_add($a, $b);
    }

    /**
     * Resta
     * @param integer
     * @return integer
     */
    public function sub($a, $b) {
        return $a - $b;
    }

    /**
     * Multiplicación
     * @param integer
     * @return integer
     */
    public function mul($a, $b) {
        return $a * $b;
    }

    /**
     * Método protegido, no está espuesto
     * @param integer 
     * @return integer
     */
    protected function _add($a, $b) {
        return $a + $b;
    }
}

$server = new Yar_Server(new Operacion());
$server->handle();

?>