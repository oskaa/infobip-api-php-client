<?php
namespace infobip\api\model\nc\logs;
use JsonSerializable;

/**
 * This is a generated class and is not intended for modification!
 * TODO: Point to Github contribution instructions
 */
class NumberContextLogsResponse implements JsonSerializable
{
    /**
     * @var \infobip\api\model\nc\logs\NumberContextLog[]
     */
    private $logs;


    /**
     * @param \infobip\api\model\nc\logs\NumberContextLog[] $logs
     */
    public function setLogs($logs)
    {
        $this->logs = $logs;
    }

    /**
     * @return \infobip\api\model\nc\logs\NumberContextLog[]
     */
    public function getLogs()
    {
        return $this->logs;
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