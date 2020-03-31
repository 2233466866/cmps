/* 
 * 需要在 /admin/footer.php适当位置添加以下代码
 * <!-- 自定义js代码 -->
 * <script type="text/javascript" src="//域名/usr/extend/admin-custom.js"></script>
 *
 */
 

/*<!--彩色标签云-->*/
let tags = document.querySelectorAll("ul.typecho-list-notable.tag-list.clearfix .size-5");
let colorArr = ["#428BCA", "#AEDCAE", "#ECA9A7", "#DA99FF", "#FFB380", "#D9B999"];
tags.forEach(tag => {
    tagsColor = colorArr[Math.floor(Math.random() * colorArr.length)];
    tag.style.backgroundColor = tagsColor;
});