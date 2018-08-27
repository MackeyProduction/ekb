<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Profile;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\ConstraintViolation;

class DashboardController extends Controller
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboardAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('dashboard/index.html.twig');
    }

    /**
     * @Route("/account", name="account")
     */
    public function accountAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('dashboard/account.html.twig');
    }

    /**
     * @Route("/missing", name="missing")
     */
    public function missingAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('dashboard/missing.html.twig');
    }

    /**
     * @Route("/present", name="present")
     */
    public function presentAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('dashboard/present.html.twig');
    }

    /**
     * @Route("/timetable", name="timetable")
     */
    public function timetableAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('dashboard/timetable.html.twig');
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function adminAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $v = null;
        $user = new User();
        $profile = new Profile();

        // create form
        $form = $this->createForm(UserType::class, $user);

        // handle request
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode plain password
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // save in database
            $em = $this->getDoctrine()->getManager();
            var_dump($user);
        } else if ($form->isSubmitted() && !$form->isValid()) {
            $v = $this->validation($form->getData());
        }

        $errors = count($v);

        // replace this example code with whatever you need
        return $this->render('dashboard/admin.html.twig', [
            'form' => $form->createView(),
            'errors' => $errors,
            'violation' => $v,
        ]);
    }

    public function validation($obj)
    {
        $v = [];
        $validator = $this->get("validator");
        $violations = $validator->validate($obj);

        if (count($violations) > 0) {
            /** @var ConstraintViolation $violation */
            foreach ($violations as $violation) {
                $v[] = $violation->getMessage();
            }
        }

        return $v;
    }
}