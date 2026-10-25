<?php
if (session_status() === PHP_SESSION_NONE) { session_start(); }
$dataDir = __DIR__.'/data'; $uploadDir = __DIR__.'/uploads';
if (!is_dir($dataDir)) mkdir($dataDir,0750,true); if (!is_dir($uploadDir)) mkdir($uploadDir,0755,true);
function h($s){return htmlspecialchars((string)$s, ENT_QUOTES|ENT_SUBSTITUTE, 'UTF-8');}
function load_json($name,$default){global $dataDir;$f=$dataDir.'/'.$name;if(!is_file($f))return $default;$x=json_decode(file_get_contents($f),true);return is_array($x)?$x:$default;}
function save_json($name,$data){global $dataDir;$f=$dataDir.'/'.$name;$tmp=$f.'.tmp';file_put_contents($tmp,json_encode($data,JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES),LOCK_EX);rename($tmp,$f);}
function csrf_token(){if(empty($_SESSION['csrf']))$_SESSION['csrf']=bin2hex(random_bytes(24));return $_SESSION['csrf'];}
function check_csrf(){if(!hash_equals($_SESSION['csrf']??'',$_POST['csrf']??'')){http_response_code(403);exit('Security check failed. Please go back and try again.');}}
function current_user(){return $_SESSION['user']??null;}
function require_admin(){if(!current_user()){header('Location: admin.php');exit;}}
function redirect($to){header('Location: '.$to);exit;}
function upload_image(){global $uploadDir;if(empty($_FILES['image']['name']))return '';if($_FILES['image']['error']!==UPLOAD_ERR_OK)throw new RuntimeException('Image upload failed.');if($_FILES['image']['size']>5*1024*1024)throw new RuntimeException('Image must be 5 MB or smaller.');$info=getimagesize($_FILES['image']['tmp_name']);if(!$info)throw new RuntimeException('Please upload a valid image.');$ext=image_type_to_extension($info[2],false);if(!in_array($ext,['jpg','jpeg','png','webp','gif'],true))throw new RuntimeException('Only JPG, PNG, WEBP or GIF images are allowed.');$name=bin2hex(random_bytes(12)).'.'.$ext;if(!move_uploaded_file($_FILES['image']['tmp_name'],$uploadDir.'/'.$name))throw new RuntimeException('Could not save the uploaded image.');return 'uploads/'.$name;}
function flash($msg=null){if($msg!==null){$_SESSION['flash']=$msg;return;} $m=$_SESSION['flash']??'';unset($_SESSION['flash']);return $m;}
