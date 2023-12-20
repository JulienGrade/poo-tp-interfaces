<?php
namespace App;
interface TaskInterface
{
    public function create(array $donnees);
    public function read();
    public function update(array $donnees);
    public function delete();
}