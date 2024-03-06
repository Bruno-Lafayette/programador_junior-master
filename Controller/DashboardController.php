<?php

class DashboardController extends Controller{

    public $data;

    public function __construct() {
        $this->data = new Ramais();
    }

    public function index(){
        $this->loadView('index');
    }

    public function loadData(){
        $ramais = $this->checkStatus($this->data->getAllRamais());
        echo json_encode($ramais);
    }

    private function checkStatus($lista = array()) {
        foreach (array_keys($lista) as $indice) {
            switch ($lista[$indice]['status']) {
                case 'Available':
                    $lista[$indice]['status'] = 'disponivel';
                    break;
                case 'In use':
                    $lista[$indice]['status'] = 'ocupado';
                    break;
                case 'Ring':
                    $lista[$indice]['status'] = 'chamando';
                    break;
                case 'Paused':
                    $lista[$indice]['status'] = 'pausa';
                    break;
                case 'Unavailable':
                    $lista[$indice]['status'] = 'indisponivel';
                    break;
                default:
                    $lista[$indice]['status'] = 'indisponivel';
                    break;
            }
        }
        return $lista;
    }
    
}