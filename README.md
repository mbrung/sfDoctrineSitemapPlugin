sfDoctrineSitemapPlugin
=======================

We use this plugin to dynamically generate a sitemap.xml for a Symfony project.

Installation
------------

First

	cd plugins
	git clone git://github.com/mbrung/sfDoctrineSitemapPlugin.git
	
Then add, to your ProjectConfiguration

	 $this->enablePlugins('sfDoctrineSitemapPlugin');
	
Finally, enable the sitemap module by adding, to your settings.yml:

	all:
	  .settings:
	    enabled_modules: [default, sfDoctrineSitemap]
	
How to use it?
--------------

### Basics

By default the sitemap module will try and look for a Page model.

### Supporting a new Model

# Tell the plugin what Model to process
You can customize what models to look for by overriding the `getObjectsForSitemap` method in the controller.

# Define how to render the objects as a sitemap entry
By adding a partial, named `_url_CLASSNAME.xml.php`