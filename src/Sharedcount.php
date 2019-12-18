<?php

namespace Handelsgids\Sharedcount;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

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
     * @param string      $apikey
     * @param string|null $subscription
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
     * @param string      $url
     * @param string|null $customTtl
     * @param string|null $JSONPCallback
     *
     * @return SharedcountResult
     */
    public function getByUrl($url = '', $customTtl = null, $JSONPCallback = null)
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

        $sharedCountResult = SharedcountResultHydrator::hydrate(
            json_decode($result, true)
        );

        return $sharedCountResult;
    }

    /**
     * @return SharedcountQuota
     */
    public function getQuota()
    {
        $result = $this->call('/quota');

        $sharedCountQuota = SharedcountQuotaHydrator::hydrate(
            json_decode($result, true)
        );

        return $sharedCountQuota;
    }

    /**
     * @param string   $endpoint
     * @param string[] $params
     *
     * @return string
     */
    private function call($endpoint = '', $params = [])
    {
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

        try {
            $response = $this->client->request('GET', $url);
            $contents = $response->getBody()->getContents();
        } catch (GuzzleException $exception) {
            $contents = '';
        }

        return $contents;
    }
}
