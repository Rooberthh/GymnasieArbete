<?php

/* Sätter upp användar funktioner som t.ex sparar sessioner, uppdaterar deras fält, hittar användare, inloggning, utloggning och hittar all deras information i databasen   */
class User {
	private $_db,
			$_data,
			$_sessionName,
			$_isLoggedIn;

	public function __construct($user = null){
		$this->_db = DB::getInstance();

		$this->_sessionName = Config::get('session/session_name');

		if(!$user){
			if(Session::exists($this->_sessionName)){
				$user = Session::get($this->_sessionName);

				if($this->find($user)){
					$this->_isLoggedIn = true;
				}else{
					//process logout
				}
			}
			}else{
				$this->find($user);
		}
	}
/* Skapar en användare om det inte fungerar så ger den ut ett felmeddelande   */
	public function create($fields = array()) {
		if(!$this->_db->insert('users', $fields)) {
			throw new Exception('There was a problem creating your account.');
		}
	}

/* Uppdaterar alla fält beroende på användare   */
	public function update($fields = array(), $id = null){

		if(!$id && $this->isLoggedIn() ){
			$id = $this->data()->id;
		}

		if(!$this->_db->update('users', $id, $fields )){
			throw new Exception('There was a problem updating.');
		}
	}

	public function find($user = null){
		if($user){
			$field = (is_numeric($user)) ? 'id' : 'username';
			$data = $this->_db->get('users', array($field, '=', $user));

			if($data->count()){
				$this->_data = $data->first();
				return true;
			}
		}
		return false;
	}

/* Login funktoinen, som kollar användarens salt, användarnamn och det hashade lösenordet gentemot databasen, om det fungerar såp loggar användare in   */
	public function login($username = null, $password = null){
		$user = $this->find($username);
		if($user){
			if($this->data()->password === Hash::make($password, $this->data()->salt)){
				Session::put($this->_sessionName, $this->data()->id);

				return true;
			}
		}

		return false;
	}


	public function exists() {
		return (!empty($this->_data)) ? true : false;
	}

	public function logout(){
		Session::delete($this->_sessionName);
	}

/* All data som finns hos användaren   */
	public function data(){
		return $this->_data;
	}
/* Sessionen som kollar ifall en användare är inloggad   */
	public function isLoggedIn(){
		return $this->_isLoggedIn;
	}
}
