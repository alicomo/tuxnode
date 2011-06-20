<?php

/**
 * web_hosting actions.
 *
 * @package    tuxnode
 * @subpackage web_hosting
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class web_hostingActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->service = Doctrine_Core::getTable('Service')->getHomePlans('Web Hosting');
    $this->service_resources = Doctrine_Core::getTable('Resource')->findByService($this->service->getFirst()->getId());
  }

  
}
