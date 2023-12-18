<?php 

class BaseClass 
{
    public string $publicProperty = "Une propriété ou une méthode publique est accessible partout dans votre code";

    protected string $protectedProperty = "Une propriété ou une méthode protégée n'est accessible que depuis la classe ou depuis une classe enfant ou sous-classe";

    private string $privateProperty = "Une propriété ou une méthode privée ne peut être accessible que depuis la classe elle même et n'est visible nulle par ailleurs";

    public function getProtectedProperty(): string{
        return $this->protectedProperty;
    }

    public function getPrivateProperty(): string{
        return $this->privateProperty;
    }
}