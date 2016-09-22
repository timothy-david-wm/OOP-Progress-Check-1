<?php
  Abstract class NPC {
    public $Name;
    public $Health;
    private $Max_Health;
    public $Mana;
    public $Energy;
    private $Standard_Energy;
    public $Eqiptment = [];
    private $Abilities = [];


    public function  __construct($name){$this->Name = $name;}
    public function set_health($amount){$this->Health = $amount;}
    public function reset_health(){$this->Health = $Max_Health;}
    public function adjust_health($amount){$this->Health += $amount;}
    public function get_health(){return $this->Health;}
    public function set_mana($amount){$this->Mana = $amount;}
    public function adjust_mana($amount){$this->Mana += $amount;}
    public function get_mana(){return $this->Mana;}
    public function set_energy($amount){$this->Energy = $amount;}
    public function reset_energy($amount){$this->Energy = $Standard_Energy;}
    public function adjust_energy($amount){$this->Energy += $amount;}
    public function get_energy(){return $this->Energy;}
    public function set_equiptment($input){$this->Equiptment = $input;}
    public function gain_item($item){array_push($this->Equiptment, $item);}
    public function lose_item($item){unset($this->Equiptment[$item]);}
    public function use_item($item){return $Equiptment[$item];}
    public function get_equiptment(){return $this->Equiptment;}
    private function set_abilities($input){$this->Abilities = $input;}
    public function do_action($actionNum){return $this->Abilities[$actionNum];}
    public function learn_ability($ability){array_push($this->Abilities, $ability);}
    public function lose_ability($ability){unset($this->Abilities[$ability]);}
    private function get_abilities(){return $this->Abilities;}
  }

  class  Warrior extends NPC {
    public $Equiptment = ["Sword", "Sheild", "Armor"];
    public $Army;

    public  function __construct($name, $army){$this->Name = $name; $this->Army = $army;}
  }

  Abstract Class Monster extends NPC{
    private $monsterType = ["Generic"];
    private $basicLoreDifficulty = 0;
    public $basicLore; //Tell basic facts about the monster
    private $normalLoreDifficulty = 5;
    public $normalLore; //Tell normal facts about the monster
    private $exspertLoreDifficulty = 10;
    private $exspertLore; //Tell exspert facts about the monster
    public function  anylizeMonster($charicter){
        $Knowlage = rand(0, 10);

    	  if($Knowlage <= $this->basicLoreDifficulty){
    		      echo "This charicter no idea what it is";	}
    	  if($Knowlage >= $this->basicLoreDifficulty){
    		      echo $this->basicLore;	  }
    	  if($Knowlage >= $this->exspertLoreDifficulty){
    		     echo $this->normalLore;    }
    	  if($Knowlage >= $this->exspertLoreDifficulty){
    	      echo $this->exspertLore;    }
      }
  }

  Class pheonix extends Monster{
    private $monsterType = ["fireElemental", "bird", "Immortal"];
    public $basicLoreDifficulty = 1;
    public $basicLore = "The pheonix; a firebird";
    private $normalLoreDifficulty = 5;
    public $normalLore = "A beast that is spawned by raising from the ashes of its predicessor";
    private $exspertLoreDifficulty = 10;
    public $exspertLore = "It's said to live for thousands of years, and only one exists at a time, when killed it will rise again the next day";
    public  $Apearance = "absurdly large red bird with a long neck and brown belly";
    private $Abilities = ["breathFire", "fly"];
  }
 ?>
