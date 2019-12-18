<?php

namespace Handelsgids\Sharedcount;

class SharedcountQuota
{
    /** @var string */
    private $quotaUsedToday;

    /** @var string */
    private $plan;

    /** @var string */
    private $quotaRemainingToday;

    /** @var string */
    private $quotaAllocatedToday;

    /**
     * @return string
     */
    public function getQuotaUsedToday()
    {
        return $this->quotaUsedToday;
    }

    /**
     * @param string $quotaUsedToday
     *
     * @return void
     */
    public function setQuotaUsedToday($quotaUsedToday)
    {
        $this->quotaUsedToday = $quotaUsedToday;
    }

    /**
     * @return string
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * @param string $plan
     *
     * @return void
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;
    }

    /**
     * @return string
     */
    public function getQuotaRemainingToday()
    {
        return $this->quotaRemainingToday;
    }

    /**
     * @param string $quotaRemainingToday
     *
     * @return void
     */
    public function setQuotaRemainingToday($quotaRemainingToday)
    {
        $this->quotaRemainingToday = $quotaRemainingToday;
    }

    /**
     * @return string
     */
    public function getQuotaAllocatedToday()
    {
        return $this->quotaAllocatedToday;
    }

    /**
     * @param string $quotaAllocatedToday
     *
     * @return void
     */
    public function setQuotaAllocatedToday($quotaAllocatedToday)
    {
        $this->quotaAllocatedToday = $quotaAllocatedToday;
    }
}
