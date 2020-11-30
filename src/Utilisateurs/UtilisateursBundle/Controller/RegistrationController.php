<?php


namespace Utilisateurs\UtilisateursBundle\Controller;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Controller\RegistrationController as BaseController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Utilisateurs\UtilisateursBundle\Form\RegistrationProType;
use Utilisateurs\UtilisateursBundle\Form\RegistrationPopUpType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RegistrationController extends BaseController
{

    public function __construct()
    {
    }
	
/**
 * @Route("/pro/register", name="pro_user_register")
 */

    public function updatePoints($code){
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('UtilisateursBundle:Utilisateurs')->getUserByCode($code);
        //var_dump($users);
        if(!$users) return;
        $user = $users[0];
        $oldPoint = $user->getPoints();
        $newPoint = $oldPoint + 1000;
        $user->setPoints($newPoint);
        $em->flush();

    }
	
    public function registerProAction(Request $request)
    {
        $path = __DIR__."/../../../../web/fichier.txt";
        $chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = '';
        for($i=0; $i<7; $i++){
            $code .= $chars[rand(0, strlen($chars)-1)];
        }

        $codebd = "";
        $lignes = file($path);
        $fin = false;

        foreach($lignes as $ligne){
            if(strstr($ligne,$code)){ //Tu peux utiliser strpos aussi
                $fin = true;
                break;
            }
        }

        if($fin === true){
            while ($fin === true) {

                $chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $code = '';
                for($i=0; $i<7; $i++){
                    $code .= $chars[rand(0, strlen($chars)-1)];
                }
                $lignes = file($path);
                $fin = false;

                foreach($lignes as $ligne){
                    if(strstr($ligne,$code)){ //Tu peux utiliser strpos aussi
                        $fin = true;
                        break;
                    }
                }
                $code = $code." \n";
                $codebd = $code;
                array_unshift($lignes,$code);
                $new_content = join('',$lignes);
                $fichier = fopen($path, 'w+');
                fwrite($fichier, $new_content);
                //echo file_get_contents('fichier.txt');
                fclose($fichier);
            }
        }else{
            $code = $code." \n";
            $codebd = $code;
            array_unshift($lignes,$code);
            $new_content = join('',$lignes);
            $fichier = fopen($path, 'w+');
            fwrite($fichier, $new_content);
            //echo file_get_contents('fichier.txt');
            fclose($fichier);
        }


        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $user = $userManager->createUser();
        $user->setEnabled(true);
        $user->addRole("ROLE_PRO");
        $user->setCode(trim($codebd));
        $user->setPoints(1000);
        $user->setVerifier(0);
        
        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        $form = $formFactory->create(new RegistrationProType($this->container->getParameter("fos_user.model.user.class")));
        $form->setData($user);

        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);
            $codeParrain = $user->getCodeparrain();
            if($codeParrain != "" & strlen($codeParrain) == 7){
                $this->updatePoints($codeParrain);
            }
            $userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_registration_confirmed');
                $response = new RedirectResponse($url);
            }


            $message = (new \Swift_Message('Confirmation Email'))
                ->setFrom('contact@kountac.fr')
                ->setTo($user->getEmail())
                ->setBody(
                    $this->renderView(
                        // app/Resources/views/Emails/registration.html.twig
                        'emails/registration.html.twig',
                        array('name' => $user->getUserName(),
                              'confirmUrl' => $user->getConfirmationToken(),)
                    ),
                    'text/html'
                )
            ;

            $this->get('mailer')->send($message);

            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }

        
        return $this->render('FOSUserBundle:Registration:registerPro.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function registerPopUPAction(Request $request)
    {
        $session = $this->getRequest()->getSession();
        
        
        $path = __DIR__."/../../../../web/fichier.txt";
        $chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = '';
        for($i=0; $i<7; $i++){
            $code .= $chars[rand(0, strlen($chars)-1)];
        }

        $codebd = "";
        $lignes = file($path);
        $fin = false;

        foreach($lignes as $ligne){
            if(strstr($ligne,$code)){ //Tu peux utiliser strpos aussi
                $fin = true;
                break;
            }
        }

        if($fin === true){
            while ($fin === true) {

                $chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $code = '';
                for($i=0; $i<7; $i++){
                    $code .= $chars[rand(0, strlen($chars)-1)];
                }
                $lignes = file($path);
                $fin = false;

                foreach($lignes as $ligne){
                    if(strstr($ligne,$code)){ //Tu peux utiliser strpos aussi
                        $fin = true;
                        break;
                    }
                }
                $code = $code." \n";
                $codebd = $code;
                array_unshift($lignes,$code);
                $new_content = join('',$lignes);
                $fichier = fopen($path, 'w+');
                fwrite($fichier, $new_content);
                //echo file_get_contents('fichier.txt');
                fclose($fichier);
            }
        }else{
            $code = $code." \n";
            $codebd = $code;
            array_unshift($lignes,$code);
            $new_content = join('',$lignes);
            $fichier = fopen($path, 'w+');
            fwrite($fichier, $new_content);
            //echo file_get_contents('fichier.txt');
            fclose($fichier);
        }


        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $user = $userManager->createUser();
        $user->setEnabled(true);
        //$user->addRole("ROLE_PRO");
        $user->setCode(trim($codebd));
        $user->setPoints(1000);
        $user->setVerifier(0);
        
        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }
        
        $form2 = $formFactory->create(new RegistrationProType($this->container->getParameter("fos_user.model.user.class")));
        $form = $formFactory->create(new RegistrationPopUpType($this->container->getParameter("fos_user.model.user.class")));
        $form->setData($user);

        $form->handleRequest($request);
        //$user->setNom($user->getEmail());
        if ($request->getMethod() == 'POST') 
        { 
            if ($form->isSubmitted()) {
            if (!$session->has('popup'))
                $session->set('popup', '1');
            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);
            $codeParrain = $user->getCodeparrain();
            if($codeParrain != "" & strlen($codeParrain) == 7){
                $this->updatePoints($codeParrain);
            }
            $userManager->updateUser($user);
            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_registration_confirmed');
                $response = new RedirectResponse($url);
            }
            //var_dump($user);die();
            
            $message = (new \Swift_Message('Confirmation Email'))
                ->setFrom('contact@kountac.fr')
                ->setTo($user->getEmail())
                ->setBody(
                    $this->renderView(
                        // app/Resources/views/Emails/registration.html.twig
                        'emails/registration.html.twig',
                        array('name' => $user->getUserName(),
                              'confirmUrl' => $user->getConfirmationToken(),)
                    ),
                    'text/html'
                )
            ;

            $this->get('mailer')->send($message);

            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            //return $response;
            
            $this->get('session')->getFlashBag()->add('success','Pour activer votre compte, rendez vous dans votre boite email');
                return $this->redirectToRoute('kountac_homepage_index');
        }
        }
        
        return $this->render('FOSUserBundle:Registration:registerPro.html.twig', array(
            'form' => $form2->createView(),
        ));
    }
   
    
}
