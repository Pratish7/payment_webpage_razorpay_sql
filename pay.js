var imported = document.createElement('script');
imported.src = 'https://checkout.razorpay.com/v1/checkout.js';
document.head.appendChild(imported);

var jq = document.createElement('script'); 
jq.src = "http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"; 
document.head.appendChild(jq);

var smtp = document.createElement('script'); 
smtp.src = "https://smtpjs.com/v3/smtp.js"; 
document.head.appendChild(smtp);

var mail_id = document.createElement('script'); 
mail_id.src = "mail_id.js"; 
document.head.appendChild(mail_id);



razor_api_key = 'your_rzp_key';


function payment(){
var date = ((new Date().getDate()).toString()) + ((new Date().getMonth()+1).toString()) + ((new Date().getFullYear()).toString());
var orderid = "IMT" + date + (document.getElementById('ph').value).toString();
var options = {
    "key": razor_api_key,
    "amount": (document.getElementById("pr").value)*100,
    "currency": "INR",
    "name": "sample payment",
    "description": "sample payment",
    "image": "image.png",
    "handler": function (response){

            if (response.razorpay_payment_id) {
                jQuery.ajax({ 
                         url: 'insert.php',
                         cache: false,
                         type: "POST",
                         data: {
                                address: document.getElementById("ad").value,
                                amount_paid: (document.getElementById("pr").value),
                                date: date,
                                email: document.getElementById("em").value,
                                mobile: document.getElementById("ph").value,
                                name: document.getElementById("nm").value,
                                order_id: orderid,
                                product: "xyz",
                                qauntity: document.getElementById("qt").value,
                                transaction_id: response.razorpay_payment_id,
                        },
                         success: function() { 
                            Email.send({ 
                                Host: host, 
                                Username: mail, 
                                Password: pass, 
                                To: document.getElementById("em").value, 
                                From: mail, 
                                Subject: "Order confirmation", 
                                Body: "Your order has been successfully placed"+"<br>"+"Order ID: "+orderid+"<br>"+"Transaction ID: "+response.razorpay_payment_id+"<br>"+"Product: "+"xyz"+"<br>"+"Quantity: "+(document.getElementById("qt").value).toString()+"<br>"+ "Amount Paid: "+(document.getElementById('pr').value).toString(), 
                              });
                            window.alert("Your order is successfull, your order id is " + orderid + ". You will recieve an email with order details shortly.");
                                
                       }
                    });
            } 
    },
    "prefill": {
        "name": document.getElementById("nm").value,
        "email": document.getElementById("em").value,
        "contact": document.getElementById("ph").value
    }
};
var rzp = new Razorpay(options);



rzp.open();


}



