<?php
namespace App\Controller;


use App\Form\QuizzType;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use App\Entity\Quizz;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Brand controller.
 *
 * @Route("/api")
 */
class QuizzController extends FOSRestController
{
    /**
     * Lists all homeQuestion.
     * @FOSRest\Get("/quizz")
     */
    public function getQuizz()
    {
        $repository = $this->getDoctrine()->getRepository(Quizz::class);

        // query for a single Product by its primary key (usually "id")
        $quizz = $repository->findAll();

        $view = View::create($quizz);
        $view->setFormat('json');

        // Gestion de la réponse
        return $this->handleView($view);
    }

    /**
     * one Article.
     * @Route("/quizz/{id}", name="quizz_id", methods={"GET"}, requirements={"id"="\d+"})
     */
    public function getOneQuizz($id)
    {
        $repository = $this->getDoctrine()->getRepository(Quizz::class);
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
     * @FOSRest\Post("/quizz")
     *
     */
    public function PostQuizzAction(Request $request)
    {
        $HomeQuestions = new Quizz();
        $form = $this->createForm(QuizzType::class, $HomeQuestions);
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
