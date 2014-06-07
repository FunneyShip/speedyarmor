<?php
/*
__PocketMine Plugin__
class=SpeedyArmor
name=SpeedyArmor
author=hama
version=1
apiversion=12,13
*/
class SpeedyArmor implements Plugin{
    private $api;

    public function __construct(ServerAPI $api, $server = false)
    {
        $this->api = $api;
    }

    public function init()
    {
     if(!file_exists($this->api->plugin->configPath($this) . "config.yml"))
        {
            $this->CONFIG = new Config($this->api->plugin->configPath($this) . "config.yml", CONFIG_YAML, array(
            "blue" => 264,
            "yellow" => 266,
            "gray" => 265,
            "brown" => 334,
            "red" => 331,
            ));
            }
            $this->api->addHandler("player.equipment.change", array($this, "EventHandler"));
            }
            
             public function EventHandler($data, $event,$player)
    {
        switch($event)
        {
            case "player.equipment.change":

                if($data["264"]->getID() == $this->CONFIG["blue"])
                {
      $player->setArmor(0,$this->getArmor(310));
      $player->setArmor(1,$this->getArmor(311));
      $player->setArmor(2,$this->getArmor(312));
      $player->setArmor(3,$this->getArmor(313));
                
                }
                  break;
                  
                  
                  case "player.equipment.change":

                if($data["266"]->getID() == $this->CONFIG["yellow"])
                {
      $player->setArmor(0,$this->getArmor(314));
      $player->setArmor(1,$this->getArmor(315));
      $player->setArmor(2,$this->getArmor(316));
      $player->setArmor(3,$this->getArmor(317));
                }
                  break;
                 

                  case "player.equipment.change":

                if($data["265"]->getID() == $this->CONFIG["gray"])
                {
      $player->setArmor(0,$this->getArmor(306));
      $player->setArmor(1,$this->getArmor(307));
      $player->setArmor(2,$this->getArmor(308));
      $player->setArmor(3,$this->getArmor(309));
                }
            
                  break;
                  
                   case "player.equipment.change":

                if($data["334"]->getID() == $this->CONFIG["brown"])
                {
      $player->setArmor(0,$this->getArmor(298));
      $player->setArmor(1,$this->getArmor(299));
      $player->setArmor(2,$this->getArmor(300));
      $player->setArmor(3,$this->getArmor(301));
                }
                
                  break;
                  
                   case "player.equipment.change":

                if($data["331"]->getID() == $this->CONFIG["red"])
                {
      $player->setArmor(0,$this->getArmor(310));
      $player->setArmor(1,$this->getArmor(307));
      $player->setArmor(2,$this->getArmor(316));
      $player->setArmor(3,$this->getArmor(301));
                }
                
                  break;
                  
        }
    }
                  
          public function __destruct(){
    }
                
}          
                
?>
