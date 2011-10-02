<?php

/**
 * static components.
 *
 * @package    mielycanela
 * @subpackage static
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: components.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class staticComponents extends sfComponents
{
  public function executeContact(sfWebRequest $request)
  {
    $this->form = new ContactForm();
  }
}
