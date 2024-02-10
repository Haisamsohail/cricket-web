<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http;

/**
 * Description of HttpClientCommunication
 *
 * @author Haisam
 */
class HttpClientCommunication 
{
	protected $url = null;
	protected $restConnector = null;
	protected $header = null;
	protected $response = null;

	public function __construct()
	{
		$this->restConnector = new \App\Comms\REST\Request();
		$headers ["Accept"] = "application/json";
		$headers["Content-Type"] = "application/json";
		$headers["Token"] = null;
		$this->restConnector->defaultHeaders($headers);
        $this->restConnector->proxy('', '3128','http://webproxy.efulife.com:3128');
		$this->url = 'http://localhost/project_api/public/';
		//https://eoscl.ca/api/public/';
	}
	
	public function storeData($id =null, $data, $post = false)
	{ 
		if ($post === true)
		{
			$this->response = $this->restConnector->post($this->url.'/'.$id, $this->headers(), json_encode($data));
			return $this->response;
		}
		
		$this->response = $this->restConnector->put($this->url . '/'. $id, $this->headers(), json_encode($data));
		return $this->response;
	}

	public function getData($id , $queryParams = null)
	{
		$resp = $this->restConnector->get($this->url . '/'. $id, $this->headers(), $queryParams);
		if(!$resp->isSuccessful())
		{
			return null;
		}
		return json_decode($resp->rawBody(),true);
	}

    public function headers()
    {
        // $this->header['Authorization'] = 'Bearer ' . Session::get('access_token');
        return $this->header;
    }
}
