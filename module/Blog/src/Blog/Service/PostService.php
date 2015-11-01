 <?php
// Filename: /module/Blog/src/Blog/Service/PostService.php namespace Blog\Service;
namespace Blog\Service;

class PostService implements PostServiceInterface
{
    protected $postMapper;

    /**
     * @param PostMapperInterface $postMapper
     */
    public function __construct(PostMapperInterface $postMapper)
    {
        $this->postMapper = $postMapper;
    }

    /**
     * {@inheritDoc}
     */
    public function findAllPosts()
    {
        return $this->postMapper->findAll();
    }
    /**
     * {@inheritDoc}
     */
    public function findPost($id)
    {
        return $this->postMapper->find($id);
    }
}
