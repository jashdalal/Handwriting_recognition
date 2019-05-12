<!DOCTYPE html>
<html>
<head>
  <title>Upload your files</title>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
<style>body {
  font-family: sans-serif;
  background-color: #eeeeee;
}

.file-upload {
  background-color: #ffffff;
  width: 600px;
  margin: 0 auto;
  padding: 20px;
}

.file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #1FB264;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.file-upload-btn:hover {
  background: #1AA059;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #1FB264;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #1FB264;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: #15824B;
  padding: 60px 0;
}

.file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 200px;
  align: left;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}



body {
  background: #303036;
  text-align: center;
  text-rendering: auto;
  font-size: 17px;
  line-height: 1.6em;
  height: 100vh;
  overflow: hidden;
  padding: 18%;
  padding-top: 25vh;
}
* {
  box-sizing: border-box;
}
.button {
  display: inline-block;
  font-family: "Montserrat", "Trebuchet MS", Helvetica, sans-serif;
  -webkit-font-smoothing: antialiased;
  position: relative;
  padding: 0.8em 1.4em;
  padding-right: 4.7em;
  background: #009ed8;
  border: none;
  color: white;
  transition: 0.2s;
}
.button:before,
.button:after {
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  padding-top: inherit;
  padding-bottom: inherit;
  width: 2.8em;
  content: "\00a0";
  font-family: "FontAwesome", sans-serif;
  font-size: 1.2em;
  text-align: center;
  transition: 0.2s;
  transform-origin: 50% 60%;
}
.button:before {
  background: rgba(0, 0, 0, 0.1);
}
.button:hover {
  background: #0079a5;
}
.button:active,
.button:focus {
  background: #002e3f;
  outline: none;
}
.button {
  min-width: 15em;
}
.arrow {
  background: #fe5f55;
}
.arrow:hover {
  background: #fe2f22;
}
.arrow:active,
.arrow:focus {
  background: #b90c01;
}
.arrow:after {
  content: "\F054";
}
.arrow:hover:after {
  -webkit-animation: bounceright 0.3s alternate ease infinite;
  animation: bounceright 0.3s alternate ease infinite;
}
.phone {
  background: #139675;
}
.phone:hover {
  background: #0d6952;
}
.phone:active,
.phone:focus {
  background: #083b2e;
}
.phone:after {
  content: "\F060";
}
.phone:hover:after {
  -webkit-animation: wiggle 0.05s alternate ease infinite;
  animation: wiggle 0.05s alternate ease infinite;
}
.email {
  background: #c673b3;
}
.email:hover {
  background: #b74f9f;
}
.email:active,
.email:focus {
  background: #963d82;
}
.email:after {
  content: "\F019";
}
.email:hover:after {
  -webkit-animation: none;
  -webkit-transform: skew(-20deg);
  animation: none;
  transform: skew(-20deg);
  text-indent: 0.1em;
}
.search:after {
  content: "\f002";
}
.search:hover:after {
  -webkit-animation: none;
  -webkit-transform: scale(1.4);
  animation: none;
  transform: scale(1.4);
}
@-webkit-keyframes bounceright {
  from {
    -webkit-transform: translateX(0);
  }
  to {
    -webkit-transform: translateX(3px);
  }
}
@-webkit-keyframes wiggle {
  from {
    -webkit-transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(30deg);
  }
}
@keyframes bounceright {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(3px);
  }
}
@keyframes wiggle {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(30deg);
  }
}
</style>
</head>
<body>
  <!--<form enctype="multipart/form-data" action="upload.php" method="POST">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form>-->
	<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<form enctype="multipart/form-data" action="down.php" method="POST">
<div class="file-upload">
  <i class="fas fa-heading"><h2>PPL Project on Handwritten to Text Converter</h2></i><br>
	<button class="button  email">Download Output</button><br/>
</div>
</form>
	<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<form enctype="multipart/form-data" action="a.php" method="POST">
<div class="file-upload">
  
	<button class="button  phone">Try Again!</button>


</div>
</form>
</body>
</html>
<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      //echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      //" has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>
