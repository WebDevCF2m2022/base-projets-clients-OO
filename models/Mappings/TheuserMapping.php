<?php

namespace models\Mappings;

use models\Abstracts\AbstractMapping;


class TheuserMapping extends AbstractMapping
{
    // Déclaration des propriétés
    protected int $idUser;
    protected string $loginUser;
    protected string $pwdUser;
    protected string $mailUser;

    // Déclaration des getters
    public function getIdUser(): int
    {
        return $this->idUser;
    }

    public function getLoginUser(): string
    {
        return $this->loginUser;
    }

    public function getPwdUser(): string
    {
        return $this->pwdUser;
    }

    public function getMailUser(): string
    {
        return $this->mailUser;
    }

    // Déclaration des setters

    public function setIdUser(int $idUser): void
    {
        $this->idUser = $idUser;
    }

    public function setLoginUser(string $loginUser): void
    {
        $this->loginUser = $loginUser;
    }

    public function setPwdUser(string $pwdUser): void
    {
        $this->pwdUser = $pwdUser;
    }

    public function setMailUser(string $mailUser): void
    {
        if(filter_var($mailUser, FILTER_VALIDATE_EMAIL)) {
            $this->mailUser = $mailUser;
        } else {
            throw new \Exception("Le mail n'est pas valide");
        }
    }


}