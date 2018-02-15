<?php
namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;

use Blog\Model\PostRepositoryInterface;

use Zend\View\Model\ViewModel;

class ListController extends AbstractActionController
{

    /**
     * @var PostRepositoryInterface
     */
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function indexAction()
    {
        return new ViewModel([
            'posts' => $this->postRepository->findAllPosts(),
        ]);
    }
}
