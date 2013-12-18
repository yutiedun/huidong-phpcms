<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$sitename}</title>
{literal}
<style type="text/css">
.category ul{list-style:none;}
.category ul li{list-style:none; padding:20px; float:left;}
</style>
{/literal}
<script language="javascript" src="{$approot}js/jquery-1.8.2.min.js"></script>
</head>

<body>
<div class="category">
<ul>
{foreach from=$categories item="category"}
<li><a href="{$category->url}" target="_self">{$category->catname}</a></li>
{/foreach}
</ul>
</div>
{literal}
<script language="javascript">
$(document).ready(function(e) {
    $(".category").find("a").each(function(index, element) {
		$(this).mouseover(function(e) {
			$(this).css({"color":"#f00", "background":"#00f"});
		});
		$(this).mouseout(function(e) {
			$(this).css({"color":"#000", "background":"#fff"});
		});
	});
});
</script>
{/literal}
</body>
</html>