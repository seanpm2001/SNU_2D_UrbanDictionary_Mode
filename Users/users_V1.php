<?php // users.php - Urban Dictionary mode for SNU
// This file recreates the users.php page of Urban Dictionary
// Background color: blue
// White box
// Upper title
$urbanDictionaryUsernameC = "" // The current logged in user
// Row 1
$HandleChangeTitle = "Click here to change your handle"
$HandleChangeURL = "https://"
$HandleChangeKey = ($HandleChangeTitle + $HandleChangeURL)
// Row 2
$ClaimDefinitionsTitle = "Claim"
$ClaimDefinitionsURL = "https://"
$ClaimDefinitionsKey = ($ClaimDefinitionTitle + $ClaimDefinitionsURL) 
// Row 3
$YourDefinitionsTitle = "definitions"
$YourDefinitionsURL = "https://"
$YourDefinitionsKey = ($YourDefinitionsTitle + $YourDefinitionsURL)
// Row 4
$SignOutTitle = "Sign out"
$SignOutURL = "https://"
$SignOutKey = ($SignOutTitle + $SignOutURL)
// Output time
echo ("HELLO " + $urbanDictionaryUsernameC) // Title
echo ($HandleChangeKey) // Row 1
echo ($ClaimDefinitionsKey + "definitions you wrote under a different email address") // Row 2
echo ("See all fo your " + $YourDefinitionsKey) // Row 3
echo ($SignoutKey) // Row 4
// Note: this is not yet valid PHP code ?>
