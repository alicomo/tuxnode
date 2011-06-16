<?php

/**
 * about actions.
 *
 * @package    tuxnode
 * @subpackage about
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class aboutActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->articles = Doctrine_Core::getTable('Article')
      ->createQuery('a')
      ->execute();
  }

}
