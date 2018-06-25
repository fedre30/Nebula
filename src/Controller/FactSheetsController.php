<?php
namespace App\Controller;


use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use App\Entity\FactSheets;

/**
 * Brand controller.
 *
 * @Route("/api")
 */
class FactSheetsController extends FOSRestController
{
    /**
     * Lists all Articles.
     * @FOSRest\Get("/facts")
     */
    public function getMovies()
    {
        $repository = $this->getDoctrine()->getRepository(FactSheets::class);

        // query for a single Product by its primary key (usually "id")
        $movies = $repository->findAll();

        $view = View::create($movies);
        $view->setFormat('json');

        // Gestion de la réponse
        return $this->handleView($view);
    }

    /**
     * Lists one Article.
     * @Route("/facts/{id}", name="fact_id", methods={"GET"}, requirements={"id"="\d+"})
     */
    public function getOneMovie($id)
    {
        $repository = $this->getDoctrine()->getRepository(FactSheets::class);
        // query for a single Product by its primary key (usually "id")
        $movies = $repository->find($id);
        $view = View::create($movies);
        $view->setFormat('json');
        // Gestion de la réponse
        return $this->handleView($view);
    }
}
