<?php

namespace Handelsgids\Sharedcount;

class SharedcountQuota
{
    /** @var int */
    private $quotaUsedToday;

    /** @var int */
    private $plan;

    /** @var int */
    private $quotaRemainingToday;

    /** @var int */
    private $quotaAllocatedToday;

    /**
     * @return int
     */
    public function getQuotaUsedToday()
    {
        return $this->quotaUsedToday;
    }

    /**
     * @param int $quotaUsedToday
     */
    public function setQuotaUsedToday($quotaUsedToday)
    {
        $this->quotaUsedToday = $quotaUsedToday;
    }

    /**
     * @return int
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * @param int $plan
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;
    }

    /**
     * @return int
     */
    public function getQuotaRemainingToday()
    {
        return $this->quotaRemainingToday;
    }

    /**
     * @param int $quotaRemainingToday
     */
    public function setQuotaRemainingToday($quotaRemainingToday)
    {
        $this->quotaRemainingToday = $quotaRemainingToday;
    }

    /**
     * @return int
     */
    public function getQuotaAllocatedToday()
    {
        return $this->quotaAllocatedToday;
    }

    /**
     * @param int $quotaAllocatedToday
     */
    public function setQuotaAllocatedToday($quotaAllocatedToday)
    {
        $this->quotaAllocatedToday = $quotaAllocatedToday;
    }
}
