<?php
// Create the controller class for the MVC design pattern
class Controller {

	//Declare public variables for the controller class
	public $load;
	public $model;
	
	//Contructor to load the view and model
	function __construct($pageURI = null)  
	{
		$this->load = new Load(); 
		$this->model = new Model();
		$this->$pageURI();
	}

    //HomePage function
	function home()
	{
		$data = $this->model->dbGetBrands();
		$this->load->view('viewIndex', $data);
	}

	function apiCreateTable()
	{
	  	// echo "Create table function";
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}  
	


}
?>    