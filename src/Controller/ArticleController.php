<?php


// Mise en place du namespace pour la classe actuelle
namespace App\Controller;

// Nom de la classe ArticleController
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

    /** Page de garde du site
     * @Route("/", name="accueil")
     */
    public function accueil(){

        // Déclaration variable album pour les noms d'albums
        $articles = [
            'article1' => [
                'title' => 'Sonder',
                'cover' => 'https://static.fnac-static.com/multimedia/Images/FR/NR/f6/09/93/9636342/1540-1/tsp20190725175222/Sonder.jpg',
                'id' => 1
            ],
            'article2' => [
                'title' => 'Polaris/Errai',
                'cover' => 'https://m.media-amazon.com/images/I/81gdcm+5geL._SS500_.jpg',
                'id' => 2
            ],
            'article3' => [
                'title' => 'Polaris',
                'cover' => 'https://upload.wikimedia.org/wikipedia/en/thumb/2/26/Album_cover_for_Polaris_%28Tesseract_album%29.jpg/220px-Album_cover_for_Polaris_%28Tesseract_album%29.jpg',
                'id' => 3
            ],
            'article4' => [
                'title' => 'Altered State',
                'cover' => 'https://upload.wikimedia.org/wikipedia/en/thumb/2/2f/Altered_State_%28Album_Cover%29.jpg/220px-Altered_State_%28Album_Cover%29.jpg',
                'id' => 4
            ],
            'article5' => [
                'title' => 'One',
                'cover' => 'https://upload.wikimedia.org/wikipedia/en/thumb/9/99/Tesseract_-_One_%282011%29.png/220px-Tesseract_-_One_%282011%29.png',
                'id' => 5
            ],
            'article6' => [
                'title' => 'Concealing Fate',
                'cover' => 'https://content.hungama.com/audio%20album/display%20image/300x300%20jpeg/438277243.jpg',
                'id' => 6
            ]
        ];

        // utilisation de la méthode render pour appeler un fichier Twig et le compiler en html
        // en lui envoyant des variables

        return $this->render('accueil.html.twig', [
            'articles' => $articles
        ]);

    }

    /**
     * @Route("/discographie", name="discographie")
     */

    public function discographiePage()
    {
        // récupère et compile le contenu d'un fichier Twig
        // en html, et le renvoie en réponse
        return $this->render('discographie.html.twig');
    }




}