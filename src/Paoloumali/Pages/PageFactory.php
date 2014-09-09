<?php namespace Paoloumali\Pages;

use Illuminate\Config\Repository;
use Illuminate\View\Factory as ViewFactory;
use Paoloumali\Templating\Tpl;

class PageFactory {

	protected $config;

	protected $tpl;

	protected $views;

	public function __construct(Repository $config = null, 
																													ViewFactory $views, 
																													Tpl $tpl)
	{
		$this->config = $config;
		$this->views = $views;
		$this->tpl = $tpl;
	}

	public function cfg($key = null)
	{
		return $key ? $this->config->get('pages::'.$key) : $this->config->get('pages::config');
	}

	/**
	 * Creates a view.
	 *
	 * @param  string  $key id or slug
	 * @return Illuminate\View\View
	 */
	public function send($key)
	{
		return $this->views->make($key);
	}
}
