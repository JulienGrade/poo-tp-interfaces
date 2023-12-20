<?php
namespace Exception;
class TaskException extends \Exception
{
    /**
     * Crée une nouvelle instance de TacheException.
     *
     * @param string $message Message décrivant l'erreur.
     * @param int $code Code d'erreur optionnel.
     * @param \Exception|null $previous Exception précédente pour le chaînage.
     */
    public function __construct($message, $code = 0, \Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Représentation personnalisée de l'exception pour le débogage.
     *
     * @return string
     */
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    /**
     * Récupère des détails supplémentaires sur l'exception.
     *
     * @return string
     */
    public function getDetails() {
        return "Erreur survenue dans l'opération liée à la gestion des tâches.";
    }
}