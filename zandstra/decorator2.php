<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 08-10-2014
 * Time: 16:12
 */
class RequestHelper {}

abstract class ProcessRequest {
    abstract function process(RequestHelper $req);
}

class MainProcess extends ProcessRequest {
    function process(RequestHelper $req) {
        print __CLASS__.": doing something usefull with request\n";
    }
}

abstract class DecorateProcess extends ProcessRequest {
    protected  $processrequest;
    function __construct(ProcessRequest $pr) {
        $this->processrequest = $pr;
    }
}

class LogRequest extends DecorateProcess {
    function process(RequestHelper $req) {
        print __CLASS__ . ": logging request\n";
        $this->processrequest->process($req);
    }
}

class AuthenticateRequest extends DecorateProcess {
    function process(RequestHelper $req) {
        print __CLASS__ . ": authenticating request\n";
        $this->processrequest->process($req);
    }
}

class StructureRequest extends DecorateProcess {
    function process(RequestHelper $req) {
        print __CLASS__ . ": logging request\n";
        $this->processrequest->process($req);
    }
}

$process = new AuthenticateRequest(new StructureRequest(new LogRequest(new MainProcess())));

$process->process(new RequestHelper());