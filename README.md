[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Poke/functions?utm_source=RapidAPIGitHub_PokeFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Poke Package
Poke
* Domain: [Poke API](http://pokeapi.co)

## How to get credentials: 
0. Poke API does not require key for the moment

## Poke.getBerryByName
Returns information about berry

| Field    | Type  | Description
|----------|-------|----------
| berryName| String| Id or name of the berry

## Poke.getBerryFirmnessByName
Returns information about berries with provided firmness

| Field        | Type  | Description
|--------------|-------|----------
| berryFirmness| String| Id or name of the berry firmness

## Poke.getBerryFlavorByName
Returns information about berries with provided flavor

| Field      | Type  | Description
|------------|-------|----------
| berryFlavor| String| Id or name of the berry flavor

## Poke.getContestTypeByName
Contest types are categories judges used to weigh a Pokémon's condition in Pokémon contests. 

| Field      | Type  | Description
|------------|-------|----------
| contestName| String| Id or name of contest type

## Poke.getContestEffectById
Returns contest effect according to provided Id

| Field    | Type  | Description
|----------|-------|----------
| contestId| Number| Id of the contest type

## Poke.getSuperContestEffectById
Returns super contest effect according to provided Id

| Field    | Type  | Description
|----------|-------|----------
| contestId| Number| Id of the contest type

## Poke.getEncounterMethodByName
Methods by which the player might can encounter Pokémon in the wild, e.g., walking in tall grass.

| Field     | Type  | Description
|-----------|-------|----------
| methodName| String| Id or name of the method

## Poke.getEncounterConditionByName
Conditions which affect what pokemon might appear in the wild, e.g., day or night.

| Field        | Type  | Description
|--------------|-------|----------
| conditionName| String| Id or name of the condition

## Poke.getEncounterConditionValueByName
Encounter condition values are the various states that an encounter condition can have, i.e., time of day can be either day or night.

| Field             | Type  | Description
|-------------------|-------|----------
| conditionValueName| String| Id or name of the condition value

## Poke.getEvolutionChainById
Evolution chains are essentially family trees. They start with the lowest stage within a family and detail evolution conditions for each as well as Pokémon they can evolve into up through the hierarchy.

| Field  | Type  | Description
|--------|-------|----------
| chainId| Number| Id of the evolution chain

## Poke.getEvolutionTriggerByName
Evolution triggers are the events and conditions that cause a Pokémon to evolve. 

| Field      | Type  | Description
|------------|-------|----------
| triggerName| String| Id or name of the evolution trigger

## Poke.getGenerationByName
A generation is a grouping of the Pokémon games that separates them based on the Pokémon they include. In each generation, a new set of Pokémon, Moves, Abilities and Types that did not exist in the previous generation are released.

| Field         | Type  | Description
|---------------|-------|----------
| generationName| String| Id or name of the generation

## Poke.getPokedexByName
A Pokédex is a handheld electronic encyclopedia device; one which is capable of recording and retaining information of the various Pokémon in a given region with the exception of the national dex and some smaller dexes related to portions of a region.

| Field      | Type  | Description
|------------|-------|----------
| pokedexName| String| Id or name of the pokedex

## Poke.getVersionByName
Versions of the games, e.g., Red, Blue or Yellow.

| Field      | Type  | Description
|------------|-------|----------
| versionName| String| Id or name of the version

## Poke.getVersionGroupByName
Version groups categorize highly similar versions of the games.

| Field           | Type  | Description
|-----------------|-------|----------
| versionGroupName| String| Id or name of the version group

## Poke.getItemByName
An item is an object in the games which the player can pick up, keep in their bag, and use in some manner. They have various uses, including healing, powering up, helping catch Pokémon, or to access a new area.

| Field   | Type  | Description
|---------|-------|----------
| itemName| String| Id or name of the item

## Poke.getItemAttributeByName
Item attributes define particular aspects of items, e.g. "usable in battle" or "consumable".

| Field            | Type  | Description
|------------------|-------|----------
| itemAttributeName| String| Id or name of the item attribute

## Poke.getItemCategoryByName
Item categories determine where items will be placed in the players bag.

| Field           | Type  | Description
|-----------------|-------|----------
| itemCategoryName| String| Id or name of the item category

## Poke.getItemFlingEffectByName
Item categories determine where items will be placed in the players bag.

| Field              | Type  | Description
|--------------------|-------|----------
| itemFlingEffectName| String| Id or name of the item fling effect

## Poke.getItemPocketByName
Pockets within the players bag used for storing items by category.

| Field         | Type  | Description
|---------------|-------|----------
| itemPocketName| String| Id or name of the item pocket

## Poke.getMachineById
Machines are the representation of items that teach moves to Pokémon. They vary from version to version, so it is not certain that one specific TM or HM corresponds to a single Machine.

| Field    | Type  | Description
|----------|-------|----------
| machineId| Number| Id of the machine

## Poke.getMoveByName
Moves are the skills of Pokémon in battle. In battle, a Pokémon uses one move each turn. Some moves (including those learned by Hidden Machine) can be used outside of battle as well, usually for the purpose of removing obstacles or exploring new areas.

| Field   | Type  | Description
|---------|-------|----------
| moveName| String| Id or name of the move

## Poke.getMoveAilmentByName
Move Ailments are status conditions caused by moves used during battle.

| Field          | Type  | Description
|----------------|-------|----------
| moveAilmentName| String| Id or name of the move ailment

## Poke.getMoveBattleStyleByName
Styles of moves when used in the Battle Palace.

| Field              | Type  | Description
|--------------------|-------|----------
| moveBattleStyleName| String| Id or name of the move battle style

## Poke.getMoveCategoryByName
Very general categories that loosely group move effects.

| Field           | Type  | Description
|-----------------|-------|----------
| moveCategoryName| String| Id or name of the move category

## Poke.getMoveDamageClassByName
Damage classes moves can have, e.g. physical, special, or non-damaging.

| Field              | Type  | Description
|--------------------|-------|----------
| moveDamageClassName| String| Id or name of the move damage class

## Poke.getMoveLearnMethodByName
Methods by which Pokémon can learn moves.

| Field              | Type  | Description
|--------------------|-------|----------
| moveLearnMethodName| String| Id or name of the move learn method

## Poke.getMoveTargetByName
Targets moves can be directed at during battle. Targets can be Pokémon, environments or even other moves.

| Field         | Type  | Description
|---------------|-------|----------
| moveTargetName| String| Id or name of the move target

## Poke.getLocationByName
Locations that can be visited within the games. Locations make up sizable portions of regions, like cities or routes.

| Field       | Type  | Description
|-------------|-------|----------
| locationName| String| Id or name of the location

## Poke.getLocationAreaByName
Location areas are sections of areas, such as floors in a building or cave. Each area has its own set of possible Pokémon encounters.

| Field           | Type  | Description
|-----------------|-------|----------
| locationAreaName| String| Id or name of the location area

## Poke.getPalParkAreaByName
Areas used for grouping Pokémon encounters in Pal Park. They're like habitats that are specific to Pal Park.

| Field          | Type  | Description
|----------------|-------|----------
| palParkAreaName| String| Id or name of the Pal Park area

## Poke.getRegionByName
A region is an organized area of the Pokémon world. Most often, the main difference between regions is the species of Pokémon that can be encountered within them.

| Field     | Type  | Description
|-----------|-------|----------
| regionName| String| Id or name of the region

## Poke.getAbilityByName
Abilities provide passive effects for Pokémon in battle or in the overworld. Pokémon have multiple possible abilities but can have only one ability at a time.

| Field      | Type  | Description
|------------|-------|----------
| abilityName| String| Id or name of the ability

## Poke.getCharacteristicById
Characteristics indicate which stat contains a Pokémon's highest IV. A Pokémon's Characteristic is determined by the remainder of its highest IV divided by 5 (gene_modulo).

| Field           | Type  | Description
|-----------------|-------|----------
| characteristicId| Number| Id of the characteristic

## Poke.getGenderByName
Genders were introduced in Generation II for the purposes of breeding Pokémon but can also result in visual differences or even different evolutionary lines.

| Field     | Type  | Description
|-----------|-------|----------
| genderName| String| Id or name of the gender

## Poke.getEggGroupByName
Egg Groups are categories which determine which Pokémon are able to interbreed. Pokémon may belong to either one or two Egg Groups. 

| Field       | Type  | Description
|-------------|-------|----------
| eggGroupName| String| Id or name of the egg group

## Poke.getGrowthRateByName
Growth rates are the speed with which Pokémon gain levels through experience. 

| Field         | Type  | Description
|---------------|-------|----------
| growthRateName| String| Id or name of the growth rate

## Poke.getNatureByName
Natures influence how a Pokémon's stats grow.

| Field     | Type  | Description
|-----------|-------|----------
| natureName| String| Id or name of the nature

## Poke.getPokeathlonStatByName
Pokeathlon Stats are different attributes of a Pokémon's performance in Pokéathlons. In Pokéathlons, competitions happen on different courses; one for each of the different Pokéathlon stats.

| Field             | Type  | Description
|-------------------|-------|----------
| pokeathlonStatName| String| Id or name of the pokeathlon stat

## Poke.getPokemonByName
Pokémon are the creatures that inhabit the world of the Pokémon games. They can be caught using Pokéballs and trained by battling with other Pokémon.

| Field      | Type  | Description
|------------|-------|----------
| pokemonName| String| Id or name of the pokemon

## Poke.getPokemonColorByName
Colors used for sorting Pokémon in a Pokédex. The color listed in the Pokédex is usually the color most apparent or covering each Pokémon's body. No orange category exists; Pokémon that are primarily orange are listed as red or brown.

| Field           | Type  | Description
|-----------------|-------|----------
| pokemonColorName| String| Id or name of the pokemon color

## Poke.getPokemonFormByName
Some Pokémon have the ability to take on different forms. At times, these differences are purely cosmetic and have no bearing on the difference in the Pokémon's stats from another; however, several Pokémon differ in stats (other than HP), type, and Ability depending on their form.

| Field          | Type  | Description
|----------------|-------|----------
| pokemonFormName| String| Id or name of the pokemon form

## Poke.getPokemonHabitatByName
Habitats are generally different terrain Pokémon can be found in but can also be areas designated for rare or legendary Pokémon.

| Field             | Type  | Description
|-------------------|-------|----------
| pokemonHabitatName| String| Id or name of the pokemon habitat

## Poke.getPokemonShapeByName
Shapes used for sorting Pokémon in a Pokédex.

| Field           | Type  | Description
|-----------------|-------|----------
| pokemonShapeName| String| Id or name of the pokemon shape

## Poke.getPokemonSpeciesByName
A Pokémon Species forms the basis for at least one Pokémon. Attributes of a Pokémon species are shared across all varieties of Pokémon within the species. A good example is Wormadam; Wormadam is the species which can be found in three different varieties, Wormadam-Trash, Wormadam-Sandy and Wormadam-Plant.

| Field             | Type  | Description
|-------------------|-------|----------
| pokemonSpeciesName| String| Id or name of the pokemon species

## Poke.getStatByName
Stats determine certain aspects of battles. Each Pokémon has a value for each stat which grows as they gain levels and can be altered momentarily by effects in battles.

| Field   | Type  | Description
|---------|-------|----------
| statName| String| Id or name of the stat

## Poke.getTypeByName
Types are properties for Pokémon and their moves. Each type has three properties: which types of Pokémon it is super effective against, which types of Pokémon it is not very effective against, and which types of Pokémon it is completely ineffective against.

| Field   | Type  | Description
|---------|-------|----------
| typeName| String| Id or name of the type

## Poke.getLanguageByName
Languages for translations of API resource information.

| Field       | Type  | Description
|-------------|-------|----------
| languageName| String| Id or name of the language

