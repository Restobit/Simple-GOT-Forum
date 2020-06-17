<?php
class Contact_Model extends Model
{
	function __construct()
	{
		parent::__construct();
	}

	function process()
	{

		$today = date("Y-m-d");

		$data = [
			':fname' => $_POST['fullname'],
			':email' => $_POST['email'],
			':comment' => $_POST['comment'],
			':today' => $today
		];

		$sql = "INSERT INTO `contact`(`name`, `email`, `comment`, `sendDate`) VALUES (:fname,:email,:comment,:today)";
		$sth = $this->db->prepare($sql);
		$sth->execute($data);
		$count = $sth->rowCount();

		return $count > 0 ? "success" : "not_success";
	}
}
