<?php


namespace OpenAip\Aip;

use JMS\Serializer\Annotation as Serializer;

/**
 *
 * @package OpenAip\Aip
 * @author Laurent De Coninck <lau.deconinck@gmail.com>
 */
final class AltitudeLimit
{
    /**
     * @Serializer\XmlAttribute
     *
     * @var string
     */
    private $reference;

    /**
     * @Serializer\SerializedName("ALT")
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\Type("OpenAip\Aip\Altitude")
     *
     * @var Altitude
     */
    private $value;

    public function feet()
    {
        return $this->value->feet();
    }

}