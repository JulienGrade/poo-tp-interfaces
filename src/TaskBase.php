<?php
namespace App;
abstract class TaskBase implements TaskInterface
{
    protected $title;
    protected $description;

    abstract public function create(array $donnees);
    abstract public function read();
    abstract public function update(array $donnees);
    abstract public function delete();
}