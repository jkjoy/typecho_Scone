<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="span8">    
 <h2><?php $this->title() ?></h2>
By <a target="_blank" href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> - <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
        <?php $this->date('Y-m-d'); ?>
      </time>
<hr/>
<?php $this->content(); ?>
<p>文章出处： <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></p>
<hr/>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>