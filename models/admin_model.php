
<?php
class Admin_Model extends Model{
	 function __construct(){
	 	parent::__construct();
	 }
	 public function cateAdd(){
		 $cate = array(
			'category_name'=>$_POST['category_name'],
			'parent'=>$_POST['parent'],
			'status'=>$_POST['status'],

		 );
		 $this->addRecord('category',$cate);	
	 }
	 public function cateEdit($id)
	 {
		$cate = array(
			'category_name'=>$_POST['category_name'],
			'parent'=>$_POST['parent'],
			'status'=>$_POST['status'],

		 );
		 $this->editRecord('category',$cate,$id);	
	 }
	 public function orderEdit($id)
	 {
		$cate = array(
			'name'=>$_POST['name'],
			'phone'=>$_POST['phone'],
			'address'=>$_POST['address'],
			'delivered'=>$_POST['status']

		 );
		 $this->editRecord('orders',$cate,$id);	
	 }
	 public function productAdd(){
		 $i = "temp.png";
		 if ($_FILES['image']['size'] == 0 )
		 {
			echo $_FILES['image']['error']; 
		 }
		 else {
			 $file = $_FILES['image'];
			 $i = $file['name'];
			 $u = new Upload();
			 $u->doUpload($file);

		 }
		$pro = array(
		   'product_name'=>$_POST['product_name'],
		   'brand_id'=>$_POST['brand_id'],
		   'category_id'=>$_POST['category_id'],
		   'image'=>$i,
		   'sale'=>$_POST['sale'],
		   'quantity'=>$_POST['quantity'],
		   'price'=>$_POST['price'],
		   'product_detail'=>$_POST['product_detail'],
		   'status'=>$_POST['status'],
		   'created_at'=>date("Y-m-d H:i:s"),
		);
		$this->addRecord('products',$pro);	
	}
	 
	 public function productEdit($id){
		$pro = array(
			'product_name'=>$_POST['product_name'],
			'brand_id'=>$_POST['brand_id'],
			'category_id'=>$_POST['category_id'],
			'sale'=>$_POST['sale'],
			'quantity'=>$_POST['quantity'],
			'price'=>$_POST['price'],
			'product_detail'=>$_POST['product_detail'],
			'status'=>$_POST['status'],
			'created_at'=>date("Y-m-d H:i:s"),
			);
		 if ($_FILES['image']['size'] != 0 )
		 {
			 $file = $_FILES['image'];
			 $i = $file['name'];
			 $pro['image'] = $i;
			 $u = new Upload();
			 $u->doUpload($file);
		 }		
		$this->editRecord('products',$pro,$id);	
	}
	public function newsAdd(){
		$i = "temp.png";
		if ($_FILES['avatar']['size'] == 0 )
		{
		   echo $_FILES['avatar']['error']; 
		}
		else {
			$file = $_FILES['avatar'];
			$i = $file['name'];
			$u = new Upload();
			$u->newsUpload($file);

		}
	   $news = array(
		  'title'=>$_POST['title'],
		  'short_description'=>$_POST['short_description'],
		  'content'=>$_POST['content'],
		  'avatar'=>$i,
		  'status'=>$_POST['status'],
		  'created_at'=>date("Y-m-d H:i:s"),
	   );
	   $this->addRecord('news',$news);	
   }
	public function newsEdit($id){
		$pro = array(
			'title'=>$_POST['title'],
		  	'short_description'=>$_POST['short_description'],
		  	'content'=>$_POST['content'],
			'status'=>$_POST['status'],
			'modified_at'=>date("Y-m-d H:i:s"),
			);
		 if ($_FILES['avatar']['size'] != 0 )
		 {
			 $file = $_FILES['avatar'];
			 $i = $file['name'];
			 $pro['avatar'] = $i;
			 $u = new Upload();
			 $u->newsUpload($file);
		 }		
		$this->editRecord('news',$pro,$id);	
	}
	
}

?>