<?php

namespace models\Interfaces;

interface SecurityInterfaces
{
    public function VerifyPassword(string $password, string $hash): bool;

    public function HashPassword(string $password): string;

}