<?php


class Message {

    const LIMIT_USERNAME = 3;
    const LIMIT_MESSAGE = 10;

    private $username;
    private $message;

    public function __construct(string $username, string $message, ?DateTime $date = null)
    {
        $this->username = $username;
        $this->message = $message;
    }

    public function isValide(): bool
    {
        return empty($this->getErrors());
    }

    public function getErrors(): array
    {
        $errors = [];
        if (strlen($this->username) < self::LIMIT_USERNAME) {
            $errors['username'] = 'votre pseudo est trop court';
        }
        if (strlen($this->message) < self::LIMIT_MESSAGE) {
            $errors['message'] = 'votre message est trop court';
        }
        return $errors;
    }

    public function getSuccess() : array
    {
        $successFields = [];
        if (!strlen($this->username) < self::LIMIT_USERNAME) {
            $successFields['username'] = 'pseudo validé';
        }
        if (!strlen($this->message) < self::LIMIT_MESSAGE) {
            $successFields['message'] = 'Message validé';
        }
        return $successFields;
    }


}