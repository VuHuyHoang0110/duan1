<?php
session_start();
class admin extends Controller{
	 public function __construct(){
	 	if (isset($_SESSION['user'])){
			if($_SESSION['role']==0){
				header('Location:'.URL.'index.php/home/login');
			}
			else {
			parent::__construct();
			$this->p = new Paginator();
			// header('Location:'.URL.'index.php/admin/');
			}
		}
		else 
		{
			header('Location:'.URL.'index.php/home/login');
		}
	}
	function index(){
		$data=array();
		$data['page']="dashboard/page/home";
		$this->load->view("dashboard/index",$data);
		}
	function cateList($page){
		$cat = $this->model->getRecordByTrash('category',0) ;
		$n = count($cat);
		$config = array(
			'base_url'=>URL."index.php/admin/cateList/",
			'total_rows'=>$n,
			'per_page'=>5,
			'cur_page'=>$page
		);
		$this->p->init($config);
		$data =array();
		$data['allCat'] = $cat;
		$data['trash'] =  $this->model->getRecordByTrash('category',1) ;
		$data['category'] = $this->model->getData('category',$config['per_page'],$page) ;
		$data['paginator'] = $this->p->createLinks();
		$data['page'] = "dashboard/page/category/list";
		
		$this->load->view("dashboard/index",$data);
	}
	function addCate(){
		$data['category'] = $this->model->getRecordByTrash('category',0) ;
		$data['page'] ="dashboard/page/category/create" ;
		$this->load->view ("dashboard/index",$data);
	}
	function postaddcate()
	{
		$this->model->cateAdd();
		header('Location:../admin/cateList/1');
	}
	public function editOrder($id){
		$data =array();
		$data['edit'] = $this->model->getOneRecordByTrash('orders',0,$id) ;

		$data['page'] ="dashboard/page/orders/edit" ;
		$this->load->view ("dashboard/index",$data);
	}
	function posteditorder($id)
	{
		$this->model->orderEdit($id);
		header('Location:'.URL.'index.php/admin/orderList/1');
	}
	public function editCate($id){
		$data =array();
		$data['edit'] = $this->model->getOneRecordByTrash('category',0,$id) ;
		$data['category'] = $this->model->getRecordByTrash('category',0) ;
		$data['page'] ="dashboard/page/category/edit" ;
		$this->load->view ("dashboard/index",$data);
	}
	function posteditcate($id)
	{
		$this->model->cateEdit($id);
		header('Location:'.URL.'index.php/admin/cateList/1');
	}
	function delTempCate($id)
	{
		$this->model->delTempRecord('category',$id);
		header('Location:'.URL.'index.php/admin/cateList/1');
	}
	function retoreTempCate($id)
	{
		$this->model->retoreTempRecord('category',$id);
		header('Location:'.URL.'index.php/admin/trashCate/1');
	}
	
