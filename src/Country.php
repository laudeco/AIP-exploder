<?php


namespace OpenAip\Aip;


use JMS\Serializer\Annotation as Serializer;

/**
 * @package OpenAip\Aip
 * @author Laurent De Coninck <lau.deconinck@gmail.com>
 */
final class Country
{
    /**
     * @Serializer\XmlValue(cdata=false)
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $value;

}