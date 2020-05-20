<?php


namespace OpenAip\Aip;


use JMS\Serializer\Annotation as Serializer;
use Traversable;

/**
 * @Serializer\XmlRoot("OPENAIP")
 *
 * @package OpenAip\Aip
 * @author Laurent De Coninck <lau.deconinck@gmail.com>
 */
final class OpenAip
{

    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     * @Serializer\SerializedName("VERSION")
     *
     * @var string
     */
    private $version;

    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     * @Serializer\SerializedName("DATAFORMAT")
     *
     * @var string
     */
    private $format;

    /**
     * @Serializer\XmlList(inline=true, entry="AIRSPACES")
     * @Serializer\Type("array<OpenAip\Aip\Airspaces>")
     *
     * @var Airspace[]
     */
    private $airspaces;

    public function __construct(string $version, string $format, array $airspaces = [])
    {
        $this->format = $format;
        $this->version = $version;

        $this->airspaces = $airspaces;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * @return Airspaces[]
     */
    public function getAirspaces(): array
    {
        return $this->airspaces;
    }

}