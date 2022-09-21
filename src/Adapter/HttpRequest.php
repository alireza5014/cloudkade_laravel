<?php

namespace idegostaran\cloudkade\Adapter;

class HttpRequest
{


    /**
     * Cloudkade  Service.
     *
     * @var string
     */
    protected $base_url = 'https://service.cloudkade.com/api/v1/vod';
    protected $apikey = '';
    protected $headers = [];

    /**
     * Http constructor.
     *
     * @param string $baseUrl
     */
    public function __construct(string $baseUrl = null)
    {

        $this->setHeaders(['Authorization' => config('cloudkade.apikey')]);
        $this->base_url = $baseUrl ?? $this->base_url;
    }


    public function setHeaders(array $headers)
    {
        foreach ($headers as $key => $value) {
            $this->headers[] = $key . ": " . $value;
        }
    }

    /**
     * Sends a GET request.
     *
     * @param string $uri
     * @param array $data
     * @param array $headers
     *
     *
     */
    public function get(string $uri, array $data = [], array $headers = [])
    {

        return $this->request('GET', $uri, ['query' => $data], $headers);
    }


    public function post(string $uri, array $data = [], array $headers = [])
    {
        return $this->request('POST', $uri, $data, $headers);
    }


    public function put(string $uri, array $data = [], array $headers = [])
    {
        return $this->request('PUT', $uri, $data, $headers);
    }


    public function patch(string $uri, array $data = [], array $headers = [])
    {
        return $this->request('PATCH', $uri, $data, $headers);
    }


    public function delete(string $uri, array $data = [], array $headers = [])
    {
        return $this->request('DELETE', $uri, $data, $headers);
    }


    public function request(string $method, string $uri, array $data = [], array $headers = [])
    {

//        dd( json_encode($data));

        $url = $this->base_url . $uri;
        $this->headers = array_merge($this->headers, $headers);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if ($data) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));  //Post Fields
        }

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        $server_output = curl_exec($ch);

        curl_close($ch);


        return json_decode($server_output, true);


    }


    protected function response(array $data, string $message = null)
    {
        return $data;
    }
}
