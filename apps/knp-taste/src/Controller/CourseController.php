<?php

namespace App\Controller;

use App\Entity\Course;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CourseController extends AbstractController
{
    #[Route('/course', name: 'course')]
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Course::class);

        $courses = $repository->findAll();

        return $this->render('course/index.html.twig', [
            'controller_name' => 'CourseController',
            'courses' => $courses,
        ]);
    }
}
