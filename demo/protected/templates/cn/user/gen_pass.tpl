<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form method="post" action="?">
<input type="text" name="pass_ori" value="{$pass_ori}" />
<input type="submit" value="提交" />
</form>
{if $salt neq ""}
<h2>salt: {$salt}</h2>
<h2>password: {$password}</h2>
{else}
<h2>请输入密码</h2>
{/if}
</body>
</html>
