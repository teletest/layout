<?php
class Welcome extends Controller
{
    function Welcome()
    {
        parent::Controller();
    }

	function index()
	{

		if($this->session->userdata('logged_in'))
		{
			$data = tags();
			$data['tabs']	= tabs('home');
            $data['welcome_msg'] = "Welcome to Home Page";
			$this->parser->parse('home/welcome_message', $data);
		}
		else
		{
			redirect('login/');
		}
	}

	
}


/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
?>

