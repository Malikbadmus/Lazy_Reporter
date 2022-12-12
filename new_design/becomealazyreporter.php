<?php
$NameErr="";
$sigErr="";


if(isset($_POST['add'])) {

include("configuration.php");
include("registrar.php");



}



?>




<html>
<head>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Registration Page</title>

<link href="main.css" rel="stylesheet" type="text/css">

  <div class="content-section">
    <form method="POST">
      {% csrf_token %}
      
<fieldset class="form-group">
  <legend class="border-bottom mb-4">Join Today</legend>
  {{ form|crispy }}
  
</fieldset>
<div class="form-group">
  <button class="btn btn-outline-info" type="submit">Sign Up</button>
</div>
    </form>
    <div class="border-top pt-3">
      <small class="text-muted">
        Already Have An Account? <a  class="ml-2" href="{% url 'login' %}">Sign in</a>
      </small>
    </div>  
    
  </div>