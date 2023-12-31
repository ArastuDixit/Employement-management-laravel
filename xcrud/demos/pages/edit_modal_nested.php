<?php  
	$xcrud = Xcrud::get_instance();
    $xcrud->table('orders');
    $xcrud->default_tab('Order info');
	$xcrud->columns('orderDate,requiredDate,status,comments,customerNumber');
	
	$xcrud->fields_arrange('orderDate,requiredDate,shippedDate','Dates',true); 
	$xcrud->fields_arrange('status,customerNumber','Customer',true); 
	$xcrud->fields_arrange('comments','Other Info',true); 
	   
    $orderdetails = $xcrud->nested_table('Order details','orderNumber','orderdetails','orderNumber'); // 2nd level
    $orderdetails->columns('productCode,quantityOrdered,priceEach');
	$orderdetails->fields_arrange('productCode','Product',true);
	$orderdetails->fields_arrange('quantityOrdered,priceEach','Quantity',true);
	
    $orderdetails->fields('productCode,quantityOrdered,priceEach');
    $orderdetails->default_tab('Detail information');
    
    $customers = $xcrud->nested_table('Customers','customerNumber','customers','customerNumber'); // 2nd level 2
    $customers->columns('customerName,city,country');
    
    $products = $orderdetails->nested_table('Products','productCode','products','productCode'); // 3rd level
    $products->default_tab('Product details');
	$products->is_edit_modal(true);   
    $productLines = $products->nested_table('Product Lines','productLine','productlines','productLine'); // 4th level    
    $xcrud->is_edit_modal(true);	
    echo $xcrud->render();
?>