<?php 

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = test_input($_POST['name']);
    $company = test_input($_POST['company']);
    $phone = test_input($_POST['phone']);
    $email = test_input($_POST['email']);
    $request_msg = test_input($_POST['request']);

    $errors_msg = ["name_error"=>'', "company_error"=>"", "phone_error" => "", "email_error" => ""];
    
    if(!empty($name)){
        if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            $errors_msg["name_error"] = "Only letters and white space allowed";   
        }
    }else{
        $errors_msg["name_error"] = "Name is Empty";
    }

    if(!empty($company)){
        if(!preg_match("/^[a-zA-Z-' ]*$/",$company)){
            $errors_msg["company_error"] = "Only letters and white space allowed";   
        }
    }

    if(!empty($email)){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors_msg["email_error"] = "Invalid email format";   
        }
    }else{
        $errors_msg["email_error"] = "email is Empty";
    }


    $header = "From: myanmarwebcreator@gmail.com\r\n";
    $header.= "MIME-Version: 1.0\r\n";
    $header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $header.= "X-Priority: 1\r\n";
    
    $msg = "

    <table style='border-collapse: collapse;'>
    <tr>
        <td style='border: 1px solid #ddd;padding:8px;'><strong>Name</strong></td>
        <td style='border: 1px solid #ddd;padding:8px;'>$name</td>
    </tr>
    <tr>
        <td style='border: 1px solid #ddd;padding:8px;'><strong>Company</strong></td>
        <td style='border: 1px solid #ddd;padding:8px;'>$company</td>
    </tr>
    <tr>
        <td style='border: 1px solid #ddd;padding:8px;'><strong>Phone</strong></td>
        <td style='border: 1px solid #ddd;padding:8px;'>$phone</td>
    </tr>
    <tr>
        <td style='border: 1px solid #ddd;padding:8px;'><strong>Email</strong></td>
        <td style='border: 1px solid #ddd;padding:8px;'>$email</td>
    </tr>
    <tr>
        <td style='border: 1px solid #ddd;padding:8px;'><strong>Request</strong></td>
        <td style='border: 1px solid #ddd;padding:8px;'>$request_msg</td>
    </tr>
</table> ";


if(empty($errors_msg["name_error"]) &&  empty($errors_msg["company_error"]) && empty($errors_msg["phone_error"]) &&  empty($errors_msg["name_error"]) &&
empty($errors_msg["email_error"])){
    mail("mailbox.waiyanminaung@gmail.com","Test Email",$msg, $header);
    header('Location: index.php');
    exit();
}else{
    print_r($errors_msg);
}


?>