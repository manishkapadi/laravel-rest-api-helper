<?php

namespace ManishKapadi\LaravelRestApiHelper\Services;

use GuzzleHttp\Client;

use ManishKapadi\LaravelRestApiHelper\Models\GuzzleRequest;

class GuzzleService
{
    /**
     * Send a request to any external service
     *
     * @param GuzzleRequest $request
     *
     * @return mixed
     */
    public function makeRequest(GuzzleRequest $request)
    {
        if ($request->getClientParameters()) {
            $clientParameters = $request->getClientParameters();
        } else {
            $clientParameters = [
                'timeout' => 5,
                'connect_timeout' => 5,
            ];
        }

        $client = $this->getClient($clientParameters);

        $options = [
            'headers' => $request->getHeaders(),
            'query' => $request->getQueryParams(),
        ];

        if (!empty($request->getPayload())) {
            $options['json'] = $request->getPayload();
        }

        $response = $client->request($request->getMethod(), $request->getEndPoint(), $options);
        $response = json_decode($response->getBody(), true);
        return $response;
    }

    /**
     * Build Request
     *
     * @param $method
     * @param $endPoint
     * @param array $data
     * @param array $headers
     * @param array $queryParams
     * @return GuzzleRequest
     */
    public function buildRequest($method, $data, $endPoint, $headers, $queryParams)
    {
        $request = new GuzzleRequest();
        $request->setMethod($method);
        $request->setEndPoint($endPoint);
        $request->setPayload($data);
        $request->setHeaders($headers);
        $request->setQueryParams($queryParams);

        return $request;
    }

    /**
     * Build Client
     *
     * @param array $parameters
     *
     * @return Client
     */
    private function getClient(array $parameters)
    {
        $client = new Client($parameters);

        return $client;
    }
}
