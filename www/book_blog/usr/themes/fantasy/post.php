<?php

if (!defined('__TYPECHO_ROOT_DIR__')) exit;

$this->need('header.php');

?>
<main>
    <div class="wrap min">
        <section class="board">
            <div class="post-title">
                <h2><?php $this->title() ?></h2>
                <div class="post-meta">
                    <time class="date"><?php $this->date(); ?></time>
                    <span class="category"><?php $this->category('，'); ?></span>
                    <span class="comments"><?php $this->commentsNum('%d 评论'); ?></span>
<?php if($this->authorId == $this->user->uid): ?>
                    <span class="edit"><a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" target="_blank">编辑</a></span>
<?php endif; ?>
                </div>
            </div>
            <article class="post-content">
                <?php $this->content(); ?>
            </article>
        </section>
        <?php $this->need('comments.php'); ?>
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