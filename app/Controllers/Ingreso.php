<?php

namespace App\Controllers;

class Ingreso extends BaseController
{

    function __construct()
    {
    }

    public function index()
    {
        echo $this->session->get("login");
        $messg = array(
            'msg' => $this->session->getFlashdata('error')
        );



        // foreach ($query->getResult() as $row) {
        //     echo $row->dni;
        // }
        if ($this->session->get("login")) {
            return redirect()->route('panel');
        } else {
            echo view('ingreso', $messg);
            //$this->load->view("layout/js/signin");
        }
    }

    public function signIn()
    {

        $dni = $this->request->getPost("dni");
        $pin = $this->request->getPost("pin");
        //		$model = $this->Signin_model->signIn($email, $pin);
        $db = db_connect();
        $datos = $db->table("persona");
        $num = $datos->where('dni', $dni)->where('pin',$pin)->where('activo',1)->countAllResults();
       
        if ($num == 0) {
            $this->session->setFlashdata("error", "DNI o pin incorrecto");
            return redirect()->route('Ingreso');
        } else {
            
            $num2 = $datos->where('dni', $dni)->where('pin',$pin)->where('activo',1)    ;
            $userModel = new \App\Models\Modelo();
            $user = $userModel->find('48411441');

            echo $user['nombres'];

            $data  = array(
                'dni' => $dni,
                'login'  => TRUE
            );

            $this->session->set($data);
            $this->session->setFlashdata(
                "success",
                "Bienvenido "
                //    .$res->name."!"
            );

           // return redirect()->route('panel');
        }
    }
    public function logout()
    {

        $this->session->destroy();
        return redirect()->route('Ingreso');
    }
}
