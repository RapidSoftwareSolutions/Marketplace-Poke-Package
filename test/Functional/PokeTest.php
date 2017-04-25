<?php

namespace Test\Functional;

require_once(__DIR__ . '/../../src/Models/checkRequest.php');
class PokeTest extends BaseTestCase {

    public function testListMetrics() {

        $routes = [
            'getLanguageByName',
            'getTypeByName',
            'getStatByName',
            'getPokemonSpeciesByName',
            'getPokemonShapeByName',
            'getPokemonHabitatByName',
            'getPokemonFormByName',
            'getPokemonColorByName',
            'getPokemonByName',
            'getPokeathlonStatByName',
            'getNatureByName',
            'getGrowthRateByName',
            'getEggGroupByName',
            'getGenderByName',
            'getCharacteristicById',
            'getAbilityByName',
            'getRegionByName',
            'getPalParkAreaByName',
            'getLocationAreaByName',
            'getLocationByName',
            'getMoveTargetByName',
            'getMoveLearnMethodByName',
            'getMoveDamageClassByName',
            'getMoveCategoryByName',
            'getMoveBattleStyleByName',
            'getMoveAilmentByName',
            'getMoveByName',
            'getMachineById',
            'getItemPocketByName',
            'getItemFlingEffectByName',
            'getItemCategoryByName',
            'getItemAttributeByName',
            'getItemByName',
            'getVersionGroupByName',
            'getVersionByName',
            'getPokedexByName',
            'getGenerationByName',
            'getEvolutionTriggerByName',
            'getEvolutionChainById',
            'getEncounterConditionValueByName',
            'getEncounterConditionByName',
            'getEncounterMethodByName',
            'getSuperContestEffectById',
            'getContestEffectById',
            'getContestTypeByName',
            'getBerryFlavorByName',
            'getBerryFirmnessByName',
            'getBerryByName'

        ];

        foreach($routes as $file) {
            $var = '{  
                    }';
            $post_data = json_decode($var, true);

            $response = $this->runApp('POST', '/api/Poke/'.$file, $post_data);

            $this->assertEquals(200, $response->getStatusCode(), 'Error in '.$file.' method');
        }
    }

}
