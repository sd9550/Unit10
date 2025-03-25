<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Patient Form</title>
  </head>

  <body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-blue-900 text-white p-4">
      <div class="container mx-auto flex justify-between items-center">
        <h1 class="logo-text">
          Hospital Placeholder
        </h1>
      </div>
    </header>

    <section>
      <div class="container mx-auto p-4 mt-4">
        <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">New Patient Form</div> 
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="patient-form">
          <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
            Patient Information
          </h2>
          <div class="mb-4">
            <div class="row mb-3 text-center">
              <div class="col-sm-4 themed-grid-col">
                <input
                  type="text"
                  name="firstName"
                  placeholder="First Name"
                  class="px-4 py-2 border rounded focus:outline-none"
                required>
              </div>
              <div class="col-sm-4 themed-grid-col">
                <input
                type="text"
                name="middleName"
                placeholder="Middle Name"
                class="px-4 py-2 border rounded focus:outline-none"
              />
              </div>
              <div class="col-sm-4 themed-grid-col">
                <input
                type="text"
                name="lastName"
                placeholder="Last Name"
                class="px-4 py-2 border rounded focus:outline-none"
              required>
              </div>
            </div>       
          </div> 

          <div class="mb-4">

            <div class="row mb-3 text-center">
              <div class="col-md-4 themed-grid-col">
                <label for="dateOfBirth">DOB: </label>
                <input
                  type="date"
                  name="dateOfBirth"
                  placeholder="Date of Birth"
                  class="px-4 py-2 border rounded focus:outline-none"
                required> 
              </div>
              <div class="col-md-4 themed-grid-col">
                <label for="genderSelect">Gender:</label>
                <select id="cars" name="genderSelect" class="px-4 py-2 border rounded focus:outline-none">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select> 
              </div>
              <div class="col-md-4 themed-grid-col">
                <input
                type="text"
                name="socialSecurityNumber"
                placeholder="Social Security Number"
                class="px-4 py-2 border rounded focus:outline-none"
              required>
              </div>
            </div>

          </div>
          <div class="mb-4">

            <div class="row mb-3 text-center">
              <div class="col-md-4 themed-grid-col">
                <input
                type="text"
                name="address1"
                placeholder="Address Line 1"
                class="px-4 py-2 border rounded focus:outline-none"
              required>
              </div>
              <div class="col-md-4 themed-grid-col">
                <input
                type="text"
                name="address2"
                placeholder="Address Line 2"
                class="px-4 py-2 border rounded focus:outline-none"
              />
              </div>
              <div class="col-md-4 themed-grid-col">
                <input
                type="text"
                name="city"
                placeholder="City"
                class="px-4 py-2 border rounded focus:outline-none"
              required>
              </div>
            </div>

          </div>

          <div class="mb-4">

            <div class="row mb-3 text-center">
              <div class="col-md-4 themed-grid-col">
                <input
                type="text"
                name="state"
                placeholder="State"
                class="px-4 py-2 border rounded focus:outline-none"
              required>
              </div>
              <div class="col-md-4 themed-grid-col">
                <input
                type="text"
                name="country"
                placeholder="Country"
                class="px-4 py-2 border rounded focus:outline-none"
              required>
              </div>
              <div class="col-md-4 themed-grid-col">
                <input
                type="text"
                name="zipCode"
                placeholder="Zip Code"
                class="px-4 py-2 border rounded focus:outline-none"
              required>
              </div>
            </div>

          </div>

          <div class="mb-4">

            <div class="row mb-3 text-center">
              <div class="col-md-4 themed-grid-col">
                <input
                type="text"
                name="phoneNumber"
                placeholder="Phone Number"
                class="px-4 py-2 border rounded focus:outline-none"
              required>
              </div>
              <div class="col-md-4 themed-grid-col">
                <input
                type="email"
                name="email"
                placeholder="Email"
                class="px-4 py-2 border rounded focus:outline-none"
              required>
              </div>
            </div>

          </div>

          <div class="mb-4">

            <div class="row mb-3 text-center">
              <div class="col-md-4 themed-grid-col">
                <input
                type="text"
                name="height"
                placeholder="Height (inches)"
                class="px-4 py-2 border rounded focus:outline-none"
              required>
              </div>
              <div class="col-md-4 themed-grid-col">
                <input
                type="text"
                name="weight"
                placeholder="Weight (pounds)"
                class="px-4 py-2 border rounded focus:outline-none"
              required>
              </div>
            </div>

          </div>

          <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
            Emergency Contact
          </h2>
          <div class="mb-4">

              <div class="row mb-3 text-center">
                <div class="col-sm-4 themed-grid-col">
                  <input
                    type="text"
                    name="emerFirstName"
                    placeholder="First Name"
                    class="px-4 py-2 border rounded focus:outline-none"
                  required>
                </div>
                <div class="col-sm-4 themed-grid-col">
                  <input
                  type="text"
                  name="emerLastName"
                  placeholder="Last Name"
                  class="px-4 py-2 border rounded focus:outline-none"
                required>
                </div>
                <div class="col-sm-4 themed-grid-col">
                  <label for="relationSelect">Relation:</label>
                  <select id="relationSelect" name="relationSelect" class="px-4 py-2 border rounded focus:outline-none">
                    <option value="family">Family</option>
                    <option value="friend">Friend</option>
                    <option value="partner">Partner</option>
                    <option value="other">Other</option>
                  </select> 
                </div>
              </div>       

          </div>
          <div class="mb-4">

            <div class="row mb-3 text-center">
              <div class="col-md-4 themed-grid-col">
                <input
                type="text"
                name="emerPhoneNumber"
                placeholder="Phone Number"
                class="px-4 py-2 border rounded focus:outline-none"
              required>
              </div>
              <div class="col-md-4 themed-grid-col">
                <input
                type="email"
                name="emerEmail"
                placeholder="Email"
                class="px-4 py-2 border rounded focus:outline-none"
              required>
              </div>
            </div>

          </div>

          <?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $form_errors = array();

    if (empty($_POST["firstName"])) {
        array_push($form_errors,"First Name is Required");
    } else {
        $first_name = sanitize($_POST["firstName"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $first_name)) {
            array_push($form_errors,"First Name is Invalid");
        }
    }

    if (empty($_POST["lastName"])) {
        array_push($form_errors,"Last Name is Required");
    } else {
        $last_name = sanitize($_POST["firstName"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $first_name)) {
            array_push($form_errors,"Last Name is Invalid");
        }
    }

    if (empty($_POST["socialSecurityNumber"])) {
        array_push($form_errors,"Social Security Number is Required");
    } else {
        $ssn = sanitize($_POST["socialSecurityNumber"]);
        if (!is_numeric($ssn) || strlen($ssn) < 8) {
            array_push($form_errors,"SSN is Invalid");
        } 
    }

    if (empty($_POST["address1"])) {
        array_push($form_errors,"Address Line 1 is Required");
    } else {
        $address1 = sanitize($_POST["address1"]);
        if (!preg_match("/^[a-zA-Z0-9 ]*$/", $address1)) {
            array_push($form_errors,"Address Line 1 is Invalid");
        } 
    }

    if (empty($_POST["city"])) {
        array_push($form_errors,"City is Required");
    } else {
        $city = sanitize($_POST["city"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $city)) {
            array_push($form_errors,"City is Invalid");
        }
    }

    if (empty($_POST["state"])) {
        array_push($form_errors,"State is Required");
    } else {
        $state = sanitize($_POST["state"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $state)) {
            array_push($form_errors,"State is Invalid");
        }
    }

    if (empty($_POST["country"])) {
        array_push($form_errors,"Country is Required");
    } else {
        $country = sanitize($_POST["country"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $state)) {
            array_push($form_errors,"Country is Invalid");
        }
    }

    if (empty($_POST["zipCode"])) {
        array_push($form_errors,"Zip Code is Required");
    } else {
        $zip_code = sanitize($_POST["zipCode"]);
        if (!is_numeric($zip_code) || strlen($zip_code) != 5) {
            array_push($form_errors,"Zip Code is Invalid");
        } 
    }

    if (empty($_POST["phoneNumber"])) {
        array_push($form_errors,"Phone Number is Required");
    } else {
        $phone_number = sanitize($_POST["phoneNumber"]);
        if (!is_numeric($phone_number) || strlen($phone_number) != 10) {
            array_push($form_errors,"Phone Number is Invalid");
        } 
    }

    if (empty($_POST["email"])) {
        array_push($form_errors,"Email is required");
    } else {
        $email = sanitize($_POST["email"]);
        // Check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($form_errors,"Email is Invalid");
        }
    }

    if (empty($_POST["height"])) {
        array_push($form_errors,"Height is Required");
    } else {
        $height = sanitize($_POST["height"]);
        if (!is_numeric($height)) {
            array_push($form_errors,"Height is Invalid");
        } 
    }

    if (empty($_POST["weight"])) {
        array_push($form_errors,"Weight is Required");
    } else {
        $weight = sanitize($_POST["weight"]);
        if (!is_numeric($weight)) {
            array_push($form_errors,"Weight is Invalid");
        } 
    }

    if (empty($_POST["emerFirstName"])) {
        array_push($form_errors,"Emergency Contact First Name is Required");
    } else {
        $e_first_name = sanitize($_POST["emerFirstName"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $e_first_name)) {
            array_push($form_errors,"Emergency Contact First Name is Invalid");
        }
    }

    if (empty($_POST["emerLastName"])) {
        array_push($form_errors,"Emergency Contact Last Name is Required");
    } else {
        $e_last_name = sanitize($_POST["emerLastName"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $e_last_name)) {
            array_push($form_errors,"Emergency Contact Last Name is Invalid");
        }
    }

    if (empty($_POST["emerPhoneNumber"])) {
        array_push($form_errors,"Emergency Contact Phone Number is Required");
    } else {
        $e_phone_number = sanitize($_POST["emerPhoneNumber"]);
        if (!is_numeric($e_phone_number) || strlen($phone_number) != 10) {
            array_push($form_errors,"Emergency Contact Phone Number is Invalid");
        } 
    }

    if (empty($_POST["emerEmail"])) {
        array_push($form_errors,"Emergency Contact Email is required");
    } else {
        $e_email = sanitize($_POST["emerEmail"]);
        // Check if email is valid
        if (!filter_var($e_email, FILTER_VALIDATE_EMAIL)) {
            array_push($form_errors,"Emergency Contact Email is Invalid");
        }
    }

    if (!empty($form_errors)) {
        foreach ($form_errors as $error) {
            echo "<p class='error-text'>". $error ."</p>";
        }
    } else {
        echo "<p class='form-submit'>Submission Complete</p>"; 
    }
}

function sanitize($entry) {
    $entry = trim($entry);
    $entry = stripslashes($entry);
    $entry = htmlspecialchars($entry);
    return $entry;
}

?>

          <button class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none">
            Submit
          </button>
        </form>
      </section>

    </body>
</html>