<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newslist</title>
<script language="javascript" src="/demo/js/pager.js"></script>
</head>

<body>
<table border="1" cellpadding="5" cellspacing="0">
<tr>
<th>id</th>
<th>title</th>
<th>time</th>
</tr>

{foreach from=$data item="news"}
<tr>
<td>{$news->id}</td>
<td>{$news->title}</td>
<td>{$news->inputtime|date_format:"%Y-%m-%d %H:%M:%S"}</td>
</tr>
{/foreach}

</table>

<div style="margin:10px auto; text-align:center;">
<form id="changepage" method="post" action="{$changepage}" style="display:inline; margin:0px; padding:0px;">
{$pagelink}
</form>
</div>

</body>
</html>
