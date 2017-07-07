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
            ->findAll();

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
            ->find($id);
        return $this->render('JgeBundle:Member:view.html.twig', array(
            'member' => $member
        ));
    }

    public function addAction(Request $request)
    {
        // Objet Member
        $member = new Member();

        // Création du Form
        $form = $this
            ->createForm(MemberType::class, $member)
            ->add('save', SubmitType::class, array(
                'label' => 'Enregistrer',
                'attr' => [
                    'class' => 'btn btn-sm btn-primary',
                ]
            ));

        //Récupération des données POST de la demande
        $form->handleRequest($request);

        // On vérifie que les valeurs entrées sont correctes
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            // On calcule et nomme la catégorie du joueur
//            $yearfBirth = $member->getDateOfBirth()->format('Y');
//            $yearCurrent = date('Y');
//            $categoryName = 'U'.($yearCurrent - $yearfBirth + 1);
//            $cate = $em ->getRepository('JgeBundle:Category')
//                        ->findOneBy(array('name'=>$categoryName));
//            $cateId = $cate->getId();
//            $member->setCategory($cateId);

            // Enregistrement dans la base de données
            $em->persist($member);
            $em->flush();

            // Message flash
            $this->addFlash('notice', 'Nouvel inscrit');

            // On redirige vers la page de visualisation du nouvel inscrit
            return $this->redirectToRoute('jge_member_view', array('id' => $member->getId()));
        }


        // On passe la méthode createView() à la vue pour afficher le formulaire
        return $this->render('JgeBundle:Member:add.html.twig', array(
            'member' => $member,
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
        $form = $this
            ->createForm(MemberType::class, $member)
            ->add('save', SubmitType::class, array(
                'label' => 'Enregistrer',
                'attr' => [
                    'class' => 'btn btn-sm btn-primary',
                ]
            ));

        //Récupération des données POST de la demande
        $form->handleRequest($request);

        if (count($form->getData()->getRole())) {
            $form->getData()->setRole($form->getData()->getRole()[0]);
        }

        // On vérifie que les valeurs entrées sont correctes
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($member);
            $em->flush();

            // Message flash
            $this->addFlash('notice', 'Données modifiées !');

            // On redirige vers la page de visualisation du nouvel inscrit
            return $this->redirectToRoute('jge_member_view', array('id' => $member->getId()));
        }

        return $this->render('JgeBundle:Member:update.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $member = $em->getRepository('JgeBundle:Member')->find($id);

        if (null === $member) {
            throw new NotFoundHttpException("L'utilisateur d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($member);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "L'utilisateur a bien été supprimé.");

            return $this->redirectToRoute('jge_member');
        }

        return $this->render('JgeBundle:Member:delete.html.twig', array(
            'member' => $member,
            'form'   => $form->createView(),
        ));

    }
}