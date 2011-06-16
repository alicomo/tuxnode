<?php

/**
 * services actions.
 *
 * @package    tuxnode
 * @subpackage services
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class servicesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->services = Doctrine_Core::getTable('Service')
      ->createQuery('a')
      ->execute();
  }

}
