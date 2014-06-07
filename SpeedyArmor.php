<?php
/*
_Pocketmine Plugin_
name=SpeedyAromor
description=the speedest way to change armor
version=0.1
auther=hamachichi
class=armor
apiversion=12 13
*/

class armor implements Plugin
{
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
                     }
                
                  }
          public function __destruct(){
    }
                
}          
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
