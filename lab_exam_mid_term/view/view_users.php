<?php
require_once('../model/usersModel.php');


$data = get_all_users();



?>


<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="4" align="CENTER">Users</td></tr>
		<tr>
			<td>ID</td><td>NAME</td><td>USER TYPE</td>
		</tr>
		<?php
			while ($row = $data->fetch_assoc()) {
				?>
					<tr>
						<td><?php echo $row['user_id']; ?></td><td><?php echo $row['name']; ?></td><td><?php echo $row['user_type']; ?></td>
					</tr>

			<?php
			}
		?>


			<td colspan="3" align="right">
				<a href="home.html">Go Home</a>
			</td>
		</tr>
	</table>			
</center>