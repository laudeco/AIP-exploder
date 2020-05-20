<?php


namespace OpenAip\Aip;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("ALT")
 *
 * @package OpenAip\Aip
 * @author Laurent De Coninck <lau.deconinck@gmail.com>
 */
final class Altitude
{
    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     * @Serializer\SerializedName("UNIT")
     *
     * @var string
     */
    private $unit;

    /**
     * @Serializer\XmlValue
     * @Serializer\Type("integer")
     *
     * @var int
     */
    private $value;

    public function feet()
    {
        $multiplicator = $this->multiplicator();
        return $this->value*$multiplicator;
    }

    /**
     * @return int
     */
    private function multiplicator(): int
    {
        $multiplicator = 1;
        if ($this->isFlightLevel()) {
            $multiplicator = 100;
        }

        return $multiplicator;
    }

    private function isFlightLevel(): bool{
        return $this->unit === 'FL';
    }

}