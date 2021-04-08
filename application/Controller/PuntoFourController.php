<?php

namespace Mini\Controller;

use Mini\Model\Departament;

class PuntoFourController
{

    private $modelDepart;


    public function __construct()
    {
        $this->modelDepart=new Departament();
    }


    public function index()
    {
        $title="Ejercicio N°4";
        $script="js/punto4.js";

        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/puntos/punto4.php';
        require APP . 'view/_templates/footer.php';
    }

    
    public function ejercicio4()
    {
        $res=$this->modelDepart->getDepartament();
        $query="SELECT dep.departament_name as 'departament',
                        count(emp.id) as 'N_empleados'
                from appx_departament as dep inner join appx_employee emp
                        on dep.id =emp.departament_id 
                group by dep.id 
                order by dep.departament_name asc";
        echo json_encode(['sql'=>$query,
                            'data'=>$res,
                        ]);
    }

}