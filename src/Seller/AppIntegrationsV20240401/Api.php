<?php

namespace SellingPartnerApi\Seller\AppIntegrationsV20240401;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\AppIntegrationsV20240401\Dto\CreateNotificationRequest;
use SellingPartnerApi\Seller\AppIntegrationsV20240401\Dto\DeleteNotificationsRequest;
use SellingPartnerApi\Seller\AppIntegrationsV20240401\Dto\RecordActionFeedbackRequest;
use SellingPartnerApi\Seller\AppIntegrationsV20240401\Requests\CreateNotification;
use SellingPartnerApi\Seller\AppIntegrationsV20240401\Requests\DeleteNotifications;
use SellingPartnerApi\Seller\AppIntegrationsV20240401\Requests\RecordActionFeedback;

class Api extends BaseResource
{
    /**
     * @param  CreateNotificationRequest  $createNotificationRequest  The request for the `createNotification` operation.
     */
    public function createNotification(CreateNotificationRequest $createNotificationRequest): Response
    {
        $request = new CreateNotification($createNotificationRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  DeleteNotificationsRequest  $deleteNotificationsRequest  The request for the `deleteNotifications` operation.
     */
    public function deleteNotifications(DeleteNotificationsRequest $deleteNotificationsRequest): Response
    {
        $request = new DeleteNotifications($deleteNotificationsRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $notificationId  A `notificationId` uniquely identifies a notification.
     * @param  RecordActionFeedbackRequest  $recordActionFeedbackRequest  The request for the `recordActionFeedback` operation.
     */
    public function recordActionFeedback(
        string $notificationId,
        RecordActionFeedbackRequest $recordActionFeedbackRequest,
    ): Response {
        $request = new RecordActionFeedback($notificationId, $recordActionFeedbackRequest);

        return $this->connector->send($request);
    }
}
