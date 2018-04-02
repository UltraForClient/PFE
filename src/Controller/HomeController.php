<?php

namespace App\Controller;

use App\Entity\EnvironmentImage;
use App\Entity\EnvironmentText;
use App\Entity\FirstSectionImage;
use App\Entity\FirstSectionText;
use App\Entity\Gallery;
use App\Entity\Header;
use App\Entity\Price;
use App\Entity\Relaxation;
use App\Entity\SecondSectionImage;
use App\Entity\SecondSectionText;
use App\Entity\SliderText;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class HomeController extends Controller
{

    /**
     * @Route("/", name="home")
     */
    public function indexAction(): Response
    {
        $em = $this->getDoctrine()->getManager();

        $header = $em->getRepository(Header::class)->find(1);
        $images = $em->getRepository(Gallery::class)->findAll();

        $prices = $em->getRepository(Price::class)->findAll();

        $firstSectionText = $em->getRepository(FirstSectionText::class)->find(1);
        $secondSectionText = $em->getRepository(SecondSectionText::class)->find(1);

        $firstSectionImage = $em->getRepository(FirstSectionImage::class)->findAll();
        $secondSectionImage = $em->getRepository(SecondSectionImage::class)->findAll();

        $sliderText = $em->getRepository(SliderText::class)->find(1);

        return $this->render('home/index.html.twig', [
            'header' => $header,
            'images' => $images,
            'prices' => $prices,
            'firstSectionText' => $firstSectionText,
            'firstSectionImage' => $firstSectionImage,
            'secondSectionImage' => $secondSectionImage,
            'secondSectionText' => $secondSectionText,
            'sliderText' => $sliderText
        ]);
    }

    /**
     * @Route("/environment", name="environment")
     */
    public function environmentAction(): Response
    {
        $em = $this->getDoctrine()->getManager();

        $text = $em->getRepository(EnvironmentText::class)->find(1);
        $images = $em->getRepository(EnvironmentImage::class)->findAll();

        return $this->render('subpage/environment.html.twig', [
            'text' => $text,
            'images' => $images
        ]);
    }


    /**
     * @Route("/relaxation", name="relaxation")
     */
    public function relaxAction(): Response
    {
        $em = $this->getDoctrine()->getManager();

        $relaxs = $em->getRepository(Relaxation::class)->findAll();

        return $this->render('subpage/relaxation.html.twig', [
            'relaxs' => $relaxs
        ]);
    }

    /**
     * @Route("/conference-training", name="con-tra")
     */
    public function conTraAction(): Response
    {
        return $this->render('subpage/con-tra.html.twig', []);
    }

    /**
     * @Route("/gallery", name="gallery")
     */
    public function galleryAction(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $images = $em->getRepository(Gallery::class)->findAll();

        return $this->render('subpage/gallery.html.twig', [
            'images' => $images
        ]);
    }
}