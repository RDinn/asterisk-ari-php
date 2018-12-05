<?php
/**
 * @author Lukas Stermann
 * @author Rick Barenthin
 * @copyright ng-voice GmbH (2018)
 */

namespace AriStasisApp\rest_clients;


/**
 * Class Sounds
 *
 * @package AriStasisApp\ariclients
 */
class Sounds extends AriRestClient
{
    /**
     * @return bool|mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    function list()
    {
        return $this->getRequest('/sounds');
    }

    /**
     * @param string $soundId
     * @return bool|mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    function get(string $soundId)
    {
        return $this->getRequest("/sounds/{$soundId}");
    }
}