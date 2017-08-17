<DOCTYPE!HTML>
<html>
<head>
<title>This is UX/jquery and Bootstrap</title>
<script src='js/jquery.js'>
</script>


<script>
$(function()
{
	//alert('This is it');
});
//using jquery ajax 
//1 method load and 3 utility function $.Json(),$.post() and $.script(),take parameter url type
/*setInterval(function(){
	$('#content').load('ajaxLoadTemplate.html #loadedP');
},2000);
*/
$('#formBtn').click(function(){
	/*$.post(
	url:'printPostData.php',
	{
		name:'samuel mwangi',
		password:'myPassword'
	},
	function(data,status){
		alert('data '+data+' status '+status);
		
	}
	);	*/
	alert('post button clicked');
});
$("p").css('background-color','blue');
$(function(){
	$("#pc").fadeout();
});
function myFunction(){
	
	$('#append').append('My name is Samuel');
	//alert('Clicked');
}
$('.btn').click(function(){
	alert('Very impressive');
});
$('#form').attr('action','post.php');

</script>
</head>
<body>
<h1>This is UX(Bootstrap and Jquery)</h2>
<p id="pc">Toggle this paragraph,hide it by using button clicks This will fadeout</p>
<p class="append" >This is append paragraph</p>
<p class="hover" >This is hover paragraph</p>
<input id="btn2" type="button" value="Append Data"  onClick="alrtFunxn()"><br>

<p id="toggle">Toggle this paragraph,slide it up and down using the slideToggle jquery method</p>
<br>
<p id="fadeP">Toggle this paragraph,hide it by using button clicks This will fadeout</p>
<input id="toggleBtn" value="hideAndShow" type="button">
<!--<button id="show">Show and Hide btn Also Append</button><br>
<button id="btnPost">Post Username and Password</button>-->
<br>
<input id="postBtn" type="submit" value="saveFormData" >


<form id='form' method='post' >
Username: <input type="text" name="username" id='username'>
Email: <input type="text" name="email" id='email'>
Password: <input type="text" name="password" id='password'>
<input type="submit" value="Save Data" class="btn" >
</form>
<br>
<h3>Get Json Data</h3>

<p id="name"><label>Student Name: </label></p>
<p id="course"><label>Student Course: </label></p>
<p id="county"><label>Student County: </label></p>
<p id="id"><label>Student Id: </label></p>
<p id="level"><label>Student Level: </label></p>
<input type="button" value="getJson" id='getJsonBtn'>
<script>
function alrtFunxn (){
	alert("Hey Method call");
	
	$('p.append').append(' THIS IS APPPENDED DATA: ');
	$('p#pc').css('background-color','red');
}



///paragraph click event
$('p#pc').click(

function(){
	
	alert('This paragraph was clicked');
}
);

$('p.hover').hover( function(){

$(this).css('background-color','green');
});

//assigning element attributes dynamically
$(function(){
	
	$('#form').attr('action','printPostData.php');
	//alert('jQuey unlished');
});


$('#toggleBtn').click(function(){
	
	$('p#toggle').slideToggle();
	//alert('clicked');
	
});
$(function(){
	
	$('#fadeP').css('background-color','pink').fadeOut(2000).fadeIn(2000).fadeOut(2000).fadeIn(2000);
	
});

//assign css to headers
$(function(){
	$('h1,h2,h3').css('background-color','blue');
	$('h1,h2,h3').css('color','white');
});
//loading and sending data(load,get,post,script) ///$.ajax() can perform the last three when given datatype
$('#getJsonBtn').click(function(){
	//alert('Json data was loaded');
	$.ajax({
		type:'GET',
		url:'data.json',
		dataType:'json',
		success:function(data){
			//alert('Json data was loaded: '+data.level);
			$('#name').html(data.name);
			$('#course').html(data.course);
			$('#county').html(data.county);
			$('#id').html(data.id);
			$('#level').html(data.level);
		}
		
	});
	
});

$('#postBtn').click(function(){
	
	var data={
		username:$('#username').val(),
		email:$('#email').val(),
		password:$('#password').val()
		
	};
	
	
	//console.log(data);
	$.ajax({
		
		type:'POST',
		dataType:'json',
		url:'printPostData.php',
		data:'data',
		success:function(){
			alert('Data sent to the sever successfully');
		},
		error:function(){
			alert('An error occured when submiting data');
		},
		
	});
	
	//alert('post form data: '+data);
});

</script>

<h2>Load Data dynamically<h2>
<div id="content"></div>


</body>
<script>
</script>
</html>