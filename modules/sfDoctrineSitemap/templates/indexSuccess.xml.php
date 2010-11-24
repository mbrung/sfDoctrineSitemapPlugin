<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:video="http://www.google.com/schemas/sitemap-video/1.1"> 
<?php foreach($objects as $object):?>
<?php include_partial("sfDoctrineSitemap/url", array("object"=>$object))?>
<?php endforeach;?>
</urlset> 