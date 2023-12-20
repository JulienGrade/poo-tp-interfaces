<?php
namespace App;
class MyTask extends TaskBase
{
    use TaskStatus;

    public function create(array $donnees) {
        // Logique de création d'une tâche
    }

    public function read() {
        // Logique de lecture d'une tâche
    }

    public function update(array $donnees) {
        // Logique de mise à jour d'une tâche
    }

    public function delete() {
        // Logique de suppression d'une tâche
    }
}