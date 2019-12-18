<?php

namespace Handelsgids\Sharedcount\Test;

use Handelsgids\Sharedcount\Sharedcount;
use Handelsgids\Sharedcount\SharedcountQuota;
use Handelsgids\Sharedcount\SharedcountResult;
use PHPUnit\Framework\TestCase;

class SharedcountTest extends TestCase
{
    /** @var Sharedcount */
    private $sharedcount;

    protected function setUp()
    {
        $this->sharedcount = new Sharedcount($_ENV['SHAREDCOUNT_APIKEY'], Sharedcount::SUBSCRIPTION_FREE);
    }

    public function testGet()
    {
        /** @var SharedcountResult $result */
        $result = $this->sharedcount->getByUrl('https://www.handelsgids.be/');

        $this->assertEquals('7122', $result->getFacebook()->getShareCount());
    }

    public function testQuota()
    {
        /** @var SharedcountQuota $result */
        $result = $this->sharedcount->getQuota();

        $this->assertEquals('500', $result->getQuotaAllocatedToday());
    }
}
