<?php
// auto-generated by sfViewConfigHandler
// date: 2011/06/20 03:04:22
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Tuxnode - Framework Hosting', false, false);
  $response->addMeta('description', 'We are providing advanced framework hosting solutions for zend framework, symfony , cake php, code igniter etc', false, false);
  $response->addMeta('keywords', 'symfony hosting, zend framework , web hosting reseller hosting', false, false);
  $response->addMeta('language', 'en', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('reset.css', '', array ());
  $response->addStylesheet('style.css', '', array ());
  $response->addStylesheet('uttons.css', '', array ());
  $response->addStylesheet('litegrey.css', '', array ());
  $response->addJavascript('jquery-1.4.min.js', '', array ());
  $response->addJavascript('jquery.easing.min.js', '', array ());
  $response->addJavascript('jquery.tipsy.js', '', array ());
  $response->addJavascript('custom.js', '', array ());
  $response->addJavascript('cufon-yui.js', '', array ());
  $response->addJavascript('Dezen_Pro_Regular.js', '', array ());


