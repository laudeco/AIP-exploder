<?php


namespace OpenAip\Aip;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("ID")
 *
 * @package OpenAip\Aip
 * @author Laurent De Coninck <lau.deconinck@gmail.com>
 */
final class Id
{

    /**
     * @Serializer\Type("integer")
     * @Serializer\XmlValue
     *
     * @var string
     */
    private $value;
}