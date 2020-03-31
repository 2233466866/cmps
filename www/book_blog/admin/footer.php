<?php if(!defined('__TYPECHO_ADMIN__')) exit; ?>
<script src="extend/user.js?v=1.02"></script>
<script type="text/javascript" src="extend/admin_custom.js"></script>
    </body>
</html>
<?php
/** 注册一个结束插件 */
Typecho_Plugin::factory('admin/footer.php')->end();
