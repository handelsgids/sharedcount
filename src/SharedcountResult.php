<?php

namespace Handelsgids\Sharedcount;

class SharedcountResult
{
    /** @var string */
    private $stumbleUpon;

    /** @var SharedcountResultFacebook */
    private $facebook;

    /** @var string */
    private $googlePlusOne;

    /** @var string */
    private $pinterest;

    /** @var string */
    private $linkedIn;

    /**
     * @return string
     */
    public function getStumbleUpon()
    {
        return $this->stumbleUpon;
    }

    /**
     * @param string $stumbleUpon
     *
     * @return void
     */
    public function setStumbleUpon($stumbleUpon)
    {
        $this->stumbleUpon = $stumbleUpon;
    }

    /**
     * @return SharedcountResultFacebook
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @param SharedcountResultFacebook $facebook
     *
     * @return void
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * @return string
     */
    public function getGooglePlusOne()
    {
        return $this->googlePlusOne;
    }

    /**
     * @param string $googlePlusOne
     *
     * @return void
     */
    public function setGooglePlusOne($googlePlusOne)
    {
        $this->googlePlusOne = $googlePlusOne;
    }

    /**
     * @return string
     */
    public function getPinterest()
    {
        return $this->pinterest;
    }

    /**
     * @param string $pinterest
     *
     * @return void
     */
    public function setPinterest($pinterest)
    {
        $this->pinterest = $pinterest;
    }

    /**
     * @return string
     */
    public function getLinkedIn()
    {
        return $this->linkedIn;
    }

    /**
     * @param string $linkedIn
     *
     * @return void
     */
    public function setLinkedIn($linkedIn)
    {
        $this->linkedIn = $linkedIn;
    }
}
