<?php
/**
 * @author Lukas Stermann
 * @author Rick Barenthin
 * @copyright ng-voice GmbH (2018)
 */

namespace AriStasisApp\rest_clients;


/**
 * Class Playbacks
 *
 * @package AriStasisApp\ariclients
 */
class Playbacks extends AriRestClient
{
    /**
     * @param string $playbackId
     * @return bool|mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    function get(string $playbackId)
    {
        return $this->getRequest("/playbacks/{$playbackId}");
    }

    /**
     * @param string $playbackId
     * @return bool|mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    function stop(string $playbackId)
    {
        return $this->deleteRequest("/playbacks/{$playbackId}");
    }

    /**
     * @param string $playbackId
     * @param string $operation Allowed: restart, pause, unpause, reverse, forward
     * @return bool|mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    function control(string $playbackId, string $operation)
    {
        return $this->postRequest("/playbacks/{$playbackId}/control",
            ['operation' => $operation]);
    }
}