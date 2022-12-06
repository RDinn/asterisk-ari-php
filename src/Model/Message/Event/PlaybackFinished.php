<?php

/** @copyright 2020 ng-voice GmbH */

declare(strict_types=1);

namespace OpiyOrg\AriClient\Model\Message\Event;

use OpiyOrg\AriClient\Model\Playback;

/**
 * Event showing the completion of a media playback operation.
 *
 * @package OpiyOrg\AriClient\Model\Message\Event
 *
 * @author Lukas Stermann <lukas@ng-voice.com>
 */
class PlaybackFinished extends Event
{
    public Playback $playback;

    /**
     * Playback control object.
     *
     * @return Playback
     */
    public function getPlayback(): Playback
    {
        return $this->playback;
    }
}
