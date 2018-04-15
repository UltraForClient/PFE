<?php

namespace App\Controller;

use App\Entity\Conf;
use App\Entity\EnvironmentImage;
use App\Entity\EnvironmentText;
use App\Entity\FirstSectionImage;
use App\Entity\FirstSectionText;
use App\Entity\Gallery;
use App\Entity\Header;
use App\Entity\Price;
use App\Entity\RelaxationSlider;
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
    public function indexAction(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $locale = ucfirst($request->getLocale());

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
            'sliderText' => $sliderText,
            'locale' => $locale
        ]);
    }

    /**
     * @Route("/environment", name="environment")
     */
    public function environmentAction(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $locale = ucfirst($request->getLocale());

        $text = $em->getRepository(EnvironmentText::class)->find(1);
        $images = $em->getRepository(EnvironmentImage::class)->findAll();

        return $this->render('subpage/environment.html.twig', [
            'text' => $text,
            'images' => $images,
            'locale' => $locale
        ]);
    }


    /**
     * @Route("/relaxation", name="relaxation")
     */
    public function relaxAction(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $locale = ucfirst($request->getLocale());

        $sliders = $em->getRepository(RelaxationSlider::class)->findAll();

        return $this->render('subpage/relaxation.html.twig', [
            'sliders' => $sliders,
            'locale' => $locale
        ]);
    }

    /**
     * @Route("/conference-training", name="con-tra")
     */
    public function conTraAction(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $locale = ucfirst($request->getLocale());

        $text1 = $em->getRepository(Conf::class)->find(1);
        $text2 = $em->getRepository(Conf::class)->find(2);

        return $this->render('subpage/con-tra.html.twig', [
            'text1' => $text1,
            'text2' => $text2,
            'locale' => $locale
        ]);
    }

    /**
     * @Route("/gallery", name="gallery")
     */
    public function galleryAction(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $locale = ucfirst($request->getLocale());

        $images = $em->getRepository(Gallery::class)->findAll();

        return $this->render('subpage/gallery.html.twig', [
            'images' => $images,
            'locale' => $locale
        ]);
    }
}