<?php namespace Tolkien\Model;

/**
 * SiteCategory is Category
 */
class SiteCategory extends Category
{

	/**
	 * @var string Link to Category Page
	 */
	private $url;

	/**
	 * @var array(Tolkien\Model\Post)
	 */
	private $posts = array();

	/**
	 * Construct
	 *
	 * @param string $name
	 * @param array(Tolkien\Model\Post) $posts
	 */
	public function __construct($name = '', $posts = array())
	{
		parent::__construct($name);
		$this->posts = $posts;
		$this->setUrl();
	}

	/**
	 * Set URL for Category Page
	 *
	 * @param string $url
	 */
	public function setUrl()
	{
		$this->url = '/categories/' . $this->getName() . '.html';
	}

	/**
	 * Get URL of Category page
	 *
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}

	/**
	 * Set posts of site
	 *
	 * @param array(Tolkien\Model\Post)
	 */
	public function setPosts($posts)
	{
		$this->posts = $posts;
	}

	/**
	 * Get posts of site
	 *
	 * @return array(Tolkien\Model\Post)
	 */
	public function getPosts()
	{
		return $this->posts;
	}

	/**
	 * Set a post to Category
	 *
	 * @param Tolkien\Model\Post $post
	 */
	public function setPost($post)
	{
		$this->posts[] = $post;
	}
}