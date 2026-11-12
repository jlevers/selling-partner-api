<?php

declare(strict_types=1);

namespace SellingPartnerApi\Tests\Seller\FBAOutboundV20200701\Dto;

use PHPUnit\Framework\TestCase;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\TrackingEvent;

class TrackingEventTest extends TestCase
{
    public function test_deserialize_tracking_address_without_city_and_state(): void
    {
        $event = TrackingEvent::deserialize([
            'eventDate' => '2026-11-11T12:00:00Z',
            'eventAddress' => ['country' => 'US'],
            'eventCode' => 'EVENT_101',
            'eventDescription' => 'Package received',
        ]);

        $this->assertNull($event->eventAddress->city);
        $this->assertNull($event->eventAddress->state);
        $this->assertSame('US', $event->eventAddress->country);
    }

    public function test_deserialize_tracking_address_without_city(): void
    {
        $event = TrackingEvent::deserialize([
            'eventDate' => '2026-11-11T12:00:00Z',
            'eventAddress' => ['state' => 'WA', 'country' => 'US'],
            'eventCode' => 'EVENT_101',
            'eventDescription' => 'Package received',
        ]);

        $this->assertNull($event->eventAddress->city);
        $this->assertSame('WA', $event->eventAddress->state);
        $this->assertSame('US', $event->eventAddress->country);
    }

    public function test_deserialize_tracking_address_without_state(): void
    {
        $event = TrackingEvent::deserialize([
            'eventDate' => '2026-11-11T12:00:00Z',
            'eventAddress' => ['city' => 'Seattle', 'country' => 'US'],
            'eventCode' => 'EVENT_101',
            'eventDescription' => 'Package received',
        ]);

        $this->assertSame('Seattle', $event->eventAddress->city);
        $this->assertNull($event->eventAddress->state);
        $this->assertSame('US', $event->eventAddress->country);
    }

    public function test_deserialize_complete_tracking_address(): void
    {
        $event = TrackingEvent::deserialize([
            'eventDate' => '2026-11-11T12:00:00Z',
            'eventAddress' => ['city' => 'Seattle', 'state' => 'WA', 'country' => 'US'],
            'eventCode' => 'EVENT_101',
            'eventDescription' => 'Package received',
        ]);

        $this->assertSame('Seattle', $event->eventAddress->city);
        $this->assertSame('WA', $event->eventAddress->state);
        $this->assertSame('US', $event->eventAddress->country);
    }
}
