<?php
namespace App\Controller;


use App\Form\MoviesType;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use App\Entity\Movies;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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

    /**
     * Lists one Article.
     * @Route("/movies/{id}", name="movie_id", methods={"GET"}, requirements={"id"="\d+"})
     */
    public function getOneMovie($id)
    {
        $repository = $this->getDoctrine()->getRepository(Movies::class);

        // query for a single Product by its primary key (usually "id")
        $movies = $repository->find($id);

        if ($movies === null) {
            $view = View::create($movies, Response::HTTP_NOT_FOUND , []);
        } else {
            $view = View::create($movies, Response::HTTP_OK , []);
        }
        $view->setFormat('json');
        return $this->handleView($view);
    }

    /**
     * Create Article.
     * @FOSRest\Post("/movies")
     *
     */
    public function PostMoviesAction(Request $request)
    {
        $movies = new Movies();
        $form = $this->createForm(MoviesType::class, $movies);
        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($movies);
            $em->flush();
            $view = View::create($movies, Response::HTTP_CREATED , []);
        } else {
            $view = View::create($form, Response::HTTP_NOT_ACCEPTABLE , []);
        }
        $view->setFormat('json');
        return $this->handleView($view);
    }
}
