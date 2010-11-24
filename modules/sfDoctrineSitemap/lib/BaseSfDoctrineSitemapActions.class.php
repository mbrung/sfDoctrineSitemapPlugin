<?php 

class BaseSfDoctrineSitemapActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->setLayout(false);
		
		$this->objects = $this->getObjectsForSitemap();
	}
	
	protected function getObjectsForSitemap() {
		return Doctrine::getTable("Page")->createQuery()->select("slug,updated_at")->execute()->getData();
	}
}
