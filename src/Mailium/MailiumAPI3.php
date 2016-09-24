<?php namespace Mailium/API;

/*
 * Mailium API Wrapper
 * @copyright Mailium, Inc.
 * @author Mailium
 * @version 1.0.0
 * @license GNU GPL v3
 */

class MailiumAPI3 {

	private $APIKey			= '';
  private $accessToken = '';
  private $authorizationType = '';
	private $APICommand		= '';
	private $Subdomain		= '';
	private $ResponseFormat = '';
	private $APIBaseURL		= 'mailium.net';
	public $Result			= '';

	public function __construct($APIKey ='', $accessToken = '',$Subdomain = '',$ResponseFormat='json') {

		$this->SetResponseFormat($ResponseFormat);

		if (empty($APIKey) && empty($accessToken)) {
			echo 'APIKey and Access Token is empty, one must be set';
			return false;
		}
    $this->APIKey = $APIKey;
    $this->accessToken = $accessToken;

    if (!empty($APIKey)) {
      $this->authorizationType = 'apikey';
    } else {
      $this->authorizationType = 'accesstoken';
    }

		if (empty($Subdomain)) {
			$Subdomain = 'app'
			return false;
		}
		$this->Subdomain = $Subdomain;

	}

	public function SetResponseFormat($ResponseFormat='json') {
		$this->ResponseFormat = 'php';
		if ($ResponseFormat == 'xml') {
			$this->ResponseFormat = 'xml';
		} else if ($ResponseFormat == 'json') {
			$this->ResponseFormat = 'json';
		}
	}

	private function MakeURL($APICommand) {
		$APIURL = 'http://'.$this->Subdomain.'.'.$this->APIBaseURL.'/api/v3/'.$APICommand.'/'.$this->ResponseFormat;
		return $APIURL;
	}

	public function run($APICommand,$Parameters) {

		$cURL = curl_init();

		$APIURL = $this->MakeURL($APICommand);

    if ($this->authorizationType == 'accesstoken') {
      $Parameters['APIKey'] = $this->APIKey;
    }

    if ($this->authorizationType == 'accesstoken')
    {
      curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer " . $accessToken,
       ]
     );
    }

		$ParametersString = http_build_query($Parameters);

		curl_setopt($cURL,CURLOPT_URL,$APIURL);
		curl_setopt($cURL,CURLOPT_POST,1);
		curl_setopt($cURL,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($cURL,CURLOPT_POSTFIELDS,$ParametersString);





		$Result = curl_exec($cURL);

		if ($this->ResponseFormat=='php') {
			$Result = unserialize($Result);
		}

		curl_close($cURL);

		$this->Result = $Result;

		return true;
	}


}
