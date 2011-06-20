<?php

/**
 * moneyback_guarantee actions.
 *
 * @package    tuxnode
 * @subpackage moneyback_guarantee
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class moneyback_guaranteeActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->article = Doctrine_Core::getTable('Article')->findOneBy('slug','money-back-guarantee');

  }
}
