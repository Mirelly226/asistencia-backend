<?php


use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use JMS\Serializer\SerializerBuilder;
use AppBundle\Dto\AssistanceDto;
/**
 *
 * @Rest\Route("api/v1/assistance")
 */
class AssistanceController extends AbstractFOSRestController
{
    /**
     * @Rest\Post("")
     */
    public function createAssistance(Request $request)
    {
        $serializer = SerializerBuilder::create()->build();
        try {
            $assistanceDto = $serializer->deserialize($request->getContent(), 'AppBundle\Dto\AssistanceDto', 'json');
            $assistance= new \AppBundle\Entity\Assistance();
            $assistance->setAssistance($assistanceDto->getAssistance());
            $assistance->setDate(new DateTime($assistanceDto->getDate()));
            $studenDto=$assistanceDto->getStudents();
            $subjectDto=$assistanceDto->getSubjects();
            $student = $this->getDoctrine()->getRepository('AppBundle:Student')->find($studenDto->getId());
            if($student == null){
                return new View("student not found", Response::HTTP_BAD_REQUEST);
            }
            $subject = $this->getDoctrine()->getRepository('AppBundle:Subject')->find($subjectDto->getId());
            if($subject == null){
                return new View("subject not found", Response::HTTP_BAD_REQUEST);
            }
            $assistance->setStudents($student);
            $assistance->setSubjects($subject);
            $em = $this->getDoctrine()->getManager();
            $em->persist($assistance);
            $em->flush();
            return new View("assistance created", Response::HTTP_CREATED);
        } catch (\Exception $e) {
            return new View("object json invalid", Response::HTTP_BAD_REQUEST);

        }
    }
}