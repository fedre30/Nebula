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
class HomeQuestionsController extends FOSRestController
{
    /**
     * Lists all homeQuestion.
     * @FOSRest\Get("/homeQuestions")
     */
    public function getQuestions()
    {
        $repository = $this->getDoctrine()->getRepository(HomeQuestions::class);

        // query for a single Product by its primary key (usually "id")
        $data = $repository->findAll();

        $view = View::create($data);
        $view->setFormat('json');

        // Gestion de la réponse
        return $this->handleView($view);
    }

    /**
     * one Article.
     * @Route("/homeQuestions/{id}", name="homeQuestions_id", methods={"GET"}, requirements={"id"="\d+"})
     */
    public function getOneQuestion($id)
    {
        $repository = $this->getDoctrine()->getRepository(HomeQuestions::class);
        $data = $repository->find($id);

        if ($data === null) {
            $view = View::create($data, Response::HTTP_NOT_FOUND , []);
        } else {
            $view = View::create($data, Response::HTTP_OK , []);
        }
        $view->setFormat('json');
        return $this->handleView($view);
    }

    /**
     * Create Article.
     * @FOSRest\Post("/homeQuestions")
     *
     */
    public function PostQuestionsAction(Request $request)
    {
        $data = new HomeQuestions();
        $form = $this->createForm(HomeQuestionsType::class, $data);
        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($data);
            $em->flush();
            $view = View::create($data, Response::HTTP_CREATED , []);
        } else {
            $view = View::create($form, Response::HTTP_BAD_REQUEST , []);
        }
        $view->setFormat('json');
        return $this->handleView($view);
    }
}
