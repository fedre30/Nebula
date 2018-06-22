<?php
namespace App\Controller;


use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use App\Entity\Movies;

/**
 * Brand controller.
 *
 * @Route("/api")
 */
class MoviesController extends FOSRestController
{
    /**
     * Lists all Articles.
     * @FOSRest\Get("/movies")
     */
    public function getMovies()
    {
        $repository = $this->getDoctrine()->getRepository(Movies::class);

        // query for a single Product by its primary key (usually "id")
        $movies = $repository->findAll();

        $view = View::create($movies);
        $view->setFormat('json');

        // Gestion de la réponse
        return $this->handleView($view);
    }
}
