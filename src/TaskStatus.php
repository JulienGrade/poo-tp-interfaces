<?php
namespace App;
trait TaskStatus
{
    private $statut;

    public function getStatut() {
        return $this->statut;
    }

    public function setStatut($statut) {
        $this->statut = $statut;
    }
}