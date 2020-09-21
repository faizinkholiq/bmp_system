<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vessel extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('vessel_model');
    }

	public function index()
	{
        $d['content_view'] = 'vessel/index';
		$this->load->view('dashboard', $d);
		// $this->load->view('login');
    }
    
    public function report()
	{
        $d['content_view'] = 'vessel/report';
		$this->load->view('dashboard', $d);
    }
    
    public function data()
    {  

        $d['start_date'] = $this->input->get('start_date');
        $d['finish_date'] = $this->input->get('finish_date');

        $data['data'] = $this->vessel_model->get_data($d);
        echo json_encode($data);
    }

    public function detail($id)
    {
        if(!empty($id)){
            $data = [
                "success" => 1,
                "data" => $this->vessel_model->get_detail($id)
            ];
        }else{
            $data = [
                "success" => 0,
                "data" => "Not Found"
            ];
        }

        echo json_encode($data);
    }

    public function create()
    {
        $nd = $this->get_input();
        print_r($nd);
        exit;

        if($this->vessel_model->create($nd)){
            $data = [
                'success' => 1,
                'message' => 'Create data success ',
            ];
        }else{
            $data = [
                'success' => 0,
                'message' => 'Update data failed ',
            ];
        }

        echo json_encode($data);
    }

    public function edit()
    {
        $nd = $this->get_input();
        $nd ['id'] = $this->input->post('id');
        $detail = $this->vessel_model->get_detail($nd['id']);

        if($detail){
            if($this->vessel_model->edit($nd)){
                $data = [
                    'success' => 1,
                    'message' => 'Update data success ',
                ];
            }else{
                $data = [
                    'success' => 0,
                    'message' => 'Update data failed ',
                ];
            }
        }else{
            $data = [
                'success' => 0,
                'message' => 'id not found ',
            ];
        }

        echo json_encode($data);
    }

    public function delete($id)
    {
        $detail = $this->vessel_model->get_detail($id);

        if(!empty($id) && $detail){
            if($this->vessel_model->delete($id)){
                $data = [
                    'success' => 1,
                    'message' => 'Delete data success ',
                ];
            }else{
                $data = [
                    'success' => 0,
                    'message' => 'Delete data failed ',
                ];
            }
        }else{
            $data = [
                'success' => 0,
                'message' => 'id not found ',
            ];
        }

        echo json_encode($data);
    }

    public function get_input()
    {
        $nd["name"] = $this->input->post('name');
        $nd["type"] = !empty($this->input->post('type'))? $this->input->post('type') : '';
        $nd["owner"] = !empty($this->input->post('owner'))? $this->input->post('owner') : '';
        $nd["built"] = !empty($this->input->post('built'))? $this->input->post('built') : '';
        $nd["gt"] = !empty($this->input->post('gt'))? $this->input->post('gt') : null;
        $nd["flag"] = !empty($this->input->post('flag'))? $this->input->post('flag') : null;
        $nd["class"] = !empty($this->input->post('class'))? $this->input->post('class') : null;
        $nd["period_start"] = !empty($this->input->post('period_start'))? $this->input->post('period_start') : null;
        $nd["period_finish"] = !empty($this->input->post('period_finish'))? $this->input->post('period_finish') : null;
        $nd["tsi"] = !empty($this->input->post('tsi'))? $this->input->post('tsi') : null;
        $nd["banker_clause"] = !empty($this->input->post('banker_clause'))? $this->input->post('banker_clause') : null;
        $nd["exist_insurance"] = !empty($this->input->post('exist_insurance'))? $this->input->post('exist_insurance') : null;
        $nd["po"] = !empty($this->input->post('po'))? $this->input->post('po') : null;
        $nd["polis"] = !empty($this->input->post('polis'))? $this->input->post('polis') : null;
        $nd["keterangan"] = !empty($this->input->post('keterangan'))? $this->input->post('keterangan') : null;

        return $nd;
    }
}
