<?php
$name ="";
$email ="";
$message ="";
$nameError ="";
$emailError ="";
$messageError ="";
$successMessage ="";
if(isset($_POST['submit'])) {
if (empty($_POST["name"])){
$nameError = "Name is required";
}
else
 {
$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z ]*$/",$name))
{
$nameError = "Only letters and white space allowed";
}
}
if (empty($_POST["email"]))
{
$emailError = "Email is required";
}
else
 {
$email = test_input($_POST["email"]);
}
if (empty($_POST["message"]))
{
$messageError = "Message is required";
}
else
 {
$message = test_input($_POST["message"]);
if( !($name=='') && !($email=='') &&!($message=='') )
{
if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
{

}
$header= $name."<". $email .">";
$headers = "marcinkwolek.pl";
$msg = "Hello! $name Thank you...! For Contacting Me.
Name: $name
E-mail: $email
Message: $message
This is a Contact Confirmation mail. I Will contact You as soon as possible.";
$msg1 = " $name Contacted Us. Here is some information about $name.
Name: $name
E-mail: $email

Message: $message ";
if(mail($email, $headers, $msg ) && mail("marcinkwolek0@gmail.com", $header, $msg1 ))
{
$successMessage = "Message sent successfully.......";
}
}
else
{ $emailError = "Invalid Email";
 }
 }
}
?>
