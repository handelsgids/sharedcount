<?php

namespace Handelsgids\Sharedcount;

class SharedcountQuotaHydrator
{
    /**
     * @param string[] $data
     *
     * @return SharedcountQuota
     */
    public static function hydrate($data)
    {
        $sharedcountQuota = new SharedcountQuota();
        $sharedcountQuota->setPlan($data['plan']);
        $sharedcountQuota->setQuotaAllocatedToday($data['quota_allocated_today']);
        $sharedcountQuota->setQuotaRemainingToday($data['quota_remaining_today']);
        $sharedcountQuota->setQuotaUsedToday($data['quota_used_today']);

        return $sharedcountQuota;
    }
}
