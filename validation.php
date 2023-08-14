<!DOCTYPE html>
<html>
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>
        <?php
        // Define variables and set to empty
        $nameErr = $emailErr = $mobileNumErr = "";
        $name = $email = $message = $mobileNum = $cleanedNumber = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Name validation   
            if (empty($_POST["name"])) {
                $nameErr = "Please enter a valid name";
            } else {
                $name = test_input($_POST["name"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                    $nameErr = "Only letters and white spaces allowed";
                }
            } 

            // Email validation
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "The email address is incorrect";
                }
            }
            
            // Message validation
            if (empty($_POST["message"])) {
                $message = "";
            } else {
                $message = test_input($_POST["message"]);
            }

            // Mobile number validation
    if (empty($_POST["mobile_number"])) {
        $mobileNumErr = "Mobile number is required";
    } else {
        $mobileNum = test_input($_POST["mobile_number"]);
        if (validateMobileNumber($mobileNum)) {
            echo "Mobile number is valid.";
        } else {
            $mobileNumErr = "Invalid mobile number.";
        }
    }
}

        function test_input ($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        // Function to validate a mobile number
        function validateMobileNumber($mobileNum) {
            // Remove all non-numeric characters from the input
            $cleanedNumber = preg_replace('/[^0-9]/', '', $mobileNum);
            
            // Check if the cleaned number is 10 digits long
            if (strlen($cleanedNumber) === 10) {
                return true;
            } else {
                return false;
            }
        }
        ?>
    </body>
</html>
