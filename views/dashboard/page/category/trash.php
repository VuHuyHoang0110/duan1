<p>
<a href="<?= URL ?>index.php/admin/cateList/1"><button type="button" class="btn btn-primary">List</button></a>
<a href=""><button type="button" class="btn btn-primary">Trash(<?=  count($data['trash'])?>)</button></a>
</p>
<table class="table table-bordered table-hover">
		<tr><th>Category_id</th>
			<th>Category_name</th>
			<th>Parent</th>
			<th>Status</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php foreach ($data['trash'] as $value):?>
			<tr>
				<td><?= $value['id'] ?></td>
				<td><?= $value['category_name'] ?></td>
				<td>
					<?php
					if ($value['parent']==0) {
						echo $value['parent']; 
					}
					else {
						foreach ($data['allCat'] as $p) {
							if ($value['parent'] == $p['id']) {
								echo $p['category_name'];
							}
						}
					}
					
					?>
					
				</td>

				<td>
					<?php
					if ($value['status']==0) { ?>
						<a onclick="actionChange('Xác nhận ẩn','<?=URL ?>index.php/admin/delStatusCate/<?= $value['id']?>')" class= "showcursor"> <img class ="icon" style="width:50px;" src="<?=URL ?>public/backend/images/tich.jpg"/></a>
						
					<?php } else { ?>
						<a class= "showcursor" onclick="actionChange('Xác nhận hiện','<?=URL ?>index.php/admin/retoreStatusCate/<?= $value['id']?>')"> <img class ="icon " style="width:50px;" src="<?=URL ?>public/backend/images/forbidden.jpg"/></a>
					<?php } ?>	
				</td>

				<td><a onclick="actionChange('Khôi phục','<?=URL ?>index.php/admin/retoreTempCate/<?= $value['id']?>')"><img class="icon" style="width:50px;" src="<?=URL ?>public/backend/images/reload.png"/></a></td>
				<td><a onclick="actionChange('Xóa','<?=URL ?>index.php/admin/deleteCategory/<?= $value['id']?>')"	><img class="icon" style="width:50px;" src="<?=URL ?>public/backend/images/dauX.jpg"/></a></td>
			</tr>
		<?php endforeach; ?>
</table>
<?= $data['paginator'] ?> 