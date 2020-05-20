<?php


namespace OpenAip\Aip;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("AIRSPACES")
 *
 * @package OpenAip\Aip
 * @author Laurent De Coninck <lau.deconinck@gmail.com>
 */
final class Airspaces implements \Countable
{
    /**
     * @Serializer\XmlList(inline=true, entry="ASP")
     * @Serializer\Type("array<OpenAip\Aip\Airspace>")
     *
     * @var Airspace[]
     */
    private $spaces;

    public function __construct(array $spaces = [])
    {
        $this->spaces = $spaces;
    }

    public function add(Airspace $airspace): self{
        return new self(array_merge($this->spaces, [$airspace]));
    }

    /**
     * @return array|Airspaces
     */
    public function groupByCategory(): array{
        /** @var Airspaces[] $categories */
        $categories = [];

        foreach($this->spaces as $airspace){
            $category = $airspace->getCategory();

            if(!isset($categories[$airspace->getCategory()])){
                $categories[$category] = new Airspaces();
            }

            $categories[$category] = $categories[$category]->add($airspace);
        }

        return $categories;
    }


    public function getAirspaceByMaxFeet(int $maxFeet): Airspaces{
        $return = new self();

        foreach($this->spaces as $space){
            if($space->lowLimit() > $maxFeet){
                continue;
            }

            $return = $return->add($space);
        }

        return $return;
    }


    public function count():int
    {
        return count($this->spaces);
    }
}