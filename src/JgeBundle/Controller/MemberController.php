<?php

namespace JgeBundle\Controller;

use JgeBundle\Form\MemberType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JgeBundle\Entity\Member;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class MemberController extends Controller
{
	public function indexAction()
	{
		return $this->render('JgeBundle:Member:index.html.twig');
	}

	public function listAction()
	{
		// Ici, on récupérera la liste des membres
        $listMembers = $this->getDoctrine()
            ->getManager()
            ->getRepository('JgeBundle:Member')
            ->findAll()
        ;

		return $this->render('JgeBundle:Member:list.html.twig', array(
			// Tout l'intérêt est que le contrôleur passe les variables au twig
			'listMembers' => $listMembers
		));

	}

	public function viewAction($id)
	{
        // Récupération d'un membre correspondant à $id
        $member = $this->getDoctrine()
            ->getManager()
            ->getRepository('JgeBundle:Member')
            ->find($id)
        ;
		return $this->render('JgeBundle:Member:view.html.twig', array(
			'member' => $member
		));
	}

	public function addAction(Request $request)
	{
		// Objet Member
		$member = new Member();

		// Création du Form
		$form= $this
            ->createForm(MemberType::class, $member)
		    ->add('save', SubmitType::class, array(
		        'label'=>'Enregistrer',
                'attr' => [
                    'class' => 'btn btn-sm btn-primary',
                ]
            ));

            //Récupération des données POST de la demande
			$form->handleRequest( $request );

			if(count($form->getData()->getRole())) {
			    $form->getData()->setRole($form->getData()->getRole()[0]);
            }


			// On vérifie que les valeurs entrées sont correctes
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($member);
            $em->flush();

            // Message flash
            $this->addFlash('notice', 'Nouvel inscrit');

            // On redirige vers la page de visualisation du nouvel inscrit
            return $this->redirectToRoute( 'jge_member_view', array( 'id' => $member->getId() ) );
        }


		// On passe la méthode createView() à la vue pour afficher le formulaire
		return $this->render('JgeBundle:Member:add.html.twig', array(
			'form' => $form->createView(),
		));
	}

	public function updateAction($id, Request $request)
	{
		// Récupération d'un membre correspondant à $id
		$member = $this->getDoctrine()
		               ->getRepository('JgeBundle:Member')
		               ->find($id);

        // Création du Form
        $form= $this
            ->createForm(MemberType::class, $member)
            ->add('save', SubmitType::class, array(
                'label'=>'Enregistrer',
                'attr' => [
                    'class' => 'btn btn-sm btn-primary',
                ]
            ));

        //Récupération des données POST de la demande
        $form->handleRequest( $request );

        // On vérifie que les valeurs entrées sont correctes
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($member);
            $em->flush();

            // Message flash
            $this->addFlash('notice', 'Données modifiées !');

            // On redirige vers la page de visualisation du nouvel inscrit
            return $this->redirectToRoute( 'jge_member_view', array( 'id' => $member->getId() ) );
        }

		return $this->render('JgeBundle:Member:update.html.twig', array(
            'form' => $form->createView(),
        ));
	}

	public function deleteAction($id)
	{
		// Récupération d'un membre correspondant à $id
		$member = $this->getDoctrine()
		               ->getManager()
		               ->getRepository('JgeBundle:Member')
		               ->find($id)
		;

		// Ici, on gérera la suppression du membre en question

		return $this->render('JgeBundle:Member:delete.html.twig');
	}
}