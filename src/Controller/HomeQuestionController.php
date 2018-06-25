<?php
namespace App\Controller;


use App\Form\HomeQuestionsType;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use App\Entity\HomeQuestions;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Brand controller.
 *
 * @Route("/api")
 */
class HomeQuestionController extends FOSRestController
{
    /**
     * Lists all homeQuestion.
     * @FOSRest\Get("/homeQuestions")
     */
    public function getMovies()
    {
        $repository = $this->getDoctrine()->getRepository(HomeQuestions::class);

        // query for a single Product by its primary key (usually "id")
        $movies = $repository->findAll();

        $view = View::create($movies);
        $view->setFormat('json');

        // Gestion de la réponse
        return $this->handleView($view);
    }

    /**
     * one Article.
     * @Route("/homeQuestions/{id}", name="facts_id", methods={"GET"}, requirements={"id"="\d+"})
     */
    public function getOneMovie($id)
    {
        $repository = $this->getDoctrine()->getRepository(HomeQuestions::class);
        $HomeQuestions = $repository->find($id);

        if ($HomeQuestions === null) {
            $view = View::create($HomeQuestions, Response::HTTP_NOT_FOUND , []);
        } else {
            $view = View::create($HomeQuestions, Response::HTTP_OK , []);
        }
        $view->setFormat('json');
        return $this->handleView($view);
    }

    /**
     * Create Article.
     * @FOSRest\Post("/homeQuestions")
     *
     */
    public function PostMoviesAction(Request $request)
    {
        $HomeQuestions = new HomeQuestions();
        $form = $this->createForm(HomeQuestionsType::class, $HomeQuestions);
        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($HomeQuestions);
            $em->flush();
            $view = View::create($HomeQuestions, Response::HTTP_CREATED , []);
        } else {
            $view = View::create($form, Response::HTTP_BAD_REQUEST , []);
        }
        $view->setFormat('json');
        return $this->handleView($view);
    }
}