	function delTempNews($id)
	{
		$this->model->delTempRecord('news',$id);
		header('Location:'.URL.'index.php/admin/newsList/1');
	}
	function retoreTempNews($id)
	{
		$this->model->retoreTempRecord('news',$id);
		header('Location:'.URL.'index.php/admin/trashNews/1');
	}
	function delTempProduct($id)
	{
		$this->model->delTempRecord('products',$id);
		header('Location:'.URL.'index.php/admin/productList/1');
	}
	function retoreTempProduct($id)
	{
		$this->model->retoreTempRecord('products',$id);
		header('Location:'.URL.'index.php/admin/trashProduct/1');
	}
	function delStatusCate($id)
	{
		$this->model->statusF('category',$id);
		header('Location:'.URL.'index.php/admin/cateList/1');
	}
	function deleteUsers($id)
	{
		$this->model->deleteTempRecord('users',$id);
		header('Location:'.URL.'index.php/admin/usersList/1');
	}
	function deleteNews($id)
	{
		$this->model->deleteTempRecord('news',$id);
		header('Location:'.URL.'index.php/admin/newsList/1');
	}
	function deleteProduct($id)
	{
		$this->model->deleteTempRecord('products',$id);
		header('Location:'.URL.'index.php/admin/productList/1');
	}
	function deleteCate($id)
	{
		$this->model->deleteTempRecord('category',$id);
		header('Location:'.URL.'index.php/admin/categoryList/1');
	}
	function retoreStatusCate($id)
	{
		$this->model->statusT('category',$id);
		header('Location:'.URL.'index.php/admin/cateList/1');
	}
	function delStatusUsers($id)
	{
		$this->model->statusF('users',$id);
		header('Location:'.URL.'index.php/admin/usersList/1');
	}
	function retoreStatusUsers($id)
	{
		$this->model->statusT('users',$id);
		header('Location:'.URL.'index.php/admin/usersList/1');
	}
	function delStatusProduct($id)
	{
		$this->model->statusF('products',$id);
		header('Location:'.URL.'index.php/admin/productList/1');
	}
	function retoreStatusProduct($id)
	{
		$this->model->statusT('products',$id);
		header('Location:'.URL.'index.php/admin/productList/1');
	}
	function delStatusNews($id)
	{
		$this->model->statusF('news',$id);
		header('Location:'.URL.'index.php/admin/newsList/1');
	}
	function retoreStatusNews($id)
	{
		$this->model->statusT('news',$id);
		header('Location:'.URL.'index.php/admin/newsList/1');
	}
	function trashCate($page)
	{
		$cat = $this->model->getRecordByTrash('category',1) ;
		$n = count($cat);
		$config = array(
			'base_url'=>URL."index.php/admin/trashCate/",
			'total_rows'=>$n,
			'per_page'=>5,
			'cur_page'=>$page
		);
		$this->p->init($config);
		$data =array();
		$data['allCat'] = $this->model->getRecordByTrash('category',1);
		// $data['trash'] =  $this->model->getRecordByTrash('category',1) ;
		$data['trash'] = $this->model->getTrash('category',$config['per_page'],$page) ;
		$data['paginator'] = $this->p->createLinks();
		$data['page'] = "dashboard/page/category/trash";
		
		$this->load->view("dashboard/index",$data);
	}
	function trashNews($page)
	{
		$cat = $this->model->getRecordByTrash('news',1) ;
		$n = count($cat);
		$config = array(
			'base_url'=>URL."index.php/admin/trashNews/",
			'total_rows'=>$n,
			'per_page'=>5,
			'cur_page'=>$page
		);
		$this->p->init($config);
		$data =array();
		$data['trash'] = $this->model->getRecordByTrash('news',1) ;

		$data['news'] = $this->model->getTrash('news',$config['per_page'],$page) ;
		$data['paginator'] = $this->p->createLinks();
		$data['page'] = "dashboard/page/news/trash";
		$this->load->view("dashboard/index",$data);
	}
	function trashProduct($page)
	{
		$cat = $this->model->getRecordByTrash('products',1) ;
		$n = count($cat);
		$config = array(
			'base_url'=>URL."index.php/admin/trashCate/",
			'total_rows'=>$n,
			'per_page'=>5,
			'cur_page'=>$page
		);
		$this->p->init($config);
		$data =array();
		$data['allCate'] = $this->model->getRecordByTrash('category',0);
		$data['allBrand'] = $this->model->getRecordByTrash('brands',0);
		$data['trash'] = $this->model->getTrash('products',$config['per_page'],$page) ;
		$data['paginator'] = $this->p->createLinks();
		$data['page'] = "dashboard/page/product/trash";
		
		$this->load->view("dashboard/index",$data);
	}

