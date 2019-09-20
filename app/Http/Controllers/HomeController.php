<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\Mail;
	use App\Mail\SendMailable;

	class HomeController extends Controller{

	public function mail()
	{
	   $name = 'Mark';
	   Mail::to('markpauslebial@gmail.com')
		->subject('some subject')
		->send(new SendMailable($name));
	   
	   return 'Email was sent';
	}
}		
?>
