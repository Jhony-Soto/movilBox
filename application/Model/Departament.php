<?php


namespace Mini\Model;

use Mini\Core\Model;

class Departament extends Model
{

    public function getDepartament()
    {
        $sql = "SELECT dep.departament_name as 'departament',
                        count(emp.id) as 'N_empleados'
                from appx_departament as dep inner join appx_employee emp
                        on dep.id =emp.departament_id 
                group by dep.id 
                order by dep.departament_name asc";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

}