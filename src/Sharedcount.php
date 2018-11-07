<?php

namespace Handelsgids\Sharedcount;

use GuzzleHttp\Client;

/**
 * Class Sharedcount
 */
class Sharedcount
{
    const SUBSCRIPTION_FREE = 'free';

    const SUBSCRIPTION_PAYING = 'paying';

    const API_URL_FREE = 'free.sharedcount.com';

    const API_URL_PAYING = 'api.sharedcount.com';

    /** @var string */
    private $apikey;

    /** @var Client */
    private $client;

    /** @var string */
    private $subscription;

    /**
     * Sharedcount constructor.
     * @param string $apikey
     * @param null|string $subscription
     */
    public function __construct($apikey, $subscription = null)
    {
        $this->apikey = $apikey;

        if ($subscription === null) {
            $subscription = self::SUBSCRIPTION_FREE;
        }
        $this->subscription = $subscription;

        $this->client = new Client();
    }

    /**
     * @param $url
     * @param null $customTtl
     * @param null $JSONPCallback
     * @return SharedcountResult
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getByUrl($url, $customTtl = null, $JSONPCallback = null)
    {
        $params = [
            'url' => $url
        ];

        if ($customTtl !== null) {
            $params['custom_ttl'] = $customTtl;
        }

        if ($JSONPCallback !== null) {
            $params['callback'] = $JSONPCallback;
        }

        $result = $this->call('/', $params);

        $sharedCountResult = SharedcountResultHydrator::hydrate(json_decode($result, true));

        return $sharedCountResult;
    }

    /**
     * @param $endpoint
     * @param null $params
     * @return SharedcountResult
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function call($endpoint, $params = null)
    {
        if ($params === null) {
            $params = [];
        }

        $params['apikey'] = $this->apikey;

        $apiUrl = self::API_URL_FREE;
        if ($this->subscription == 'paying') {
            $apiUrl = self::API_URL_PAYING;
        }

        $url = sprintf(
            'https://%s%s?%s',
            $apiUrl,
            $endpoint,
            http_build_query($params)
        );

        $response = $this->client->request('GET', $url);
        $contents = $response->getBody()->getContents();

        return $contents;
    }
}
