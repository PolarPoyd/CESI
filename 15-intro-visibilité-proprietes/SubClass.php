<?php 

class SubClass extends BaseClass
{
    public function getParentProtectedProperty(): string
    {
        return $this->protectedProperty;
    }

    public function getParentPrivateProperty(): string
    {
        // Cette fois ligne renverra une erreur, car
        // la propriété n'est pas accessible depuis la classe enfant
        // return $this->privateProperty;

        // Il faut utiliser le getter
        return $this->getPrivateProperty();

    }
    
}