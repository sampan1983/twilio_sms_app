<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Failed_numbers extends CI_Controller {

	function __construct(){

			parent::__construct();

			if (!isset($_SESSION['logged_in'])) {

				header('Location: '.base_url().'Login');

			}



		}

	public function index()

	{
		$this->load->model('User_listModel');

		$result['data_user'] = $this->User_listModel->get();

		$this->load->model('ClientModel');

		$result['data'] = $this->ClientModel->get();

		$this->load->model('Single_messageModel');

		$result['sent_msg_log'] = $this->Single_messageModel->sentmsglog();

		$this->load->model('Failed_numbersModel');

		$result['failed_numbers'] = $this->Failed_numbersModel->failedmsglog();

		$this->load->model('Pending_numbersModel');

		$result['pending_numbers'] = $this->Pending_numbersModel->pendingmsglog();

		$this->load->model('Received_messages_newModel');

		$result['Received_messages_new'] = $this->Received_messages_newModel->receivedmsglog();
		$this->load->model('Received_messages_newModel');

		$result['Received_messages_new'] = $this->Received_messages_newModel->receivedmsglog();

		$this->load->model('User_listModel');

		$result['data'] = $this->User_listModel->get();

		$this->load->model('Failed_numbersModel');

		$result['failed_data'] = $this->Failed_numbersModel->getdata();

		$this->load->view('failed_numbers',$result);

	}

	public function delete($id){

		$this->load->model('Failed_numbersModel');

		$result = $this->Failed_numbersModel->delete($id);

		echo json_encode($result);

	}
	public function delete_all(){


				$delete = "DELETE from tapp_sent_msg_failed";

				$check = $this->db->query($delete);

				Redirect('http://103.173.215.7/democalling/Failed_Messages');

	}





}

?>
