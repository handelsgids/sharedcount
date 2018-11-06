<?php

namespace Handelsgids\Sharedcount;

class SharedcountResult
{
    /** @var int */
    private $stumbleUpon;

    /** @var SharedcountResultFacebook */
    private $facebook;

    /** @var int */
    private $googlePlusOne;

    /** @var int */
    private $pinterest;

    /** @var int */
    private $linkedIn;

    /**
     * @return int
     */
    public function getStumbleUpon()
    {
        return $this->stumbleUpon;
    }

    /**
     * @param int $stumbleUpon
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
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * @return int
     */
    public function getGooglePlusOne()
    {
        return $this->googlePlusOne;
    }

    /**
     * @param int $googlePlusOne
     */
    public function setGooglePlusOne($googlePlusOne)
    {
        $this->googlePlusOne = $googlePlusOne;
    }

    /**
     * @return int
     */
    public function getPinterest()
    {
        return $this->pinterest;
    }

    /**
     * @param int $pinterest
     */
    public function setPinterest($pinterest)
    {
        $this->pinterest = $pinterest;
    }

    /**
     * @return int
     */
    public function getLinkedIn()
    {
        return $this->linkedIn;
    }

    /**
     * @param int $linkedIn
     */
    public function setLinkedIn($linkedIn)
    {
        $this->linkedIn = $linkedIn;
    }
}
