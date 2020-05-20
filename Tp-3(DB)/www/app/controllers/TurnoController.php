<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Turno;

class TurnoController extends Controller
{
    public function __construct()
    {
        $this->model = new Turno();
    }

    public function inicio(){
        $turnos = $this->model->getAllData();
        return view('inicio',compact('turnos'));
  }

    public function nuevo(){
        $datos = [
            'cabecera' => 'Nuevo turno',
            'boton' => ' Enviar',
        ];
        return view('form',$datos);
    }
   
    public function ver(){
        $id = $_GET['id'];
        $turno=$this->model->getTurno($id);
        return view('linkTurno', $turno);
    }

    public function modificar(){
        $id = $_GET['id'];
        $turno = $this->model->getTurno($id);
        $datos = [
            'turno' => $turno,
            'cabecera' => 'Modificar turno',
            'boton' => 'Modificar'
        ];
        return view('form', $datos);
    }

    public function borrar(){
        $id = $_GET['id'];
        $data = $this->model->getData($id);
        $this->model->borrar($id);
        $logger = \App\Core\App::get('logger');
        $logger->info('DELETE:TURNOS:',$data);
        return $this->inicio();
    }

    public function guardar(){
        $turno= $_POST;
        $tamanio_imagen=$_FILES['diagnostico']['size'];
        $this->model->import($turno);
        $errores = $this->model->validar();
        $error = null;
        $bkp = $this->model->getData();
         
        if($tamanio_imagen>1000000){    
                $error = "Imagen muy grande, maximo 10MB";
            }else if (count($errores)>0){
                $errores_total = [
                    'errores' => $errores,
                    'error' => $error,
                    'turno' => $turno
                ];
                return view ('form',$errores_total);
            }else{
                    $nombre_imagen = $_FILES['diagnostico']['name'];
                    if(empty($nombre_imagen)){
                        $turno['diagnostico']='';
                    }else{ 
                        $ext = pathinfo($_FILES['diagnostico']['name'], PATHINFO_EXTENSION);
                        $route_image = 'public/images'.$bkp['id_turno'].".".$ext;
                        move_uploaded_file($_FILES['diagnostico']['tmp_name'],$route_image);
                        
                        $imagenToByte = file_get_contents($route_image);
                        
                        $image = 'data:image/'.$ext.';base64,'.base64_encode($imagenToByte);
                        $turno['diagnostico']=$image;
                    }

                    $this->model->import($turno);
                    $turno = $this->model->guardar();
                    return view('linkTurno',$turno);
                }
        if (empty($_POST['id_turno'])){
            $logger->info('INSERT:TURNOS:'.$turno["id_turno"]);
        }else{
            $logger->info('UPDATE:TURNOS:'.$turno["id_turno"]);
        }  
        
    }

 

}