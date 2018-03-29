<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paynow extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		
		if(session_id()=="")
		{
			ob_start();
			@session_start();
		}
		
	}
	
	public function index()
	{
		$merchant_data='165936';
		$working_key='C06F2D1B928F82592EA2C39D922FFD84';//Shared by CCAVENUES
		$access_code='AVTZ76FB13AS65ZTSA';//Shared by CCAVENUES
		
		//print_r($_POST);
		//exit;
		
		foreach ($_POST as $key => $value){
			$merchant_data.=$key.'='.$value.'&';
		}

		$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

	?>
	<form method="post" name="redirect" action="https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
	<?php
	echo "<input type=hidden name=encRequest value=$encrypted_data>";
	echo "<input type=hidden name=access_code value=$access_code>";
	?>
	</form>
	</center>
	<script language='javascript'>document.redirect.submit();</script>
	</body>
	</html>
	<?php
	}
	
	public function response_handler()
	{
	
		
	
	$workingKey='C06F2D1B928F82592EA2C39D922FFD84';		//Working Key should be provided here.

	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		//print_r($information);
		if($i==3)	$order_status=$information[1];
		if($i==0)   $order_id=$information[1];
		if($i==1)   $tracking_id=$information[1];
		if($i==2)   $bank_ref_no=$information[1];
		if($i==3)   $tracsation_status=$information[1];
		if($i==5)   $payment_mode=$information[1];
		if($i==9)   $currency=$information[1];
		if($i==10)   $amount=$information[1];
		if($i==11)   $billing_name=$information[1];
		if($i==12)   $billing_add=$information[1];
		if($i==17)   $billing_contact=$information[1];
		if($i==18)   $billing_email=$information[1];
		// if($i==19)   $shiping_name=$information[1];
		// if($i==20)   $shiping_add=$information[1];
		// if($i==25)   $shiping_contact=$information[1];
		echo"<pre>";
		print_r($information);
	}
			$_SESSION['session_id']=session_id();
			$sessionid=$_SESSION['session_id'];
			// payment table insert code
			$stuid=$this->session->userdata('register_add');
			$packageid=$this->session->userdata('package_id');
			$pay['pay_stuid']=$stuid;
			$pay['pay_packageid']=$packageid;
			$pay['pay_orderid']=$order_id;
			$pay['pay_sessionid']=$sessionid;
			$pay['pay_orderstatus']=$order_status;
			$pay['pay_amount']=$amount;
			$pay['pay_billname']=$billing_name;
			$pay['pay_billadd']=$billing_add;
			$pay['pay_billtel']=$billing_contact;
			$pay['pay_billemail']=$billing_email;

			$this->account_model_client->do_insert('payment',$pay);
			// payment table insert code
			$curr_datetime=date("Y-m-d");

		// 	$final_cart_data=$this->myclass->select("cart_id,cart_proid,prod_name,prod_price,prod_discount,qty","db_product,db_cart","cart_sessionid='$sessionid' AND cart_proid=id"); 
			
		// 	$this->load->model("product_model");
		// 	$this->load->model("register_model");
		// 	$this->load->model("welcome_model");
		// 	$this->load->model("category_model");
		// 	$all_category = $this->category_model->getAllParentCategory();
		// 	if(count($all_category) > 0){
		// 	foreach($all_category as $key => $cat){
		// 		//get related subcategory
		// 		$subcat = $this->category_model->getsubCategoryById($cat['id']);
		// 		$all_category[$key]['subcat'] = $subcat;
		// 		//get product id if subcat is present else add category id
		// 		if(count($subcat) > 0){
		// 			foreach($subcat as $subkey => $sub){
		// 				$product = $this->product_model->getSubcatWiseProduct($cat['id'],$sub['id']);
		// 				//$prod_ids = array_column($product[0], "id");
		// 				if(count($product) > 0){
		// 					$all_category[$key]['subcat'][$subkey]['prod_id'] = $product[0]['id'];
		// 				}
						
		// 			}
		// 		} else {
		// 			//find product where no subcat is present
		// 			$product = $this->product_model->getSubcatWiseProduct($cat['id']);
		// 			if(count($product) > 0){
		// 				$all_category[$key]['prod_id'] = $product[0]['id'];
		// 			}
		// 		}
		// 	}
		// }
			//$product_count = $this->product_model->get_cartdata($sessionid);
		
		// if(count($product_count) > 0){
		// 	foreach($product_count as $key => $data){
		// 		$main_discount = $data['prod_discount']*$data['qty'];
		// 		$product_count[$key]['main_discount'] = $main_discount;
		// 	}	
		// }
		//$data['p_count'] = count($product_count);
		// $fname = $this->session->userdata('re_fname');
		// $data['fname'] = $fname;
		// $data['category'] = $all_category;
		// $id = $this->session->userdata("id");
		// $user_detail = $this->register_model->get_allaccount($id);
		// $data['user_detail'] = $user_detail;
		// $data['cart']=$product_count;
		// $data['sessionid']=$sessionid;

		$this->load->view('mainheader');
	if($order_status==="Success")
	{
			
	//require_once("main_header.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1">
<title>IMUCET GUIDE</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/publics/css/style.css" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/publics/css/media_queries.css" />
<script>
jQuery(document).ready(function(){
			jQuery('.print a').click(function(){
			var divToPrint = document.getElementById('divToPrint');
			var popupWin = window.open('', '_blank', 'width=300,height=300');
			popupWin.document.open();
			popupWin.document.write('<html><link href="<?php echo base_url();?>/publics/css/style.css" rel="stylesheet" type="text/css" /><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
			popupWin.document.close();
	});
});

</script>
</head>

<body>

    
    <div class="pagewrapper">
    	

    	<div class="contentwrap" id='with_print'>
			<div class="contentwrap_inner" style="border:none !important" id='divToPrint'>
				<div class="thanks_content">
					<h4 class="block">Thankyou for choosing your plan. Your transaction was successfull, you can now move to your dashboard.</h4>
                    <span>Date: <?php echo $curr_datetime;?></span><br>
                    <span>Order  ID: <?php echo $order_id;?></span><br>
                    
                    <span>Bank Ref No:<?php echo $bank_ref_no;?></span><br>
                    <span>Payment: <?php echo $payment_mode?></span><br>
                    <span>Currency: <?php echo $currency;?></span><br>
                    <span>Amount:<?php echo $amount;?> </span><br>
                    <span>Transaction Status: <?php echo $tracsation_status;?></span><br>					
				</div>
				<div class="print"><a>Print</a></div>    
                <!--<div class="bill_ship_wrap">
                	<div class="billing">
                    	<h1>Billing Details</h1>
                        <span>Name:<?php echo $billing_name;?></span><br>
                        <span>Address:<?php echo $billing_add;?></span><br>
                        <span>Phone No:<?php echo $billing_contact;?></span> <br>
                                                           
                    </div>
                    <div class="shipping">
                    	<h1>Shipping Details</h1>
                        <span>Name:<?php echo $shiping_name;?></span><br>
                        <span>Address:<?php echo $shiping_add;?></span><br>
                    	<span>Phone No:<?php echo $shiping_contact;?></span><br>
                        
                    </div>-->
                </div>
            </div>
		</div>

        
    </div>
    

</body>
</html>

<?php


	
				$to = "sales@ladooji.com";
				$subject = "New plan purchased - Order No.#".$order_id;
				$from = "administration@ladooji.com";
				$message = '
				<html>
				<head>
				<title>IMUCET GUIDE</title>
				</head>
				<body>
					
					You have received a new order. <br/>
					<p>Date: '.$curr_datetime.'</p>
					<p>Name:'.$billing_name.'</p>
					<p>Billing Email: '.$billing_email.'</p>
					<p>Billing Contact:'.$billing_contact.'</p>
					<p>Billing Address:'.$billing_add.'</p>
					
                    <p>Order No: '.$order_id.'</p>
                    
                    <p>Bank Ref No:'.$bank_ref_no.'</p>
                    <p>Payment: '.$payment_mode.'</p>
                    <p>Currency: '.$currency.'</p>
                    <p>Amount:'.$amount.'</p>
                    <p>Transaction Status: '.$tracsation_status.'</p>	
					<table cellpadding="3" cellspacing="0" border="1">
        <thead>
        <tr>
            
           
            <td>Product Name</td>
			 <td>Qty</td>
		</tr>';
				if($final_cart_data=='no')
				{
					
				}
				else
				{
					foreach($final_cart_data as $cart_final)
							{
								//print_r($cart_final);
								$message.='<tr>'.
						'<td>'.$cart_final['prod_name'].'</td>
						<td>'.$cart_final['qty'].'</td>';
					'</tr>';
							}
				}	
				$message.='</thead></table><br/><br/>			
					Thank You<br/>
					Team IMUCET GUIDE
					
				</body>
				</html>';
				
				// Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

				// More headers
				$headers .= "From:IMUCET GUIDE <sales@ladooji.com>" . "\r\n";
				
				if(mail($to,$subject,$message,$headers))
				{
					//echo 1;
					
				} 
				else
				{
					//echo "Your Enquiry is not send";
				}
				
				
				
				
				//Mail For User
				
				$to1 = $billing_email;
				$subject1 = "Your order no. #$order_id has been confirm from IMUCET GUIDE";
				$from1 = "sales@ladooji.com";
				$message1 = '
				<html>
				<head>
				<title>IMUCET GUIDE</title>
				</head>
				<body>
					Dear Mr.'.$billing_name.'<br/>
					
					Thankyou for choosing your plan. Your transaction was successfull, you can now move to your dashboard.<br/>
					
					<p>Date: '.$curr_datetime.'</p>
					<p>Name:'.$billing_name.'</p>
                    <p>Order No: '.$order_id.'</p>
                    
                    <p>Bank Ref No:'.$bank_ref_no.'</p>
                    <p>Payment: '.$payment_mode.'</p>
                    <p>Currency: '.$currency.'</p>
                    <p>Amount:'.$amount.'</p>
                    <p>Transaction Status: '.$tracsation_status.'</p>	
					
					<table cellpadding="3" cellspacing="0" border="1">
        <thead>
        <tr>
            
           
            <td>Product Name</td>
			 <td>Qty</td>
		</tr>';
				if($final_cart_data=='no')
				{
					
				}
				else
				{
					foreach($final_cart_data as $cart_final)
							{
								//print_r($cart_final);
								$message1.='<tr>'.
						'<td>'.$cart_final['prod_name'].'</td>
						<td>'.$cart_final['qty'].'</td>';
					'</tr>';
							}
				}	
				$message1.='</thead></table><br/><br/>			
					Thank You<br/>
					Team IMUCET GUIDE
					
				</body>
				</html>';
				
				// Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

				// More headers
				$headers .= "From:IMUCET GUIDE <sales@ladooji.com>" . "\r\n";
				
				if(mail($to1,$subject1,$message1,$headers))
				{
					//echo 1;
					
				} 
				else
				{
					//echo "Your Enquiry is not send";
				}
				
				
				
				if($final_cart_data=='no')
				{
					
				}
				else
				{
					
					
				}	
				$uid = $this->session->userdata("id");
					$this->load->model('user_model');
					$record = array('final_cart_status' => 1,
					'final_cart_oid' =>$order_id,
					'final_uid' => $id,'final_amt'=>$amount);
					$this->user_model->do_register('db_final_cart',$record);
				session_id();
				session_regenerate_id();
				$_SESSION['session_id']=session_id();
				$sessionid=$_SESSION['session_id'];
				$this->session->regenerate_id();
				$this->session->unset_userdata("session_id");
				$this->session->unset_userdata("id");
				
				
	}
	else if($order_status==="Aborted")
	{
		echo "<br>Thank you for purchasing our plan.";
	
	}
	else if($order_status==="Failure")
	{
		echo "<br>Thank you for purchasing our plan.However,the transaction has been declined.";
	}
	else
	{
		echo "<br>Security Error. Illegal access detected";
	
	}

	echo "<br><br>";

	echo "<table cellspacing=4 cellpadding=4>";
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	    	'<tr><td>'.$information[0].'</td><td>'.$information[1].'</td></tr>';
	}

	echo "</table><br>";
	echo "</center>";
	$this->load->view('mainfooter');

	}
}
?>