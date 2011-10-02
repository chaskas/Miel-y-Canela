<?php

/**
 * static actions.
 *
 * @package    mielycanela
 * @subpackage static
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class staticActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  }
  public function executeHome(sfWebRequest $request)
  {
  }
  public function executeProductos(sfWebRequest $request)
  {
  }
  public function executePromociones(sfWebRequest $request)
  {
  }
  public function executeNosotros(sfWebRequest $request)
  {
  }
  public function executeDondeestamos(sfWebRequest $request)
  {
  }
  public function executeSendmail(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('POST'));

    $name     = $request->getParameter('name');
    $email    = $request->getParameter('email');
    $phone  = $request->getParameter('phone');
    $pre_message  = $request->getParameter('message');

    $message = $name."\n".$email."\nFono: ".$phone."\n\nDice:\n\n".$pre_message;

    $mensaje = Swift_Message::newInstance()
      ->setFrom($email)
      ->setTo(array('contacto@mielycanela.cl')) //CAMBIAR AL CORREO DE DESTINO DEFINITIVO
      ->setBcc(array('admin@webdevel.cl'))
      ->setSubject('Nuevo mensaje desde www.mielycanela.cl')
      ->setBody($message)
    ;

    $this->getMailer()->send($mensaje);

    $this->getResponse()->setContent('El mensaje ha sido enviado satisfactoriamente...');

    return sfView::NONE;
  }
}
