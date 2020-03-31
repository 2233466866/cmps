<?php

/**
 * 动漫风Typecho博客主题
 * @package Fantasy Theme
 * @author Dreamer-Paul
 * @version 1.3
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;

$this->need('header.php');

?>
<main>
    <div class="wrap min">
        <section class="board">
<?php while($this->next()): ?>
            <div class="post-item">
                <time class="date"><?php $this->date(); ?></time>
                <h3 class="title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
            </div>
<?php endwhile; ?>
        </section>
        <?php $this->pageNav('', '', 3, '...', array('wrapTag' => 'section', 'itemTag' => 'span')); ?>
        <?php if (class_exists("Links_Plugin")):?>
        <section class="board">
            <?php Links_Plugin::output(
                '<span style="margin-right:1em;"><a href="{url}" target="_blank">{name}</a></span>'
            );?>
        </section>
        <?php endif;?>
    </div>
</main>
<?php $this->need('footer.php'); ?>