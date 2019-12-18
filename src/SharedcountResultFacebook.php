<?php

namespace Handelsgids\Sharedcount;

class SharedcountResultFacebook
{
    /** @var string */
    private $commentPluginCount;

    /** @var string */
    private $totalCount;

    /** @var string */
    private $ogObject;

    /** @var string */
    private $commentCount;

    /** @var string */
    private $shareCount;

    /** @var string */
    private $reactionCount;

    /**
     * @return string
     */
    public function getCommentPluginCount()
    {
        return $this->commentPluginCount;
    }

    /**
     * @param string $commentPluginCount
     *
     * @return void
     */
    public function setCommentPluginCount($commentPluginCount)
    {
        $this->commentPluginCount = $commentPluginCount;
    }

    /**
     * @return string
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

    /**
     * @param string $totalCount
     *
     * @return void
     */
    public function setTotalCount($totalCount)
    {
        $this->totalCount = $totalCount;
    }

    /**
     * @return string
     */
    public function getOgObject()
    {
        return $this->ogObject;
    }

    /**
     * @param string $ogObject
     *
     * @return void
     */
    public function setOgObject($ogObject)
    {
        $this->ogObject = $ogObject;
    }

    /**
     * @return string
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * @param string $commentCount
     *
     * @return void
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;
    }

    /**
     * @return string
     */
    public function getShareCount()
    {
        return $this->shareCount;
    }

    /**
     * @param string $shareCount
     *
     * @return void
     */
    public function setShareCount($shareCount)
    {
        $this->shareCount = $shareCount;
    }

    /**
     * @return string
     */
    public function getReactionCount()
    {
        return $this->reactionCount;
    }

    /**
     * @param string $reactionCount
     *
     * @return void
     */
    public function setReactionCount($reactionCount)
    {
        $this->reactionCount = $reactionCount;
    }
}
