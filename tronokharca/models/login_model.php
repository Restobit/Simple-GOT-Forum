<?php

class Login_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function process()
	{
		$userData = array(
			':username' => $_POST['username'],
			':password' => $_POST['password']
		);

		$sth = $this->db->prepare("SELECT `id`,`userName`,`admin` FROM `users` WHERE `userName` = :username AND `password` = MD5(:password)");
		$sth->execute($userData);

		$count = $sth->rowCount();
		$user = $sth->fetch(PDO::FETCH_OBJ);
		$userID = $user->id;
		$userName = $user->userName;
		$isAdmin = $user->admin;

		if ($count > 0) {
			Session::init();
			Session::set('loggedIn', true);
			Session::set('username', $userName);
			Session::set('userid', $userID);

			if ($isAdmin) {
				Session::set('isAdmin', $isAdmin);
				header('location: ../admin');
			} else {
				header('location: ../dashboard');
			}
		} else {
			header('location: ../login');
		}
	}
}
