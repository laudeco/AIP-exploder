<?php


namespace OpenAip\Aip;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("VERSION")
 *
 * @package OpenAip\Aip
 * @author Laurent De Coninck <lau.deconinck@gmail.com>
 */
final class Version
{
    /**
     * @Serializer\XmlValue(cdata=false)
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $value;

}