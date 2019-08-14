<?php 
class Imedia_ProductInquiry_FormController extends Mage_Core_Controller_Front_Action
{
    public function submitAction()
    {
      $post = $this->getRequest()->getPost();
	  $currentUrl = $post['current_url'];
	  $productId = $post['product_id'];
	  $productName = $post['product_name'];
	  $productSku = $post['product_sku'];
	  $userName = $post['user_name'];
	  $userEmail = $post['user_email'];
	  $userQuestion = $post['user_question'];
	  $postData = array('product_id'=>$productId, 'product_name'=>$productName, 'product_sku'=>$productSku, 'user_name'=> $userName, 'user_email'=> $userEmail, 'user_question'=> htmlspecialchars ($userQuestion),'is_active'=>'No');
	  
	  $inquiryModel = Mage::getModel('imedia_productinquiry/inquiry');
	  $inquiryModel->setData($postData);
	  $inquiryModel->save();		
	  
    }
	
}