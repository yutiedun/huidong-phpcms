<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User: List</title>
</head>

<body>
<table border="0">
<tr>
<th>ID</th>
<th>username</th>
<th>email</th>
<th>name</th>
<th>act</th>
</tr>

{foreach item="user" from=$data}
<tr>
<td>{$user->id}</td>
<td>{$user->username}</td>
<td>{$user->email}</td>
<td>{$user->userprofile->firstname} {$user->userprofile->lastname}</td>
<td>change password</td>
</tr>
{/foreach}

</table>

<div>{$pager}</div>
<div>{$verifycode}</div>

</body>
</html>
