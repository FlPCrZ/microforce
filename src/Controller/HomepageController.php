<?php
namespace MicroForce\Controller;

use MicroForce\Engine\EngineSingleton;

class HomepageController
{
    public function homepage()
    {
        return EngineSingleton::getEngine()->render('Homepage.html.php');
    }
}

