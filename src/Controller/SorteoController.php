<?php

namespace App\Controller;

use App\Entity\Sorteo;
use App\Form\SorteoType;
use App\Repository\SorteoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/')]
final class SorteoController extends AbstractController{
    #[Route(name: 'app_sorteo_index', methods: ['GET'])]
    public function index(SorteoRepository $sorteoRepository): Response
    {
        return $this->render('sorteo/index.html.twig', [
            'sorteos' => $sorteoRepository->findLastSorteos(),
        ]);
    }

    #[Route('/comprobar', name: 'app_sorteo_comprobar', methods: ['GET'])]
    public function comprobar(): Response
    {
        return $this->render('sorteo/comprobar.html.twig');
    }

   
    #[Route('/validar', name: 'app_sorteo_validar', methods: ['GET'])]
    public function validar(SorteoRepository $sorteoRepository, Request $request, EntityManagerInterface $em): Response
    {
       
        if ($request->isMethod('GET'))
        {
            $fechaStr = $request->query->get('fecha');
            $numero = $request->query->get('numero');
            $serie = $request->query->get('serie');
            
            
            if (!empty($fechaStr) && !empty($numero) && !empty($serie))
            {
                $fecha = \DateTime::createFromFormat('Y-m-d', $fechaStr);
                if (!$fecha) {
                    throw new \Exception('Formato de fecha incorrecto');
                }
                $sorteo = $sorteoRepository->findNumero($fecha, $numero, $serie);
                
                
                return $this->render('sorteo/resultado.html.twig', [
                    'sorteo' => $sorteo
                ]);

            }
        
            else
            {
                $this->addFlash('warning', 'Error en los datos.');
            }
        }

        return $this->render('sorteo/index.html.twig', [
            'sorteos' => $sorteoRepository->findLastSorteos(),
        ]);
    }
   
}
