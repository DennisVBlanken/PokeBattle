<?php

class Enemy {

    public function Enemy(){
        $this->name = "Charmeleon";
        $this->type = "Fire";
        $this->hp = 60;
        $this->health = $this->hp;
        $this->headButt = 10;
        $this->flare = 30;
        $this->weakness = "Water";
        $this->resistance = "Lightning";
    }
}