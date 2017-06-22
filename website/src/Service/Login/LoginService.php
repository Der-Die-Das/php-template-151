<?php
namespace Der-Die-Das\Service\Login;

Interface LoginService
{
	public function authenticate($username, $password);
	public function getUserIdByEmail($email);
	public function getPasswordByEmail($email);
}