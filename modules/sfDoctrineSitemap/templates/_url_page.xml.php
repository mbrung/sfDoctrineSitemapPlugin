<loc><?php echo url_for("@page_show?slug=".$object->slug, true) ?></loc>
<lastmod><?php echo $object->getDatetimeObject("updated_at")->format("Y-m-d") ?></lastmod>
<changefreq>monthly</changefreq>