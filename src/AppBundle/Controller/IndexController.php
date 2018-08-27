<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Profile;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = new User();
        $profile = new Profile();

        // create form
        $form = $this->createForm(UserType::class);

        if ($form->isValid() && $form->isSubmitted()) {
            $data = $form->getData();
            var_dump($data);
        }

        // replace this example code with whatever you need
        return $this->render('home/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}