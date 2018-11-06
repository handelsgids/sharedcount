<?php

namespace Handelsgids\Sharedcount;

class SharedcountResultFacebook
{
    /** @var int */
    private $commentPluginCount;

    /** @var int */
    private $totalCount;

    /** @var int */
    private $ogObject;

    /** @var int */
    private $commentCount;

    /** @var int */
    private $shareCount;

    /** @var int */
    private $reactionCount;

    /**
     * @return int
     */
    public function getCommentPluginCount()
    {
        return $this->commentPluginCount;
    }

    /**
     * @param int $commentPluginCount
     */
    public function setCommentPluginCount($commentPluginCount)
    {
        $this->commentPluginCount = $commentPluginCount;
    }

    /**
     * @return int
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

    /**
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->totalCount = $totalCount;
    }

    /**
     * @return int
     */
    public function getOgObject()
    {
        return $this->ogObject;
    }

    /**
     * @param int $ogObject
     */
    public function setOgObject($ogObject)
    {
        $this->ogObject = $ogObject;
    }

    /**
     * @return int
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * @param int $commentCount
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;
    }

    /**
     * @return int
     */
    public function getShareCount()
    {
        return $this->shareCount;
    }

    /**
     * @param int $shareCount
     */
    public function setShareCount($shareCount)
    {
        $this->shareCount = $shareCount;
    }

    /**
     * @return int
     */
    public function getReactionCount()
    {
        return $this->reactionCount;
    }

    /**
     * @param int $reactionCount
     */
    public function setReactionCount($reactionCount)
    {
        $this->reactionCount = $reactionCount;
    }
}
