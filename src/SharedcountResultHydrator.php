<?php

namespace Handelsgids\Sharedcount;

class SharedcountResultHydrator
{
    /**
     * @param mixed $data
     * @return SharedcountResult
     */
    public static function hydrate($data)
    {
        $resultFacebook = new SharedcountResultFacebook();
        $resultFacebook->setCommentPluginCount($data['Facebook']['comment_plugin_count']);
        $resultFacebook->setTotalCount($data['Facebook']['total_count']);
        $resultFacebook->setOgObject($data['Facebook']['og_object']);
        $resultFacebook->setShareCount($data['Facebook']['share_count']);
        $resultFacebook->setReactionCount($data['Facebook']['reaction_count']);

        $sharedCountResult = new SharedcountResult();
        $sharedCountResult->setStumbleUpon($data['StumbleUpon']);
        $sharedCountResult->setFacebook($resultFacebook);
        $sharedCountResult->setGooglePlusOne($data['GooglePlusOne']);
        $sharedCountResult->setPinterest($data['Pinterest']);
        $sharedCountResult->setLinkedIn($data['LinkedIn']);

        return $sharedCountResult;
    }
}
