<?php
namespace App\Controller;

use DateTime;
use App\Entity\User;
use App\Entity\Comment;
use App\Entity\MicroPost;
use App\Entity\UserProfile;
use App\Repository\CommentRepository;
use App\Repository\MicroPostRepository;
use App\Repository\UserProfileRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController
{
    private array $messages = [
       ["message" => 'Hello', 'created' => '2023/06/12'],
       ["message" => 'Hi', 'created' => '2023/04/12'],
       ["message" => 'Bye!', 'created' => '2021/05/12']
    ];


    #[Route('/', name: 'app_index')]
    public function indexMicro(MicroPostRepository $posts, CommentRepository $comments): Response 
    {

     /*   $post = new MicroPost();
        $post->setTitle('Hello');
        $post->setText('Hello');
        $post->setCreated(new DateTime());*/


     /*   $post = $posts->find(15);
        $comment = $post->getComments()[0];
        $comment->setPost(null);
        $comments->save($comment, true);*/

      /*  $post->removeComment($comment);
        $posts->add($post, true);*/
        //$post->getComments()->count();
      //  dd($post);

     /*  

        $comment = new Comment();
        $comment->setText('Hello');
        $comment->setPost($post);*/
        //$post->addComment($comment);
       // $posts->save($post, true);
      // $comments->save($comment, true);
      /*  
        trabalhando com one to one
      $user = new User();
        $user->setEmail('email@ermail.com');
        $user->setPassword('123456789');
    
        $profile = new UserProfile();
        $profile->setUser($user);
        $profiles->save($profile, true);*/

      /* $profile = $profiles->find(1);
        $profiles->remove($profile, true);*/

      return $this->render('hello/index.html.twig',
        [
            'messages' => $this -> messages,
            'limit' => 3
        ]
    );
    }

    #[Route('/messages/{id<\d+>}', name: 'app_show_one')]
    public function showOne(int $id): Response
    {
        return $this->render(
            'hello/show_one.html.twig',
            [
                'message' => $this->messages[$id]
            ]
        );

        // return new Response($this -> messages[$id]);
    }
}


?>