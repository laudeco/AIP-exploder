<?php


namespace OpenAip\Aip;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("ASP")
 *
 * @package OpenAip\Aip
 * @author Laurent De Coninck <lau.deconinck@gmail.com>
 */
final class Airspace
{

    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CATEGORY")
     *
     * @var string
     */
    private $category;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\Type("OpenAip\Aip\Version")
     * @Serializer\SerializedName("VERSION")
     *
     * @var Version
     */
    private $version;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\Type("OpenAip\Aip\Id")
     * @Serializer\SerializedName("ID")
     *
     * @var Id
     */
    private $id;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\Type("OpenAip\Aip\Name")
     * @Serializer\SerializedName("NAME")
     *
     * @var Name
     */
    private $name;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\Type("OpenAip\Aip\Country")
     * @Serializer\SerializedName("COUNTRY")
     *
     * @var Name
     */
    private $country;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\Type("OpenAip\Aip\AltitudeLimit")
     * @Serializer\SerializedName("ALTLIMIT_TOP")
     *
     * @var AltitudeLimit
     */
    private $altitudeTop;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\Type("OpenAip\Aip\AltitudeLimit")
     * @Serializer\SerializedName("ALTLIMIT_BOTTOM")
     *
     * @var AltitudeLimit
     */
    private $altitudeBottom;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\Type("OpenAip\Aip\Geometry")
     * @Serializer\SerializedName("GEOMETRY")
     *
     * @var string
     */
    private $geometry;

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    public function lowLimit(): int{
        return $this->altitudeBottom->feet();
    }



}