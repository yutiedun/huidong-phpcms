<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$sitename}</title>
{literal}
<style type="text/css">
#nav{background-image:url(/demo/images/navM.gif);}
#nav div{
background-image:url(/demo/images/nav_S.gif);
float:left;
width:4px; 
height:34px; 
font-size:0px; 
margin:0px 4px; 
background-repeat:no-repeat; 
background-position:top; 
background-repeat:no-repeat;
}
a.nav{
display:block; float:left; padding-left:12px; font-weight:bold; color:#fff; height:34px; font-size:14px; text-decoration:none; cursor:pointer;
}
a.nav span{
display:block; float:left; padding-right:12px; font-weight:bold; height:24px; padding-top:10px;
}
a.nav:hover{
display:block; float:left; padding-left:12px; font-weight:bold; color:#fff; height:34px; font-size:14px; background-image:url(/demo/images/nav_Over_L.gif); background-position:left center; background-repeat:no-repeat; text-decoration:none;
}
a.nav:hover span{
display:block; float:left; padding-right:12px; font-weight:bold; height:24px; padding-top:10px;background-image:url(/demo/images/nav_Over_R.gif); background-position:right center; background-repeat:no-repeat;
}
#curTab{
display:block; float:left; padding-left:12px; font-weight:bold; color:#f00; height:34px; font-size:14px;background-image:url(/demo/images/nav_On_L.gif); background-position:left center; background-repeat:no-repeat;
}
#curTab span{
display:block; float:left; padding-right:12px; font-weight:bold;height:24px; padding-top:10px;background-image:url(/demo/images/nav_On_R.gif);background-position:right center; background-repeat:no-repeat;
}
</style>
{/literal}
<script language="javascript" src="/demo/js/jquery-1.8.2.min.js"></script>
{literal}
<script language="javascript">
function changeId(obj){
	document.getElementById("curTab").id = "";
	obj.id = "curTab";
	obj.blur();
}
</script>
{/literal}
</head>

<body>
<div>
<ul>
{foreach from=$categories item="category"}
<li><a href="{$category->url}" target="_self">{$category->catname}</a></li>
{/foreach}
</ul>
</div>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="3"><img src="/demo/images/navL.gif" width="3" height="34" /></td>
        <td id="nav">
			<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
			  <tr>
				<td>
			<a href="#" id="curTab" class="nav" onclick="changeId(this)"><span>首页</span></a>
            {foreach from=$categories item="category"}
            <div></div>
            <a href="#" target="_self" class="nav" onclick="changeId(this)"><span>{$category->catname}</span></a>
            {/foreach}
                </td>
			  </tr>
			</table>
		</td>
        <td width="3"><img src="/demo/images/navR.gif" width="3" height="34" /></td>
      </tr>
</table>

<div>
<ul>
{foreach from=$news item="newsone"}
<li><a href="{$newsone->url}" target="_blank">{$newsone->title}</a></li>
{/foreach}
</ul>
</div>
</body>
</html>