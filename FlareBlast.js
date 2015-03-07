function SaveMsg( ){

//if (localStorage) {
//String Msg = document.getElementById("MsgText").tostring(); 
//localStorage.setItem('userNumber', document.getElementById("UserNumber") );
//localStorage.setItem('MsgText', Msg );
//localStorage.setItem('SendTo', document.getElementById("SendTo") );
//} else {
//  alert("No support. Use a fallback such as browser cookies or store on the server.");
//}

//var oMsg = localStorage.getItem('MsgText');
//console.log('typeof retrievedObject: ' + typeof oMsg);
//console.log('Value of retrievedObject: ' + oMsg);
//alert("Done");
//}

var to = '+447427412798';
var from = '+441934443026';
var msg = 'facebook!';
//String msg = document.getElementById("userNumber");
//alert(msg);

api.send(to, from, msg);

}

// api.send(to, from, msg);

// Example usage
// var to = '+447427412798';
// 	var from = '+441934443026';
// 	var msg = 'facebook!';

// 	api.send(to, from, msg);