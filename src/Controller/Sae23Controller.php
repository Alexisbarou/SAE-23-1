<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;

class Sae23Controller extends AbstractController
{
    /**
     * @Route("/", name="app_sae23")
     */
    public function index(): Response
    {
        return $this->render('sae23/home.html.twig', [
            'controller_name' => 'Sae23Controller',
        ]);
    }
    /**
     * @Route("/home", name="home")
     */
    public function home(): Response
    {
        return $this->render('sae23/home.html.twig', [
        ]);
    }
    /**
     * @Route("/commande", name="commande")
     */
    public function commande(): Response
    {
        return $this->render('sae23/commande.html.twig', [
        ]);
    }
    /**
     * @Route("/commande1", name="commande1")
     */
    public function commande1(): Response
    {
        return $this->render('sae23/commande1.html.twig', [
        ]);
    }
    /**
     * @Route("/recap1", name="recap1")
     */
    public function recap1(Request $request,
    EntityManagerInterface $manager): Response
    {
        $prix0="9.99€";
        $cle=$request->request->get("cle");
        $prix1="";
        $prix11="";
        if ($cle == "Fichiers sur clé USB 64Go"){
            $prix1=5;
            $prix11="5€";
        }
        $fichier=$request->request->get("fichier");
        $prix2="";
        $prix22="";
        if ($fichier == "Fichiers au format MP4"){
            $prix2=3;
            $prix22="3€";
        }
        $troisheures=$request->request->get("troisheures");
        $prix3="";
        $prix33="";
        if ($troisheures == "Convertir VHS (180 min, nombre de cassette ilimité)"){
            $prix3=5;
            $prix33="5€";
        }
        $quatreheures=$request->request->get("quatreheures");
        $prix4="";
        $prix44="";
        if ($quatreheures == "Convertir VHS (240 min, nombre de cassette ilimité)"){
            $prix4=7;
            $prix44="7€";
        }
        $total=array($prix0, $prix1, $prix2, $prix3, $prix4);
        return $this->render('sae23/recap1.html.twig', [
            'prix0' => $prix0,
            'cle' => $cle,
            'prix1' => $prix11,
            'fichier' => $fichier,
            'prix2' => $prix22,
            'troisheures' => $troisheures,
            'prix3' => $prix33,
            'quatreheures' => $quatreheures,
            'prix4' => $prix44,
            'total' => array_sum($total),
        ]);
    }
    /**
     * @Route("/commande2", name="commande2")
     */
    public function commande2(): Response
    {
        return $this->render('sae23/commande2.html.twig', [
        ]);
    }
    /**
     * @Route("/commande3", name="commande3")
     */
    public function commande3(): Response
    {
        return $this->render('sae23/commande3.html.twig', [
        ]);
    }
    /**
     * @Route("/envoi1", name="envoi1")
     */
    public function envoi1(Request $request,
    EntityManagerInterface $manager): Response
    {
        $nom=$request->request->get("nom");
        $email=$request->request->get("email");
        $numero=$request->request->get("numadresse");
        $adresse=$request->request->get("adresse");
        $city=$request->request->get("city");
        $nomcarte=$request->request->get("cardname");
        $numcarte=$request->request->get("cardnumber");
        $mois=$request->request->get("expmois");
        $annee=$request->request->get("expannee");
        $cvv=$request->request->get("cvv");
        $prix=$request->request->get("prix");
        $resultat1=$request->request->get("resultat1");
        $resultat2=$request->request->get("resultat2");
        $resultat3=$request->request->get("resultat3");
        $resultat4=$request->request->get("resultat4");
            $user = new User();
            $user->setNom($nom);
            $user->setEmail($email);
            $user->setNumeroadresse($numero);
            $user->setAdresse($adresse);
            $user->setVille($city);
            $user->setNomcarte($nomcarte);
            $user->setCartenombre($numcarte);
            $user->setExpiremois($mois);
            $user->setExpireannee($annee);
            $user->setCvv($cvv);
            $user->setPrix($prix);
            $user->setOption1($resultat1);
            $user->setOption2($resultat2);
            $user->setOption3($resultat3);
            $user->setOption4($resultat4);
        $manager->persist($user);
        $manager->flush();
        return $this->render('sae23/envoi.html.twig', [
            'nom'=>$nom,
            'resultat1'=>$resultat1,
            'resultat2'=>$resultat2,
            'resultat3'=>$resultat3,
            'resultat4'=>$resultat4,
            'prix'=>$prix,
        ]);
    }
    /**
     * @Route("/boutique", name="boutique")
     */
    public function boutique(): Response
    {
        return $this->render('sae23/boutique.html.twig', [
        ]);
    }
}