<?php

use App\MyTask;
use Exception\TaskException;

try{
    $myTask = new MyTask();
    // Création de tâche
    try {
        $myTask->create(['title' => 'Nouvelle Tâche', 'description' => 'Description de la tâche']);
    } catch (TaskException $e){
        echo "Erreur lors de la création de la tâche : " . $e->getMessage() . "<br/>";
    }
    // Simulation lecture de tâche
    try{
        echo $myTask->read();
    } catch(TaskException $e){
        echo "Erreur lors de la lecture de la tâche : " . $e->getMessage() . "<br/>";
    }
} catch (\Exception $e) {
    // Cette capture est pour toutes les autres exceptions non spécifiques aux tâches
    echo "Erreur non spécifique aux tâches : " . $e->getMessage() . "<br/>";
}

