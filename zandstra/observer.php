<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 10-10-2014
 * Time: 10:44
 */
interface Observable {
    function attach(Observer $observer);
    function detach(Observer $observer);
    function notify();
}

class Login implements Observable {
    private $observers = array();
    private $storage;
    const LOGIN_USER_UNKNOWN = 1;
    const LOGIN_WRONG_PASS = 2;
    const LOGIN_ACCESS = 3;

    function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }
    function detach(Observer $observer)
    {
        $this->observers = array_filter($this->observers, function($a) use ($observer) {return (! ($a === $observer));});
    }
    function notify()
    {
        foreach($this->observers as $obs){
            $obs->update($this);
        }
    }
    function handleLogin($user, $pass, $ip)
    {
        switch(rand(1,3)){
            case 1:
                $this->setStatus(self::LOGIN_ACCESS, $user, $ip);
                $isValid = true;
                break;
            case 2:
                $this->setStatus(self::LOGIN_WRONG_PASS, $user, $ip);
                $isValid = false;
                break;
            case 3:
                $this->setStatus(self::LOGIN_USER_UNKNOWN, $user, $ip);
                $isValid = false;
                break;
        }
        $this->notify();
        return $isValid;
    }
}

interface Observer {
    function update(Observable $observable);
}

abstract class LoginObserver implements Observer {
    private $login;
    function __construct(Login $login)
    {
        $this->login = $login;
            $login->attach($this);
    }
    function update(Observable $observable)
    {
        if ($observable === $this->login){
            $this->doUpdate($observable);
        }
    }
    abstract function doUpdate(Login $login);
}

class SecurityMonitor extends LoginObserver {
    function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        if($status[0] == Login::LOGIN_WRONG_PASS){
            print __CLASS__ . "sending mail to sysadmin";
        }
    }
}
class GeneralLogger extends LoginObserver {
    function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        print __CLASS__ . "add login data to log";
    }
}
class PartnershipTool extends LoginObserver {
    function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        print __CLASS__ . "set cookie if IP matches a list";
    }
}

$login = new Login();
new SecurityMonitor($login);
new GeneralLogger($login);
new PartnershipTool($login);