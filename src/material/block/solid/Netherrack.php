<?php

/*

           -
         /   \
      /         \
   /   PocketMine  \
/          MP         \
|\     @shoghicp     /|
|.   \           /   .|
| ..     \   /     .. |
|    ..    |    ..    |
|       .. | ..       |
\          |          /
   \       |       /
      \    |    /
         \ | /

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Lesser General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.


*/

class NetherrackBlock extends SolidBlock{
	public function __construct(){
		parent::__construct(NETHERRACK, 0, "Netherrack");
	}
	
	public function getBreakTime(Item $item, Player $player){
		if(($player->gamemode & 0x01) === 0x01){
			return 0.20;
		}		
		switch($item->isPickaxe()){
			case 5:
				return 0.1;
			case 4:
				return 0.1;
			case 3:
				return 0.15;
			case 2:
				return 0.05;
			case 1:
				return 0.3;
			default:
				return 2;
		}
	}

	public function getDrops(Item $item, Player $player){
		if($item->isPickaxe() >= 1){
			return array(
				array(NETHERRACK, 0, 1),
			);
		}else{
			return array();
		}
	}
}