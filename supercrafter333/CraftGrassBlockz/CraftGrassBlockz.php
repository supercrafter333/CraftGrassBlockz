<?php

namespace supercrafter333\CraftGrassBlockz;

use pocketmine\event\Listener;
use pocketmine\inventory\MultiRecipe;
use pocketmine\inventory\ShapedRecipe;
use pocketmine\inventory\ShapelessRecipe;
use pocketmine\item\Item;
use pocketmine\plugin\PluginBase;

class CraftGrassBlockz extends PluginBase implements Listener {

    public function onEnable()
    {
        $grass = Item::get(2);

        $recipe = new ShapedRecipe(
            ["XYX", "XZX", "XXX"],
            ["X" => Item::get(Item::AIR), "Y" => Item::get(31, 1), "Z" => Item::get(Item::DIRT)],
            [$grass]
        );
        $this->getServer()->getCraftingManager()->registerShapedRecipe($recipe);
        $recipe2 = new ShapedRecipe(
            ["XXY", "XXZ", "XXX"],
            ["X" => Item::get(Item::AIR), "Y" => Item::get(31, 1), "Z" => Item::get(Item::DIRT)],
            [$grass]
        );
        $this->getServer()->getCraftingManager()->registerShapedRecipe($recipe2);
        $recipe3 = new ShapedRecipe(
            ["YXX", "ZXX", "XXX"],
            ["X" => Item::get(Item::AIR), "Y" => Item::get(31, 1), "Z" => Item::get(Item::DIRT)],
            [$grass]
        );
        $this->getServer()->getCraftingManager()->registerShapedRecipe($recipe3);
        $recipe4 = new ShapedRecipe(
            ["XXX", "XYX", "XZX"],
            ["X" => Item::get(Item::AIR), "Y" => Item::get(31, 1), "Z" => Item::get(Item::DIRT)],
            [$grass]
        );
        $this->getServer()->getCraftingManager()->registerShapedRecipe($recipe4);
        $recipe5 = new ShapedRecipe(
            ["XXX", "YXX", "ZXX"],
            ["X" => Item::get(Item::AIR), "Y" => Item::get(31, 1), "Z" => Item::get(Item::DIRT)],
            [$grass]
        );
        $this->getServer()->getCraftingManager()->registerShapedRecipe($recipe5);
        $recipe6 = new ShapedRecipe(
            ["XXX", "XXY", "XXZ"],
            ["X" => Item::get(Item::AIR), "Y" => Item::get(31, 1), "Z" => Item::get(Item::DIRT)],
            [$grass]
        );
        $this->getServer()->getCraftingManager()->registerShapedRecipe($recipe6);
    }
}
