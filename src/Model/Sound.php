<?php

/**
 * @author Lukas Stermann
 * @copyright ng-voice GmbH (2018)
 */

namespace NgVoice\AriClient\Model;


/**
 * A media file that may be played back.
 *
 * @package AriStasisApp\Model
 */
class Sound
{
    /**
     * @var string Text description of the sound, usually the words spoken.
     */
    private $text;

    /**
     * @required
     * @var string Sound's identifier.
     */
    private $id;

    /**
     * @required
     * @var FormatLangPair[] The formats and languages in which this sound is available.
     */
    private $formats;

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return FormatLangPair[]
     */
    public function getFormats(): array
    {
        return $this->formats;
    }

    /**
     * @param FormatLangPair[] $formats
     */
    public function setFormats(array $formats): void
    {
        $this->formats = $formats;
    }
}