<?php
$fname = "First Name";
$lname = "Last Name";
$income = "Annual Salary Income";


if(isset($_REQUEST['fname'])){
$fname = $_REQUEST['fname'];
}
if(isset($_REQUEST['lname'])){
$lname = $_REQUEST['lname'];
}
if(isset($_REQUEST['income'])){
$income = $_REQUEST['income'];
}

//$fname = $_REQUEST['fname'];
//$lname = $_REQUEST['lname'];
//$value = $_REQUEST['value'];

if ($income < 25000)
{
$taxRate = 0.025;
}
else if ($income < 45000)
{
$taxRate = 0.0355;
}
else if ($income < 65000)
{
$taxRate = 0.0425;
}
else if ($income < 90000)
{
$taxRate = 0.00515;
}
else if ($income < 140000)
{
$taxRate = 0.065;
}
else if ($value < 200000)
{
$taxRate = 0.7;
}
else if ($income < 1000000)
{
$taxRate = 0.1;
}
else
{
$taxRate = 0.125;
}
$taxOwed = $income * $taxRate;

print("<h1>Your Tax Statement</h1>");
print("<p>Full Name: " . $fname . " " . $lname);

print("<br/>Income: " . $income);
print("<br/>Tax Rate: " . $taxRate);

print("<br/>Tax Owed: " . $taxOwed);
?>
