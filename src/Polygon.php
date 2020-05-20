<?php


namespace OpenAip\Aip;
use JMS\Serializer\Annotation as Serializer;

/**
 * @author Laurent De Coninck <lau.deconinck@gmail.com>
 */
final class Polygon
{
    /**
     * @Serializer\XmlValue(cdata=false)
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $value;

}