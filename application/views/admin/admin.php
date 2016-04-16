<a href="../index.php"> Home </a>
<h1> Create New User</h1>

<form action="/admin/create_user" method="post">

   Username:  <input type="text" name="username"><br>
    Password:        <input type="password" name="password"/>
         <br><input type="submit">
                        </form>

<table>
    <thead>
    <th>ID</th>
      <th>Username</th>
        <th>Options</th>
        
        </thead>
<?php foreach($users as $_key => $_value): ?> 
<tr> 
    <td><?=$_value->user_id?> </td>
    <td><?=$_value->username?> </td>
    <td><a href=<?=("/admin/delete_user/{$_value->user_id}")?>> Delete </a> </td>
</tr>
<?php endforeach ;?>

</table>