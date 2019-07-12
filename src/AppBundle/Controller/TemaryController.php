<?php

namespace AppBundle\Controller;

use DateTime;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use JMS\Serializer\SerializerBuilder;
/**
 *
 * @Rest\Route("api/v1/temary")
 */
class TemaryController extends Controller
{
    /**
     * @Rest\Post("")
     */
    public function createTemary(Request $request)
    {
        $serializer = SerializerBuilder::create()->build();
        try {
            $temaryDto = $serializer->deserialize($request->getContent(), 'AppBundle\Dto\TemaryDto', 'json');
            $temary= new \AppBundle\Entity\Temary();
            $temary->setDate(new DateTime($temaryDto->getDate()));
            $subjectDto=$temaryDto->getSubjects();
            $subject = $this->getDoctrine()->getRepository('AppBundle:Subject')->find($subjectDto->getId());
            if($subject == null){
                return new View("subject not found", Response::HTTP_BAD_REQUEST);
            }
            $temary->setSubjects($subject);
            $em = $this->getDoctrine()->getManager();
            $em->persist($temary);
            $em->flush();
            return new View("assistance created", Response::HTTP_CREATED);
        } catch (\Exception $e) {
            return new View("object json invalid", Response::HTTP_BAD_REQUEST);

        }
    }
}
