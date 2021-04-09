<?php

namespace App\Controller;
use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PostRepository;
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */

    public function index(PostRepository $ripo)
    {
      $posts = $ripo->findAll();

        return $this->render('home/index.html.twig', [
          'posts' => $posts

        ]);
    }

    /**
     * @Route("/post_home/{id}", name="1_home", methods={"GET", "POST"})
     */
     public function post_home(Post $post): Response
     {
       return $this->render('home/post.html.twig',[
         'post' => $post
        ]);
      }
}
