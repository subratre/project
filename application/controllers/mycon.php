<?php

class Mycon extends CI_Controller
{
	public function index($page = 'home')
	{
				if(!file_exists(APPPATH.'views/pages/home'.'.php'))
				{
					show_404();
				}
				$data['title'] = ucfirst($page);
				$this->load->view('header/header',$data);
				$this->load->view('pages/home');
				$this->load->view('footer/footer.php');

	}

	public function admin($page = 'admin')
	{
		$data['title'] = $page;
		$data['class'] = 'admin';
		$this->load->view('pages/'.$page.'.php',$data);
	}

public function addservice($page = 'Create Service')
{
	$data['title'] = ucfirst($page);
	$data['class'] = 'admin';
	$this->load->view('pages/addservice',$data);
}
public function insertservice()
{

	$data = array(
			'services'=>$this->input->post('service_name')
	);

	$this->load->model('mymod');
	$this->mymod->insert($data);
	
	redirect(base_url().'mycon/addservice');
}

public function childservices($page = 'Child Service')
{
	$data['class'] = 'admin';
	$data['title'] = ucfirst($page);
	$this->load->model('mymod');
	$data['ss'] = $this->mymod->fetch_service();

      $this->load->view('pages/childservices',$data);
}

public function insertservice_childservice1()
{
	$data = array(
'refid'=>$this->input->post('main_service'),
'childservice'=>$this->input->post('cservice')

	);

			$this->load->model('mymod');
			$data['insdchi'] = $this->mymod->inser_child1($data);
			redirect(base_url().'mycon/childservices');
}

public function fetch_modal()
{
		$location = $_GET['id'];
		//echo json_encode($location);
		$this->load->model('mymod');
		$data1 = $this->mymod->show_modal();
		echo json_encode($data1->result());
		

}
public function fetch_first_one()
{
	$idd = $_POST['id'];
	$this->load->model('mymod');
	$qu = $this->mymod->fetch_first($idd);
	echo json_encode($qu);
}
public function fet_the_list_service()
{
	$this->load->model('mymod');
	$quo = $this->mymod->get_the_list_service();
	echo json_encode($quo->result());
}
public function fetch_acc_list()
{
	$cid = $_GET['id'];
	$this->load->model('mymod');
	$qur = $this->mymod->show_child($cid);
	echo json_encode($qur);
	//echo $qur;
}
}
