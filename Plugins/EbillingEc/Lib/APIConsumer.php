<?php

namespace FacturaScripts\Plugins\EbillingEc\Lib;


use FacturaScripts\Core\App\AppSettings;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class APIConsumer
{

    const VERSION = "0.1.0";

    protected $api_domain;
    protected $api_token;


    /**
     * The http client used for create the request.
     * @var Client
     */
    protected $http;

    /**
     * A storage object for the filesystem operations.
     * @var Filesystem
     */
    protected $storage;
    protected $decode_as_array;

    /**
     * APIConsumer constructor.
     * @param $api_domain
     * @param $api_token
     * @param null $cache_path
     */
    public function __construct()
    {
        $this->setApiDomain(AppSettings::get("ebillingec", "api_domain"));
        $this->api_token = AppSettings::get("ebillingec", "apikey");
        $this->http = new Client(['base_uri' => $this->api_domain]);
    }


    public function setApiDomain($api_domain)
    {
        $this->api_domain = $api_domain;
        if (!\preg_match("#^https?://#", $this->api_domain)) {
            $this->api_domain = "http://" . $this->api_domain;
        }
    }

    public function getDocumentSri($body){
        return $this->call('POST', '/consultar-documento-sri',200,
             ['headers' => ['Content-Type' => 'application/json'] , 'body' => $body ]);
    }

    public function createDocument($body){
        return $this->call('POST', '/crear-xml',200,
                            ['headers' => ['Content-Type' => 'application/json'] , 'body' => $body ]);
    }

    public function signDocument($body){
        return $this->call('POST', '/firmar-xml',200,
            ['headers' => ['Content-Type' => 'application/json'] , 'body' => $body ]);
    }

    public function authDocument($body){
        return $this->call('POST', '/autorizar-xml',200,
            ['headers' => ['Content-Type' => 'application/json'] , 'body' => $body ]);

    }

    public function printDocument($body){
        return $this->call('POST', '/imprimir-xml',200,
            ['headers' => ['Content-Type' => 'application/json'] , 'body' => $body ]);
    }

    public function getXml($body){
        return $this->call('POST', '/obtener-xml',200,
            ['headers' => ['Content-Type' => 'application/json'] , 'body' => $body ]);
    }

    public function sendEmail($body){
        return $this->call('POST', '/send-email',200,
            ['headers' => ['Content-Type' => 'application/json'] , 'body' => $body ]);
    }

    public function validateToken(){
        return $this->call('POST', '/customer/login',200,
            ['headers' => ['Content-Type' => 'application/json']]);
    }


    /**
     * @param $method
     * @param $url
     * @param int $expected_status it's the expected response status code.
     * @param array $params
     * @return mixed|ResponseInterface
     * @throws GuzzleException
     */
    public function call($method, $url, $expected_status = 200, $params = [])
    {
        if(!is_null($this->api_token)){
            $params['headers']['X-Api-Token'] = $this->api_token;
        }

        if (!in_array(strtolower($method), ['post', 'delete', 'get', 'put', 'head'])) {
            throw new \Exception('Invalid Client Method');
        }
        /** @var ResponseInterface $response */
        try {
            $response = $this->http->request(strtoupper($method), $url, $params);
        } catch (GuzzleException $e) {
            throw $e;
        }

        if ($expected_status !== $response->getStatusCode()) {
            throw new \Exception("Unexpected status code " . $response->getStatusCode());
        }
        if ($content_type = $response->getHeader('Content-Type')) {
            if ($content_type[0] === 'application/json') {
                return json_decode($response->getBody(), $this->decode_as_array);
            }
        }

        return $response->getBody()->getContents();
    }

}