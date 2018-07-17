<?php
namespace App\Auth;

use App\Models\Author;
use \Requests;


class Auth {

	public function user(){
		return $this->is_logged_in() ? $_SESSION['author'] : null;
	}

	public function is_logged_in(){
		return isset( $_SESSION['author'] );
	}

	public function logout(){
		unset( $_SESSION['author'] );
	}

	public function attempt( $username, $password ){
		$author = Author::where('username', $username )->first();
		if( ! $author ){
			return false;
		}

		if( password_verify( $password, $author->password ) ){
			$_SESSION['author'] = $author;
			return true;
		}
		return false;
	}



}