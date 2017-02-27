<?php
namespace rca;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
 class wild extends PluginBase implements  Listener {
	
     public function onEnable(){
		$this->getLogger()->info(TF::AQUA . "Enabled Plugin RCA by SinlesFlyer");
	}

    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        switch(strtolower($command->getName())){
            case 'nothing':
                return true;
                break;
            case 'rca':
                if(count($args) < 2){
                    $sender->sendMessage($this->prefix . "Please enter a player and a command.");
                    return true;
                }
                $player = $this->getServer()->getPlayer(array_shift($args));
                if($player instanceof Player){
                    $this->getServer()->dispatchCommand($player, trim(implode(" ", $args)));
                    return true;
                } else {
                    $sender->sendMessage($this->prefix . "Player not found.");
                    return true;
                }
?>
