<?php if(!empty($this->session->userdata('ses_nama')) and !empty($this->session->userdata('ses_id')))
	{
	echo $headernya;
	echo $menunya;
	echo $contentnya;
	echo $footernya;
}else{
	redirect('login');
}

?>