	function newsList($page){
		$cat = $this->model->getRecordByTrash('news',0) ;
		$n = count($cat);
		$config = array(
			'base_url'=>URL."index.php/admin/newsList/",
			'total_rows'=>$n,
			'per_page'=>2,
			'cur_page'=>$page
		);
		$this->p->init($config);
		$data =array();
		// $data['allCat'] = $cat;
		$data['trash'] = $this->model->getRecordByTrash('news',1) ;
		$data['news'] = $this->model->getData('news',$config['per_page'],$page) ;
		$data['paginator'] = $this->p->createLinks();
		$data['page'] = "dashboard/page/news/list";
		$this->load->view("dashboard/index",$data);
	}
	function usersList($page){
		$cat = $this->model->getRecordByTrash('users',0);
		$n = count($cat);
		$config = array(
			'base_url'=>URL."index.php/admin/usersList/",
			'total_rows'=>$n,
			'per_page'=>2,
			'cur_page'=>$page
		);
		$this->p->init($config);
		$data =array();
		$data['user'] = $this->model->getData('users',$config['per_page'],$page) ;
		$data['paginator'] = $this->p->createLinks();
		$data['page'] = "dashboard/page/users/list";
		$this->load->view("dashboard/index",$data);
	}
	function productList($page){
		$cat = $this->model->getRecordByTrash('products',0) ;
		$n = count($cat);
		$config = array(
			'base_url'=>URL."index.php/admin/productList/",
			'total_rows'=>$n,
			'per_page'=>5,
			'cur_page'=>$page
		);
		$this->p->init($config);
		$data =array();
		$data['allCate'] = $this->model->getRecordByTrash('category',0) ;
		$data['allBrand'] = $this->model->getRecordByTrash('brands',0) ;
		$data['trash'] =  $this->model->getRecordByTrash('products',1) ;
		$data['product'] = $this->model->getData('products',$config['per_page'],$page) ;
		$data['paginator'] = $this->p->createLinks();
		$data['page'] = "dashboard/page/product/list";
		
		$this->load->view("dashboard/index",$data);
	}
	function addProduct()
	{	
		$data['category'] = $this->model->getRecordByTrash('category',0) ;
		$data['brand'] = $this->model->getRecordByTrash('brands',0) ;
		$data['page'] ="dashboard/page/product/create";
		$this->load->view ("dashboard/index",$data);
	}
	
	function addNews()
	{	
		$data['page'] ="dashboard/page/news/create";
		$this->load->view("dashboard/index",$data);
	}

	public function postaddproduct()
	{
		$this->model->productAdd();
		header('Location:../admin/productList/1');
	}
	public function postaddnews()
	{
		$this->model->newsAdd();
		header('Location:../admin/newsList/1');
	}
	public function editProduct($id)
	{
		$data =array();
		$data['edit'] = $this->model->getOneRecordByTrash('products',0,$id) ;
		$data['category'] = $this->model->getRecordByTrash('category',0) ;
		$data['brand'] = $this->model->getRecordByTrash('brands',0) ;
		$data['page'] ="dashboard/page/product/edit" ;
		$this->load->view ("dashboard/index",$data);
	}
	public function editNews($id)
	{
		$data =array();
		$data['edit'] = $this->model->getOneRecordByTrash('news',0,$id);
		$data['page'] ="dashboard/page/news/edit" ;
		$this->load->view("dashboard/index",$data);
	}
	public function posteditproduct($id)	
	{	
		$this->model->productEdit($id);
		header('Location:../editProduct/'.$id);
	}
	public function posteditnews($id)	
	{	
		$this->model->newsEdit($id);
		header('Location:../newsList/1');
	}
	function orderList($page){
		$cat = $this->model->getRecordByTrash('orders',0) ;
		$n = count($cat);
		$config = array(
			'base_url'=>URL."index.php/admin/orderList/",
			'total_rows'=>$n,
			'per_page'=>5,
			'cur_page'=>$page
		);
		$this->p->init($config);
		$data =array();
		$data['allOrder'] = $cat;
		$data['trash'] =  $this->model->getRecordByTrash('orders',1) ;
		$data['order'] = $this->model->getData('orders',$config['per_page'],$page) ;
		$data['paginator'] = $this->p->createLinks();
		$data['page'] = "dashboard/page/orders/list";
		$_SESSION['pages']=$page;
		$this->load->view("dashboard/index",$data);
	}
	function orderDetails($id)
	{
		// $data =array();
		$data['product'] = $this->model->getRecordByTrash('products',0);
		$data['order_details'] = $this->model->getOrderDetails('order_details',$id) ;
		$data['page'] = "dashboard/page/orders/order_details";
		$this->load->view("dashboard/index",$data);
	}
}	
?>