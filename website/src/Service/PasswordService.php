<?php 

namespace DerDieDas\Service;

interface PasswordService
{
	public function tryCreateNewPasswordReset($email, $resetToken);
	public function tryResetPassword($resetToken, $password);
}