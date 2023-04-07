<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/backoffice/', name: 'back_office_')]
#[IsGranted("ROLE_USER")]
class BackOfficeController extends AbstractController
{
    #[Route('dashboard', name: 'dashboard')]
    public function index(): Response
    {
        // code pour la page d'accueil du back office
        return $this->render('back_office/index.html.twig');
    }

    #[Route('address/add', name: 'address_add')]
    public function addAddress(Request $request)
    {
        // code pour ajouter une adresse
    }

    #[Route('address/edit/{id}', name: 'address_edit')]
    public function editAddress(Request $request, $id)
    {
        // code pour modifier une adresse
    }

    #[Route('address/delete/{id}', name: 'address_delete')]
    public function deleteAddress(Request $request, $id)
    {
        // code pour supprimer une adresse
    }

    #[Route('bank/add', name: 'bank_add')]
    public function addBank(Request $request)
    {
        // code pour ajouter un montant à la banque
    }

    #[Route('annonce/add', name: 'annonce_add')]
    public function addAnnonce(Request $request)
    {
        //
    }
}
