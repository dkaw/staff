<?php
namespace Trombinoscope\StaffBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Trombinoscope\StaffBundle\Entity\Personnes;
use Trombinoscope\StaffBundle\Entity\Services;
use Trombinoscope\StaffBundle\Form\Type\PersonneType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Created by PhpStorm.
 * User: kawtar
 * Date: 09/04/15
 * Time: 11:30
 */
class PersonnesController extends Controller
{
    /**
     *
     *
     * @param Request $request
     * @param Services $service
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request, Services $service = null)
    {
        $manager = $this->getDoctrine()->getManager();
        $ListePersonnes = $manager->getRepository('TrombinoscopeStaffBundle:Personnes')
            ->getPersonnes($service);

        return $this->render('TrombinoscopeStaffBundle:Personnes:index.html.twig', array(
        'ListePersonnes' =>$ListePersonnes,
        'service' =>$service));
    }

    /**
     * @param Request $request
     * @param Personnes $personnes
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function serviceAction(Request $request, Personnes $personnes)
    {

            return $this->render('TrombinoscopeStaffBundle:Personnes:service.html.twig', array('service' => $personnes->getServicePrincipal()));
    }

    public function editAction(Request $request, Personnes $personne=null)
    {

        if($personne== null){
            $personne= new Personnes();
        }
        $form= $this->createForm(new PersonneType(), $personne);
        if ($request->isMethod('POST')){
            $form->submit($request);
            if($form->isValid()){
                $personne = $form->getData();
                $this->getDoctrine()->getManager()->persist($personne);
                $this->getDoctrine()->getManager()->flush();
                return $this->redirect($this->generateUrl('Trombinoscopestaff_personne'));

            }
        }

        return $this->render('TrombinoscopeStaffBundle:Personnes:edit.html.twig', array(
            'form'  => $form->createView(),
            'personne'  => $personne,
        ));
    }

    public function deleteAction(Request $request, Personnes $personne=null)
    {
        if($personne== null){
            $personne= new Personnes();
        }

        $form=$this->createForm(new PersonneType(), $personne);
        if ($request->isMethod('POST')){
            $form->submit($request);
            if($form->isValid()){
                $this->getDoctrine()->getManager()->remove($personne);
                $this->getDoctrine()->getManager()->flush();
                return $this->redirect($this->generateUrl('Trombinoscopestaff_personne'));
            }
        }
            return $this->render('TrombinoscopeStaffBundle:Personnes:delete.html.twig', array(
                'personne' => $personne,
                'form' => $form->createView()
            ));
    }


    public function searchAction(Request $request)
    {
        $term = $request->get('term');
        $repository = $this->getDoctrine()
                    ->getManager();
        $personnes = $repository->getRepository('TrombinoscopeStaffBundle:Personnes')->recherche($term);

        $response= new JsonResponse();

        $response->setData($personnes);

      return $response;

    }

    public function indexpersonnesAction(Request $request, Personnes $personne)
    {
        return $this->render('TrombinoscopeStaffBundle:Personnes:indexpersonnes.html.twig', array(
            'personne' => $personne
        ));
    }

    public function photoAction(Request $request, Personnes $personne)
    {
        $photo = $personne->getNomPhoto();
        $rootDir = realpath($this->get('kernel')->getRootDir() . '/../web/images/');
        if (empty($photo)) {
            $photo = $rootDir . '/user.jpg';
        } else {
            $photo = $this->container->getParameter('chemin_photo') . '/' . $personne->getNomPhoto();
            if (!file_exists($photo)) {
                $photo = $rootDir . '/user.jpg';
            }
        }

        $fp = fopen($photo,"r");
        $str = stream_get_contents($fp);
        fclose($fp);

        $response = new Response($str,200);
        $response->headers->set('Content-Type', 'image/jpg');
        return $response;
    }
}