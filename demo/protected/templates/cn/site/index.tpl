<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$sitename}</title>
<link href="/css/index.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h2>站点建设中，请稍候访问。。。</h2>
{if $user neq ""}{$user->username}
{if $user->isadmin==1}&nbsp;<a href="/admin/article/index.html">管理员后台</a>{/if}
&nbsp;<a href="/user/login/logout.html">退出</a>
{/if}
{$time}
</body>
</html>