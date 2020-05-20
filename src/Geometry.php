<?php


namespace OpenAip\Aip;
use JMS\Serializer\Annotation as Serializer;

/**
 * @author Laurent De Coninck <lau.deconinck@gmail.com>
 */
final class Geometry
{
    /**
     * @Serializer\SerializedName("POLYGON")
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\Type("OpenAip\Aip\Polygon")
     *
     * @var Polygon
     */
    private $polygon;

}