<?php
// Pull in the Database Configuration file
require 'dbconfig.php';
//  Capture Post Data that is sent from the form through the main.js file
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$whatYouDo = $_POST['whatYouDo'];
$ownABusiness = $_POST['ownABusiness'];
$organisation = $_POST['organisation'];
$websiteLink = $_POST['websiteLink'];
$linkedin = $_POST['linkedin'];
$twitter = $_POST['twitter'];
$instagram = $_POST['instagram'];
$facebook = $_POST['facebook'];
$howLongBusiness = $_POST['howLongBusiness'];
$challenges = $_POST['challenges'];
$businessGoals = $_POST['businessGoals'];
$businessHelp = $_POST['businessHelp'];
$personalGoals = $_POST['personalGoals'];
$gains = $_POST['gains'];
$awloHelp = $_POST['awloHelp'];

//  Connect to the Database using PDO
$dsn = "mysql:host=$host;dbname=$db";
//Create PDO Connection with the dbconfig data
$conn = new PDO($dsn, $username, $password);
// Check to see if the user is in the database already
$usercheck = "SELECT * FROM ngfl_needs WHERE email=?";
// prepare the Query
$usercheckquery = $conn->prepare($usercheck);
//Execute the Query
$usercheckquery->execute(array("$email"));
//Fetch the Result
$usercheckquery->rowCount();
if ($usercheckquery->rowCount() > 0) {
    echo "user_exists";
} else {
    // Insert the user into the database
    $enteruser = "INSERT into ngfl_needs (firstName, lastName, email, phone, whatYouDo, ownABusiness, organisation, websiteLink, linkedin, twitter, instagram, facebook, howLongBusiness, challenges, businessGoals, businessHelp, personalGoals, gains, awloHelp) VALUES (:firstName, :lastName, :email, :phone, :whatYouDo, :ownABusiness, :organisation, :websiteLink, :linkedin, :twitter, :instagram, :facebook, :howLongBusiness, :challenges, :businessGoals, :businessHelp, :personalGoals, :gains, :awloHelp)";
    //  Prepare Query
    $enteruserquery = $conn->prepare($enteruser);
    //  Execute the Query
    $enteruserquery->execute(
        array(
            "firstName" => $firstName,
            "lastName" => $lastName,
            "email" => $email,
            "phone" => $phone,
            "whatYouDo" => $whatYouDo,
            "ownABusiness" => $ownABusiness,
            "organisation" => $organisation,
            "websiteLink" => $websiteLink,
            "linkedin" => $linkedin,
            "twitter" => $twitter,
            "instagram" => $instagram,
            "facebook" => $facebook,
            "howLongBusiness" => $howLongBusiness,
            "challenges" => $challenges,
            "businessGoals" => $businessGoals,
            "businessHelp" => $businessHelp,
            "personalGoals" => $personalGoals,
            "gains" => $gains,
            "awloHelp" => $awloHelp
        )
    );
    //  Fetch Result
    $enteruserquery->rowCount();
    // Check to see if the query executed successfully
    if ($enteruserquery->rowCount() > 0) {
        echo "success";
    }
}
