<?php

/**
 * servers actions.
 *
 * @package    tuxnode
 * @subpackage servers
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class serversActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->service = Doctrine_Core::getTable('Service')->getHomePlans('Servers');
    $this->service_resources = Doctrine_Core::getTable('Resource')->findByService($this->service->getFirst()->getId());
  }
}
