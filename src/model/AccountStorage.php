<?php 

interface AccountStorage {

	public function checkAuth($login, $password);
	public function create(Account $a);
}

 ?>