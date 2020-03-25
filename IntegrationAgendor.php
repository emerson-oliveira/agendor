<?php

class IntegrationAgendor 
{
	private $apiUrl;
	private $build = array();
	private $callback;

	function __construct()
	{
		$this->apiUrl = 'https://api.agendor.com.br/v3/people/upsert';
	}
	public function createPerson( $name, $email, $phone):IntegrationAgendor
	{
	    $this->$build = "{\n  \"name\": \"$name\",\n  \"contact\": {\n  \"mobile\": \"$phone\",\n    \"email\": \"$email\"\n  }\n}";

		$this->post();

		return $this;
	}

	public function callback(){
		return $this->callback;
	}

	private function post(){

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => $this->apiUrl,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => false,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => $this->$build, 
		  CURLOPT_HTTPHEADER => array(
		    "Authorization: {{ Token xxxxx-xxxxx-xxxxx-xxxx-xxxxx }}",
		    "Content-Type: application/json"
		  ),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;
	}
}
