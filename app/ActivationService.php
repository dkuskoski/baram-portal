<?php

namespace App;


use Illuminate\Mail\Mailer;
use Illuminate\Mail\Message;

class ActivationService
{

	protected $mailer;

	protected $activationRepo;

	protected $resendAfter = 24;

	public function __construct(Mailer $mailer, ActivationRepository $activationRepo)
	{
		$this->mailer = $mailer;
		$this->activationRepo = $activationRepo;
	}

	public function sendActivationMail($user)
	{

		if ($user->status == 1 || !$this->shouldSend($user)) {
			return;
		}
		
		$this->to = $user->email;
		
		$token = $this->activationRepo->createActivation($user);
		
		$link = route('user.activate', $token);
		$msg = sprintf('Activate account %s', $link, $link);
		$url = url('/');
		
		\Mail::send ( [
				'html' => 'activation_mail'
		], [
				'data' => $link,
				'url' => $url
		], function ($message) {
			$message->to ( $this->to );
			$message->subject ( 'E-mail за верификација' );
		} );
		
	}

	public function activateUser($token)
	{
		$activation = $this->activationRepo->getActivationByToken($token);

		if ($activation === null) {
			return null;
		}

		$user = User::find($activation->user_id);

		$user->status = 1;

		$user->save();

		$this->activationRepo->deleteActivation($token);

		return $user;

	}

	private function shouldSend($user)
	{
		$activation = $this->activationRepo->getActivation($user);
		return $activation === null || strtotime($activation->created_at) + 60 * 60 * $this->resendAfter < time();
	}

}