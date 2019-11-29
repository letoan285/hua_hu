<?php 
require_once 'monitor.php';
require_once 'projector.php';
require_once 'batery.php';
// trait
class Computer {
    use Projector, Monitor, Batery;
}

$del = new Computer();

echo $del->getName();
echo $del->getInfo();
echo $del->getBetery();