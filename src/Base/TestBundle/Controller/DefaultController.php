<?php

namespace Base\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Base\TestBundle\Entity\Product;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $id = 1;
        $data = $em->getRepository('BaseTestBundle:Product')->find($id);
        
        echo "Producto: ".$data->getTitle().'<br>';
        echo "Product Model: ".$data->getModel().'<br>';
//        echo "Producto: "; ladybug_dump($data->getPostedAt());
        echo "Producto Category: ".$data->getCategory()->getTitle().'<br>';
//        foreach ($data->getCategory() AS $category){
//             echo "Producto Category: ".$category->getTitle().'<br>';
//        }
       
        
//        $data = $em->getRepository('BaseTestBundle:Location')->getTest($id);
//        $data2 = $em->getRepository('BaseTestBundle:Location')->getMethod($id);
        //$query = $em->createQuery('SELECT n FROM BaseTestBundle:Location n WHERE n.id ='.$id);
        //$metadata = $em->getMetadataFactory()->getAllMetadata();
//        
//        ladybug_dump($data2->getResult());
        return $this->render('BaseTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
