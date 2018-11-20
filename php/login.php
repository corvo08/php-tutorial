<html>
    <head>
        <title>My first PHP Website</title>
    </head>
    <body>
        <h2>Login Page</h2>
        <a href="index.php">Click here to go back</a><br /><br />
        <form action="checklogin.php" method="POST" style="font-size:18px;text-align:left">
        	<table>
        		<tr>
           			<td align="right"> Enter Username: </td>
           			<td align="left"><input type="text" name="username" required="required" style="text"/></td>
           		</tr>
           		<tr>
           			<td align="right">Enter Password: </td>
           			<td align="left"><input type="password" name="password" required="required" /></td>
           		</tr>
           		<tr>
           			<td align="left"><input type="submit" value="Login"/></td>
           		</tr>
           	</table>
        </form>
    </body>
</html>