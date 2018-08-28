<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Profile;
use AppBundle\Entity\User;
use AppBundle\Entity\UserGroup;
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

        // create form
        $form = $this->createForm(UserType::class, $user);

        // handle request
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            // get user group
            $userGroup = $em->getRepository(UserGroup::class)->findOneBy(['name' => $user->getUserGroup()->getName()]);

            if (!$userGroup) {
                throw $this->createNotFoundException("Keine Benutzergruppe für " . $userGroup->getName() . " gefunden.");
            }

            // encode plain password
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            $user->setUgId($userGroup->getId());

            // save in database
            $em->persist($user->getProfile());
            $em->flush();

            // get profile
            $profile = $em->getRepository(Profile::class)->findOneBy(['email' => $user->getProfile()->getEmail()]);

            if (!$profile) {
                throw $this->createNotFoundException("Kein Profil mit der Email " . $profile->getEmail() . " gefunden.");
            }

            // create user
            $user->setPId($profile->getId());
            $em->persist($user);
            $em->flush();
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