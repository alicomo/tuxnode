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

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ServiceForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ServiceForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($service = Doctrine_Core::getTable('Service')->find(array($request->getParameter('id'))), sprintf('Object service does not exist (%s).', $request->getParameter('id')));
    $this->form = new ServiceForm($service);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($service = Doctrine_Core::getTable('Service')->find(array($request->getParameter('id'))), sprintf('Object service does not exist (%s).', $request->getParameter('id')));
    $this->form = new ServiceForm($service);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($service = Doctrine_Core::getTable('Service')->find(array($request->getParameter('id'))), sprintf('Object service does not exist (%s).', $request->getParameter('id')));
    $service->delete();

    $this->redirect('services/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $service = $form->save();

      $this->redirect('services/edit?id='.$service->getId());
    }
  }
}
