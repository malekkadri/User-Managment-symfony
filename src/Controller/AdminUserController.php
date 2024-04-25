<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\UserEditType;
use App\Form\UserAddType;
use Doctrine\ORM\EntityManagerInterface;
use Endroid\QrCode\Builder\BuilderInterface;
use Endroid\QrCode\Writer\Result\PngResult;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin/utilisateur')]
class AdminUserController extends AbstractController
{   private $qrCodeBuilder;

    public function __construct(BuilderInterface $qrCodeBuilder)
    {
        $this->qrCodeBuilder = $qrCodeBuilder;
    }

    #[Route('/', name: 'admin_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {   $users = $userRepository->findAll();

        foreach ($users as $user) {
            // Check if $this->qrCodeBuilder is not null
            if ($this->qrCodeBuilder !== null) {
                // Customize the QR code data
                $qrCodeResult = $this->qrCodeBuilder
                    ->data($user->getFullName())
                    ->build();

                // Convert the QR code result to a string representation
                $qrCodeString = $this->convertQrCodeResultToString($qrCodeResult);

                // Add the QR code string to the article entity
                $user->setQrCode($qrCodeString);
            }
        }

        return $this->render('admin/user/index.html.twig', [
            'users' => $users,
        ]);
    
    }
    private function convertQrCodeResultToString(PngResult $qrCodeResult): string
    {
        // Convert the result to a string (e.g., base64 encode the image)
        // Adjust this logic based on how you want to represent the QR code data
        return 'data:image/png;base64,' . base64_encode($qrCodeResult->getString());
    }

    #[Route('/add', name: 'admin_user_add', methods: ['GET', 'POST'])]
    public function add(Request $request, UserRepository $userRepository): Response
    {
        $user = new User();
        $form = $this->createForm(UserAddType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('admin_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/user/add.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('admin/user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserEditType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('admin_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    /**
     * Delete user
     *
     * @Route("{id}/suppression", name="admin_user_delete")
     * 
     * @param User $user
     * @return Response
     */
    public function delete(User $user,EntityManagerInterface $entityManager)
    {
        // Check user role and redirect if is admin
        if($user->getRoleTitle() == "Administrateur"){
            $this->addFlash(
                'danger',
                "Vous ne pouvez pas supprimer l'utilisateur <strong>{$user->getFullName()}</strong>."
            );

            return $this->redirectToRoute('admin_user_index');
        }

       $entityManager->remove($user);
       $entityManager->flush();

        $this->addFlash(
            'success',
            "L'utilisateur <strong>{$user->getFullName()}</strong> a bien était supprimé !"
        );

        return $this->redirectToRoute('admin_user_index');
    }
}
