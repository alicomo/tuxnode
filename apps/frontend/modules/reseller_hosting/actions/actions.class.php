<?php

/**
 * reseller_hosting actions.
 *
 * @package    tuxnode
 * @subpackage reseller_hosting
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class reseller_hostingActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->service = Doctrine_Core::getTable('Service')->getHomePlans('Reseller Hosting');
    $this->service_resources = Doctrine_Core::getTable('Resource')->findByService($this->service->getFirst()->getId());
  }
}
