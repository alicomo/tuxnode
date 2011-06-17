<?php

/**
 * home actions.
 *
 * @package    tuxnode
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->hosting = Doctrine_Core::getTable('Service')->getHomePlans('Web Hosting');
    $this->hosting_resources = Doctrine_Core::getTable('Resource')->findByService($this->hosting->getFirst()->getId());
    $this->reseller = Doctrine_Core::getTable('Service')->getHomePlans('Reseller Hosting');
    $this->reseller_resources = Doctrine_Core::getTable('Resource')->findByService($this->reseller->getFirst()->getId());
    $this->servers = Doctrine_Core::getTable('Service')->getHomePlans('Servers');
    $this->servers_resources = Doctrine_Core::getTable('Resource')->findByService($this->servers->getFirst()->getId());

  }

  
}
