<?php
defined('BASEPATH') or exit('No se permite acceso directo');

class Rol{

    /**Atributo de Conexión */
    private $db;
    public function __construct()
    {
        /**Conexión a la Base de Datos */
        $this->db = Database::getInstance();
    }
    /**Se Obtiene todos los Roles Disponibles
     *
     * @return [objet] Filas como Objeto
     */
    public function getRoles()
    {
        $this->db->query('SELECT * FROM roles');
        return $this->db->resultSet();
    }

}