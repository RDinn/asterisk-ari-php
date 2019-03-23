<?php

/**
 * @author Lukas Stermann
 * @copyright ng-voice GmbH (2018)
 */

declare(strict_types=1);

namespace NgVoice\AriClient\Tests\Model;


use NgVoice\AriClient\Model\{Channel, Message\ChannelTalkingFinished};
use PHPUnit\Framework\TestCase;
use function NgVoice\AriClient\Tests\mapMessageParametersToAriObject;

/**
 * Class ChannelTalkingFinishedTest
 *
 * @package NgVoice\AriClient\Tests\Model\Message
 */
final class ChannelTalkingFinishedTest extends TestCase
{
    /**
     * @throws \JsonMapper_Exception
     */
    public function testParametersMappedCorrectly(): void
    {
        $exampleChannel = [
            'name' => 'SIP/foo-0000a7e3',
            'language' => 'en',
            'accountcode' => 'TestAccount',
            'channelvars' => [
                'testVar' => 'correct',
                'testVar2' => 'nope'
            ],
            'caller' => [
                'name' => 'ExampleName',
                'number' => 'ExampleNumber'
            ],
            'creationtime' => '2016-12-20 13:45:28 UTC',
            'state' => 'Up',
            'connected' => [
                'name' => 'ExampleName2',
                'number' => 'ExampleNumber2'
            ],
            'dialplan' => [
                'context' => 'ExampleContext',
                'exten' => 'ExampleExten',
                'priority' => '3'
            ],
            'id' => '123456'
        ];

        /**
         * @var ChannelTalkingFinished $channelTalkingFinished
         */
        $channelTalkingFinished = mapMessageParametersToAriObject(
            'ChannelTalkingFinished',
            [
                'channel' => $exampleChannel,
                'duration' => 44
            ]
        );
        $this->assertInstanceOf(Channel::class, $channelTalkingFinished->getChannel());
        $this->assertSame(44, $channelTalkingFinished->getDuration());
    }
}