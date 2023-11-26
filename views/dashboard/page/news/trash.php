<p>
<a href="<?= URL ?>index.php/admin/newsList/1"><button type="button" class="btn btn-primary">List</button></a>
<a href=""><button type="button" class="btn btn-primary">Trash(<?=  count($data['trash'])?>)</button></a>
</p>
<table class="table table-bordered table-hover">
		<tr><th>ID</th>
			<th>Title</th>
			<th>Sort_Des</th>
			<th>Content</th>
			<th>avatar</th>
			<th>Status</th>
			<th>retore</th>
			<th>Delete</th>
		</tr>
		
		<?php foreach ($data['news'] as $value):?>
			<tr>
				<td><?= $value['id'] ?></td>
				<td><?= $value['title'] ?></td>
				<td><?= $value['short_description'] ?></td>
				<td><?= $value['content'] ?></td>
				<td><img style="width: 100px;" src="<?= URL?>public/img/news/<?= $value['avatar'] ?>" alt=""></td>
				<td>
				
					<?php
					if ($value['status']==0) { ?>
						<a onclick="actionChange('Ẩn Danh mục','<?=URL ?>index.php/admin/delStatusNews/<?= $value['id'] ?>')" class= "showcursor"> <img class ="icon" style="width:50px;" src="<?=URL ?>public/backend/images/tich.jpg"/></a>
						
					<?php } else { ?>
						<a onclick="actionChange('Hiện Danh mục','<?=URL ?>index.php/admin/retoreStatusNews/<?= $value['id'] ?> class= "showcursor" href= "<?=URL ?>index.php/admin/retoreStatusProduct/<?= $value['id'] ?>"> <img class ="icon " style="width:50px;" src="<?=URL ?>public/backend/images/forbidden.jpg"/></a>
					<?php } ?>		
				</td>

				<td><a onclick="actionChange('Khôi phục','<?=URL ?>index.php/admin/retoreTempNews/<?= $value['id']?>')"><img class="icon" style="width:50px;" src="<?=URL ?>public/backend/images/reload.png"/></a></td>
				<td><a onclick="actionChange('Xóa','<?=URL ?>index.php/admin/deleteNews/<?= $value['id']?>')"><img class="icon" style="width:50px;" src="<?=URL ?>public/backend/images/dauX.jpg"/></a></td>
			</tr>
		<?php endforeach; ?>
</table>
<?= $data['paginator'] ?> 