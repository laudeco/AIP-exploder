<?php

require_once('./vendor/autoload.php');

include_once 'conf.php';

$serializer = JMS\Serializer\SerializerBuilder::create()->build();
/** @var \OpenAip\Aip\OpenAip $aip */
$aip = $serializer->deserialize(file_get_contents($aipPath), \OpenAip\Aip\OpenAip::class, 'xml');


/**
 * @var \OpenAip\Aip\Airspace $airspace
 */
foreach($aip->getAirspaces() as $airspaces){
    foreach($airspaces->getAirspaceByMaxFeet($highestAltitude)->groupByCategory() as $category => $categoryAirspaces){
        $serializedOpenAip = $serializer->serialize(new \OpenAip\Aip\OpenAip($aip->getVersion(), $aip->getFormat(), [$categoryAirspaces]), 'xml');
        file_put_contents($outputFolder.'/openAip_BE_'.strtolower($category).'.aip', $serializedOpenAip);
    }
}