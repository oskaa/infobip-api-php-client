<?php
namespace infobip\api\model\sms\mt\send\binary;
use JsonSerializable;

/**
 * This is a generated class and is not intended for modification!
 * TODO: Point to Github contribution instructions
 */
class BinaryContenti implements JsonSerializable
{
    private $dataCoding;
    private $hex;
    private $esmClass;


    public function setDataCoding($dataCoding)
    {
        $this->dataCoding = $dataCoding;
    }

    public function getDataCoding()
    {
        return $this->dataCoding;
    }

    public function setHex($hex)
    {
        $this->hex = $hex;
    }

    public function getHex()
    {
        return $this->hex;
    }

    public function setEsmClass($esmClass)
    {
        $this->esmClass = $esmClass;
    }

    public function getEsmClass()
    {
        return $this->esmClass;
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