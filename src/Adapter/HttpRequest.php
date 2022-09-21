<?php

namespace idegostaran\cloudkade\Adapter;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class HttpRequest
{
    /**
     * guzzle http client.
     *
     * @var Client
     */
    protected $client;

    /**
     * ArvanCloud Service.
     *
     * @var string
     */
    protected $base_url;

    /**
     * Http constructor.
     *
     * @param string $baseUrl
     */
    public function __construct(string $baseUrl='')
    {
        $headers = '';
        $this->client = new Client([
            'base_uri' => $baseUrl??$this->base_url,
            'headers' => $headers,
            'allow_redirects' => false,
        ]);
    }


    /**
     * Sends a GET request.
     *
     * @param string $url
     * @param array $data
     * @param array $headers
     *
     *
     */
    public function get(string $url, array $data = [], array $headers = [])
    {
        return $this->request('GET', $url, ['query' => $data], $headers);
    }


    public function post(string $url, array $data = [], array $headers = [])
    {
        return $this->request('POST', $url, ['json' => $data], $headers);
    }


    public function put(string $url, array $data = [], array $headers = [])
    {
        return $this->request('PUT', $url, ['json' => $data], $headers);
    }


    public function patch(string $url, array $data = [], array $headers = [])
    {
        return $this->request('PATCH', $url, ['json' => $data], $headers);
    }


    public function delete(string $url, array $data = [], array $headers = [])
    {
        return $this->request('DELETE', $url, ['json' => $data], $headers);
    }

    public function request(string $method, string $url, array $data = [], array $headers = [])
    {
        try {
            $data['headers'] = $headers;
            $response = $this->client->request($method, $url, $data);
        } catch (RequestException $e) {
        }

        $responseData = json_decode($response->getBody()->getContents(), true);

        return $this->response(isset($responseData['data']) && is_array($responseData['data'])
            ? $responseData['data']
            : $responseData, $responseData['message'] ?? null);
    }


    protected function response(array $data, string $message = null)
    {

        return $data;
    }
}
