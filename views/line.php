<?php defined('SYSPATH') OR die('No direct script access!');?>
<?php if($breadcrumbs->count()):?>
<?php $i = 0; foreach($breadcrumbs as $breadcrumb):?>
<?php if($set_urls && ! empty($breadcrumb->url)):?>
<a href="<?php echo $breadcrumb->url; ?>"><?endif?>
<?php echo $breadcrumb->name; ?>
<?php if($set_urls && ! empty($breadcrumb->url)):?>
</a>
<?endif?>
<?php $i++; endforeach; ?>
<?endif?>