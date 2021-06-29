<?php

namespace App\Service;
//çağırmayı unutma
use Symfony\Component\HttpFoundation\RequestStack;

class MessageGenerator
{
    /**
     * @var NameGenerator
     */

    private $nameGenerator;

    /**
     * @var RequestStack
     */

    private $requestStack;

    /**
     * @var string
     */

     private $adminEmail;
    
    public function __construct(NameGenerator $nameGenerator, RequestStack $requestStack, $adminEmail)
    {   
        //request fonksiyonlarını öğrenmedik
        //yukarıdan gelen değere eşitledik
        $this->nameGenerator = $nameGenerator;
        $this->requestStack = $requestStack;
        $this->adminEmail = $adminEmail;
    }


    public function helloMessage()
    {
        $name = $this->requestStack->getCurrentRequest()->get('name');
        //eğer boş değilse
        if(empty($name)){
            $name = $this->nameGenerator->randomName();
        }
        $message = 'Hello ' .$name.'! -> admin mail:'.$this->adminEmail ;

        return $message;
    }
}

?>