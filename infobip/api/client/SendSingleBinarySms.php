<?php

namespace infobip\api\client;

use infobip\api\model\sms\mt\send\binary\SMSBinaryRequest;
use infobip\api\AbstractApiClient;
use infobip\api\model\sms\mt\send\SMSResponse;

/**
 * This is a generated class and is not intended for modification!
 * TODO: Point to Github contribution instructions
 */
class SendSingleBinarySms extends AbstractApiClient
{

    public function __construct($configuration)
    {
        parent::__construct($configuration);
    }

    /**
     * @param SMSBinaryRequest $body
     * @return SMSResponse
     */
    public function execute(SMSBinaryRequest $body)
    {
        $restPath = $this->getRestUrl("/sms/1/binary/single");
        $content = $this->executePOST($restPath, null, $body);
        return $this->map(json_decode($content), SMSResponse::class);
    }

}