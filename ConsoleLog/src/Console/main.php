<?php

namespace Console;

//Basis
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\inventory;

//Event
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\player\PlayerDropEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerItemConsumeEvent;
use pocketmine\event\player\PlayerExhaustEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\player\PlayerDropItemEvent;
use pocketmine\event\player\PlayerDeathEvent;

//Item - Enchantment - Effekte
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\enchantment\EnchantmentInstance;
use pocketmine\item\Item;

//utils
use pocketmine\utils\TextFormat as C;
use pocketmine\utils\Config;
use pocketmine\math\Vector3;

//Commands
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

// FormAPI
use jojoe77777\FormAPI\SimpleForm;
use jojoe77777\FormAPI\CustomForm;
use joe77777\FormAPI;

//Sounds
use pocketmine\level\Sound\BlazeShootSound;
use pocketmine\level\Sound\AnvilFallSound;
use pocketmine\level\particle\DestroyBlockParticle;

//ColorGun
use pocketmine\event\entity\ProjectileHitBlockEvent;
use pocketmine\event\entity\ProjectileHitEntityEvent;
use pocketmine\event\entity\ProjectileLaunchEvent;

//Block
use pocketmine\block\Block;
use pocketmine\item\SnowBall;

//Scoreboard

use pocketmine\network\mcpe\protocol\RemoveObjectivePacket;
use pocketmine\network\mcpe\protocol\SetDisplayObjectivePacket;
use pocketmine\network\mcpe\protocol\SetScorePacket;
use pocketmine\network\mcpe\protocol\types\ScorePacketEntry;

class main extends PluginBase implements Listener{

  public $prefix = "§8[§c§lConsoleLoader§r§8]";


  public function onLoad(){
    $this->getLogger()->info("Das Plugin wird geladen!");
  }

  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("Das Plugin wurde nun aktiviert!");
  }

  public function onDisable(){
    $this->getLogger()->info("Das Plugin wurde nun deaktiviert!");
  }
}
