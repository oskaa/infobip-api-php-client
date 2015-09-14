<?php
namespace infobip\api\model\sms\mt\send\textual;
use JsonSerializable;

/**
 * This is a generated class and is not intended for modification!
 * TODO: Point to Github contribution instructions
 */
class SMSMultiTextualRequest implements JsonSerializable
{
    private $bulkId;
    /**
     * @var \infobip\api\model\sms\mt\send\Message[]
     */
    private $messages;


    public function setBulkId($bulkId)
    {
        $this->bulkId = $bulkId;
    }

    public function getBulkId()
    {
        return $this->bulkId;
    }

    /**
     * @param \infobip\api\model\sms\mt\send\Message[] $messages
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }

    /**
     * @return \infobip\api\model\sms\mt\send\Message[]
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

?>