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

use Kountac\KountacBundle\Entity\Newsletters;
use Kountac\KountacBundle\Entity\Promotions;

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
        $path_promo = __DIR__."/../../../../web/promotion.txt";
        $chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = '';
        $promo = '';
        for($i=0; $i<7; $i++){
            $code .= $chars[rand(0, strlen($chars)-1)];
            $promo .= $chars[rand(0, strlen($chars)-1)];
        }

        $codebd = "";
        $lignes = file($path);
        $lignes_promo = file($path_promo);
        $fin = false;
        $fin_promo = false;
        foreach($lignes as $ligne){
            if(strstr($ligne,$code)){ //Tu peux utiliser strpos aussi
                $fin = true;
                break;
            }
        }
        
        foreach($lignes_promo as $ligne_promo){
            if(strstr($ligne_promo,$promo)){ //Tu peux utiliser strpos aussi
                $fin_promo = true;
                break;
            }
        }

        if(($fin === true) || ($fin_promo === true)){
            while (($fin === true) || ($fin_promo === true)) {

                $chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $code = '';
                $promo = '';
                for($i=0; $i<7; $i++){
                    $code .= $chars[rand(0, strlen($chars)-1)];
                    $promo .= $chars[rand(0, strlen($chars)-1)];
                }
                $lignes = file($path);
                $lignes_promo = file($path_promo);
                $fin = false;
                $fin_promo = false;

                foreach($lignes as $ligne){
                    if(strstr($ligne,$code)){ //Tu peux utiliser strpos aussi
                        $fin = true;
                        break;
                    }
                }
                
                foreach($lignes_promo as $ligne_promo){
                    if(strstr($ligne_promo,$promo)){ //Tu peux utiliser strpos aussi
                        $fin_promo = true;
                        break;
                    }
                }
                $code = $code." \n";
                $promo = $promo."PROMO"." \n";
                $codebd = $code;
                array_unshift($lignes,$code);
                array_unshift($lignes_promo,$promo);
                $new_content = join('',$lignes);
                $new_content_promo = join('',$lignes_promo);
                $fichier = fopen($path, 'w+');
                $promotion = fopen($path_promo, 'w+');
                fwrite($fichier, $new_content);
                fwrite($promotion, $new_content_promo);
                //echo file_get_contents('fichier.txt');
                fclose($fichier);
                fclose($promotion);
            }
        }else{
            $code = $code." \n";
            $promo = $promo."PROMO"." \n";
            $codebd = $code;
            array_unshift($lignes,$code);
            array_unshift($lignes_promo,$promo);
            $new_content = join('',$lignes);
            $new_content_promo = join('',$lignes_promo);
            $fichier = fopen($path, 'w+');
            $promotion = fopen($path_promo, 'w+');
            fwrite($fichier, $new_content);
            fwrite($promotion, $new_content_promo);
            //echo file_get_contents('fichier.txt');
            fclose($fichier);
            fclose($promotion);
        }


        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');
        //var_dump(trim($codebd));
        //var_dump($promo);
        //die();
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
        $em = $this->getDoctrine()->getManager();

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
            if ($user->getNewsletter()== '1'){ // j'ai choisie de m'inscrire à la Newsletter
                $newsletter = new Newsletters();
                $newsletter->setEmail($user->getEmail());
                $newsletter->setDate(new \DateTime('now'));
                $em->persist($newsletter);
                $em->flush();
            }
            
            // Création d'un code promotionnel dans la table Promotions
            $date_today = new \DateTime('now');
            
            $promotion = new Promotions();
            $promotion->setCode($promo);
            $promotion->setDateCreation($date_today);
            $promotion->setValidite(90); // Validité du code promo est de 90 jours (03 mois)
            $date_today->modify('+'.$promotion->getValidite().' day');
            $promotion->setDateExpiration($date_today);
            $promotion->setTauxReduction(15); // Le taux de réduction est de 15%
            $promotion->setType(POPUP); // le type de code promotion en focntion de l'action
            $promotion->setUtiliser(0); // 0 signifie que le code n'est pas encore utilisé
            $message = (new \Swift_Message('Confirmation Email'))
                ->setFrom('contact@kountac.fr')
                ->setTo($user->getEmail())
                ->setBody(
                    $this->renderView(
                        // app/Resources/views/Emails/registration.html.twig
                        'emails/registration.html.twig',
                        array('name' => $user->getUserName(),
                              'codePromo' => $promotion->getCode(),
                              'reduction' => $promotion->getTauxReduction(),
                              'validite' => $promotion->getValidite(),
                              'expirationDate' => $promotion->getDateExpiration(),
                              'confirmUrl' => $user->getConfirmationToken(),)
                    ),
                    'text/html'
                )
            
            ;

            $this->get('mailer')->send($message); // envoi du message
            $em->persist($promotion); // ajout du nouveau code promotionnel
            $em->flush();

            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            //return $response;
                    
            $this->get('session')->getFlashBag()->add('success',"Un e-mail a été envoyé à votre adresse email. Il contient un lien d''activation sur lequel il vous faudra cliquer afin d''activer votre compte.");
            $this->get('session')->getFlashBag()->add('success','Si vous ne recevez pas un email, vérifiez votre dossier spam.');
                return $this->redirectToRoute('kountac_homepage_index');
            }
        }
        
        return $this->render('FOSUserBundle:Registration:registerPro.html.twig', array(
            'form' => $form2->createView(),
        ));
    }
   
    
}
