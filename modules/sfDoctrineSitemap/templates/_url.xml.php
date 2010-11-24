<url>
<?php include_partial("sfDoctrineSitemap/url_".sfInflector::underscore(get_class(($object instanceof sfOutputEscaper)?$object->getRawValue():$object)), array("object"=>$object))?>

<priority>0.8</priority>
</url>
