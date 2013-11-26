<?php

namespace MY\MediaBundle\Controller;

use Sonata\MediaBundle\Controller\MediaAdminController as Controller;
use MY\MediaBundle\Entity\Media;
use MY\MediaBundle\Tool\Watermark;

/**
 * 
 */
class MediaAdminController extends Controller
{

  /**
   * 
   * @param type $id
   * @return type
   * @throws NotFoundHttpException
   * @throws AccessDeniedException
   */
  public function watermarkAction($id)
  {

    // the key used to lookup the template
    $templateKey = 'edit';

    $id = $this->get('request')->get($this->admin->getIdParameter());

    $object = $this->admin->getObject($id);

    //This is for adding watermarks
    //Get images original name
    $name = $object->getProviderReference();

    // If name is not empty
    if (!empty($name))
    {
      //Get the file extension
      $rest = substr($name, -4);
      $filetype = str_replace('.', '', $rest);
      
      $mediaservice = $this->container->get('sonata.media.pool');
      
      //get images
      $provider = $mediaservice->getProvider($object->getProviderName());
      $format = $provider->getFormatName($object, 'reference');
      $img_file = $this->getUploadRootDir() . $provider->generatePublicUrl($object, $format);
      
      $provider2 = $mediaservice->getProvider($object->getProviderName());
      $format2 = $provider2->getFormatName($object, 'list');
      $thumb_list = $this->getUploadRootDir() . $provider->generatePublicUrl($object, $format2);

      // get Watermark service 
      $watermark = $this->container->get('watermark');
      
      //Add watermarks
      $watermark->AddWatermark($img_file, $filetype, Watermark::WATERMARK_BIG);
      $watermark->AddWatermark($thumb_list, $filetype, Watermark::WATERMARK_SMALL);
      
      $this->get('session')->setFlash('sonata_flash_success', $this->get('translator')->trans('watermark_successfly'));
    }

    if (!$object)
    {
      throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
    }

    if (false === $this->admin->isGranted('EDIT', $object))
    {
      throw new AccessDeniedException();
    }

    $this->admin->setSubject($object);

    /** @var $form \Symfony\Component\Form\Form */
    $form = $this->admin->getForm();
    $form->setData($object);

    if ($this->get('request')->getMethod() == 'POST')
    {
      $form->bind($this->get('request'));

      $isFormValid = $form->isValid();

      // persist if the form was valid and if in preview mode the preview was approved
      if ($isFormValid && (!$this->isInPreviewMode() || $this->isPreviewApproved()))
      {
        $this->admin->update($object);
        $this->get('session')->setFlash('sonata_flash_success', 'flash_edit_success');

        if ($this->isXmlHttpRequest())
        {
          return $this->renderJson(array(
                      'result' => 'ok',
                      'objectId' => $this->admin->getNormalizedIdentifier($object)
                  ));
        }

        // redirect to edit mode
        return $this->redirectTo($object);
      }

      // show an error message if the form failed validation
      if (!$isFormValid)
      {
        $this->get('session')->setFlash('sonata_flash_error', 'flash_edit_error');
      }
      elseif ($this->isPreviewRequested())
      {
        // enable the preview template if the form was valid and preview was requested
        $templateKey = 'preview';
      }
    }

    $view = $form->createView();

    // set the theme for the current Admin Form
    $this->get('twig')->getExtension('form')->renderer->setTheme($view, $this->admin->getFormTheme());

    return $this->render($this->admin->getTemplate($templateKey), array(
                'action' => 'edit',
                'form' => $view,
                'object' => $object,
            ));
  }

  /**
   * 
   * @return string
   */
  protected function getUploadRootDir()
  {
    return __DIR__ . '/../../../../web/';
  }

  /**
   * return the Response object associated to the view action
   *
   * @param null $id
   *
   * @throws \Symfony\Component\Security\Core\Exception\AccessDeniedException
   * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
   *
   * @return Response
   */
  public function showAction($id = null)
  {
    if (false === $this->admin->isGranted('VIEW'))
    {
      throw new AccessDeniedException();
    }

    $media = $this->admin->getObject($id);

    if (!$media)
    {
      throw new NotFoundHttpException('unable to find the media with the id');
    }

    return $this->render('SonataMediaBundle:MediaAdmin:view.html.twig', array(
                'media' => $media,
                'formats' => $this->get('sonata.media.pool')->getFormatNamesByContext($media->getContext()),
                'format' => $this->get('request')->get('format', 'reference'),
                'base_template' => $this->getBaseTemplate(),
                'admin' => $this->admin,
                'security' => $this->get('sonata.media.pool')->getDownloadSecurity($media),
                'action' => 'view',
                'pixlr' => $this->container->has('sonata.media.extra.pixlr') ? $this->container->get('sonata.media.extra.pixlr') : false,
            ));
  }

}
