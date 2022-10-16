<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Product example · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/product/">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<script src="../js/chatbox.js"></script>
<link rel="stylesheet" href="./css/chatbox.css">
    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">



    
    <!-- Custom styles for this template -->
    <link href="../css/product.css" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');*{padding: 0;margin: 0;font-family: 'Poppins', sans-serif}.container{height:100vh;display:flex;justify-content:center;align-items:center;background-color:#eee}.card{width:350px;height:470px;background-color:#fff;box-shadow:0px 15px 30px rgba(0,0,0,0.1);border-radius:10px;overflow:hidden}.card .info{padding:15px;display:flex;justify-content:space-between;border-bottom:1px solid #e1dede;background-color:#e5e5e5}.card .info button{height:30px;width:80px;border:none;color:#fff;border-radius:4px;background-color:#000;cursor:pointer;text-transform:uppercase}.card .forms{padding:15px}.card .inputs{display:flex;flex-direction:column;margin-bottom:10px}.card .inputs span{font-size:12px}.card .inputs input{height:40px;padding:0px 10px;font-size:17px;box-shadow:none;outline:none}.card .inputs input[type="text"][readonly]{border: 2px solid rgba(0,0,0,0)}
</style>
</head>
<body>
    
<div class="container"> 
    <div class="card"> 
        <div class="info"> 
            <span>Edit form</span> 
            <button id="savebutton">edit</button> </div> 
            <div class="forms"> <div class="inputs"> 
                <span>First Name</span> <input type="text" readonly value="John"> </div> 
                <div class="inputs"> <span>Last Name</span> 
                <input type="text" readonly value="Doe"> </div> 
                <div class="inputs"> <span>Email</span> <input type="text" readonly value="john.doe12@gmail.com"> </div> 
                <div class="inputs"> <span>UserName</span> <input type="text" readonly value="johndoe12"> </div> 
                <div class="inputs"> <span>Country</span> <input type="text" readonly value="United States"> </div> 
            </div> 
        </div>
</div>

<script>
var savebutton = document.getElementById('savebutton');
var readonly = true;
var inputs = document.querySelectorAll('input[type="text"]');
savebutton.addEventListener('click',function(){
    
     for (var i=0; i<inputs.length; i++) {
     inputs[i].toggleAttribute('readonly');
     };

    if (savebutton.innerHTML == "edit") {
      savebutton.innerHTML = "save";
         } else {
      savebutton.innerHTML = "edit";
      }



     
});
    </script>
</body>