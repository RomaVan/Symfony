<?php
namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Form\TestFormType;
use Doctrine\ORM\Mapping as ORM;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Test;

/**
 * @ORM\Entity
 * @ORM\Table(name="lucky_controller")
 */
class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number/{max}")
     */
    public function numberAction($max = 1)
    {
        $number = mt_rand(0, $max);

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
            'max' => $max,
        ));
//        return new Response(
//            '<html><body>Lucky number: '.$number.'</body></html>'
//        );
    }

    /**
     *@Route("/test")
     */
    public function elseAction()
    {
        return new Response('<html><body>Test</body></html>');
    }

    /**
     * @Route("/some")
     */
    public function someAction()
    {
        $test = new Test();
        $test->setName('name');
        $test->setNumbers(55);
        $test->setSomeName('someNmaem');

        $em = $this->getDoctrine()->getManager();
        $em->persist($test);
        $em->flush();

        return new Response('all Done');
    }

    /**
     * @Route("/list")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        dump($em->getRepository('AppBundle:Test'));die;
        $model = $em->getRepository('AppBundle:Test')
            ->findAll();

        return $this->render('lucky/test.html.twig',[
            'test' => $model
        ]);
    }

    /**
     * @Route("/link/{linkId}", name="link_url")
     */
    public function showAction($linkId)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Test')
            ->findOneBy(['id' => $linkId]);
        if (!$entity) {
            throw $this->createNotFoundException('not found this');
        }

        return $this->render('lucky/show.html.twig', [
            'name' => $entity
        ]);

    }

    /**
     * @Route("/new2", name="new_2")
     */
    public function newAction()
    {
        $form = $this->createForm(TestFormType::class);

        return $this->render('admin/genus/new.html.twig', [
            'form' => $form,
        ]);
    }
}