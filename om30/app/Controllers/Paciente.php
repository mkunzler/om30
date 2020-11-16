<?php namespace App\Controllers;

class Paciente extends BaseController
{
	public function index()
	{
		$modelo = new \App\Models\PacienteModel();
		$dados['pacientes'] = $modelo->find();
		return view('listagem', $dados);
	}

	public function cadastro()
	{
		return view('cadastro');
	}

	public function ver()
	{
		$id = $this->request->getPost('id');
		$modelo = new \App\Models\PacienteModel();
		$dados['paciente'] = $modelo->find($id);
		return view('visualizar', $dados);
	}

	public function edicao()
	{
		$id = $this->request->getPost('id');
		$modelo = new \App\Models\PacienteModel();
		$dados['paciente'] = $modelo->find($id);
		return view('edicao', $dados);
	}

	public function gravar()
	{
		$modelo = new \App\Models\PacienteModel();
		//print_r($this->request->getPost());
		if ($modelo->insert($this->request->getPost()))
			return redirect()->to('index');
	}

	public function salvar(){
		    $curriculo    = $_FILES['curriculo'];
		    $configuracao = array(
		        'upload_path'   => './curriculos/',
		        'file_name'     => $cpf.'.pdf'
		    );
		    $this->load->library('upload');
		    $this->upload->initialize($configuracao);
		    if ($this->upload->do_upload('curriculo'))
		        echo 'Arquivo salvo com sucesso.';
		    else
		        echo $this->upload->display_errors();
	}

	public function editar()
	{
		$modelo = new \App\Models\PacienteModel();
		
		$data = $this->request->getPost();
		$id = $this->request->getPost('id');
		//print_r($this->request->getPost());
		
		if ($modelo->update($id, $data)) {
			return redirect()->to('index');
		}		
	}

	public function excluir()
	{
		$modelo = new \App\Models\PacienteModel();
		
		$id = $this->request->getPost('id');
		
		if ($modelo->delete($id)) {
			return redirect()->to('index');
		}		
	}
}
