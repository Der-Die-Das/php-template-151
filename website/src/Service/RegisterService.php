<?php 

namespace DerDieDas\Service;

use DerDieDas\Entity\UserEntity;

interface RegisterService
{
	public function userExists($username, $email);
	public function registerUser(UserEntity $user);
	public function activateUser($activationString);
}
