<?php

/** @copyright 2020 ng-voice GmbH */

declare(strict_types=1);

namespace OpiyOrg\AriClient\Model;

/**
 * Asterisk ping information.
 *
 * @package OpiyOrg\AriClient\Model
 *
 * @author Lukas Stermann <lukas@ng-voice.com>
 */
class AsteriskPing implements ModelInterface
{
    public string $timestamp;

    public string $ping = '';

    public string $asteriskId;

    /**
     * The timestamp string of request received time.
     *
     * @return string
     */
    public function getTimestamp(): string
    {
        return $this->timestamp;
    }

    /**
     * Always string value is pong.
     *
     * @return string
     */
    public function getPing(): string
    {
        return $this->ping;
    }

    /**
     * Get the Asterisk id info.
     *
     * @return string
     */
    public function getAsteriskId(): string
    {
        return $this->asteriskId;
    }
}
