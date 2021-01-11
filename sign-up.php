<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <title>Adalan Company - Sign Up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>


<body>

    <?php
    include_once("connect.php");
    $sql_display_nationalities = "SELECT * FROM nationalities ";

    ?>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-190 p-b-30">
                <div class="row">
                    <form class="login100-form  -form" no autocomplete="off" method="POST" action="signup.php">
                        <div class="column">
                            <div class="wrap-input100  -input m-b-10">
                                <input class="input100" type="text" name="firstname" placeholder="First Name">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>


                            <div class="wrap-input100  -input m-b-10">
                                <input class="input100" type="text" name="lastname" placeholder="Last Name">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>


                            <div class="wrap-input100  -input m-b-10">
                                <input class="input100" type="text" name="phone" placeholder="phone">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-phone"></i>
                                </span>
                            </div>

                            <div class="wrap-input100  -input m-b-10">
                                <input class="input100" type="email" name="email" placeholder="Email">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-email"></i>
                                </span>
                            </div>

                            <div class="wrap-input100  -input m-b-10">
                                <select name="nationality_id" id="nationality" class="input100" required>
                                    <option value="#" disabled selected>Nationality</option>
                                    <?php
                                    $query_display_nationalities = $conn->query($sql_display_nationalities);
                                    if ($query_display_nationalities->num_rows > 0) {
                                        while ($row_cat = $query_display_nationalities->fetch_assoc()) {
                                    ?> <option value="<?php echo $row_cat['id']; ?>"><?php echo $row_cat['nationality']; ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-email"></i>
                                </span>
                            </div>

                        </div>

                        <div class="column">

                            <div class="wrap-input100  -input m-b-10">
                                <input class="input100" type="date" name="date" placeholder="Date of Birth">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-date"></i>
                                </span>
                            </div>

                            <div class="wrap-input100  -input m-b-10">
                                <input class="input100" type="username" name="username" placeholder="Username">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>


                            <div class="wrap-input100  -input m-b-10">
                                <input class="input100" type="password" id="password" name="password" placeholder="Password">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>


                            <div class="wrap-input100  -input m-b-10">
                                <input class="input100" type="password" id="confpassword" name="confpassword" placeholder="Confirm Password">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                            <div class="container-login100-form-btn p-t-10">
                                <button class="login100-form-btn" id="submit">
                                    Signup
                                </button>
                            </div>

                        </div>



                        <div class="text-center w-full" style="color: #cccccc;">
                            Already Have an Account?
                            <a class="txt1" href="sign-in">
                                Login
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script>
        $(document).ready(() => {
            $("#confpassword").keyup(() => {
                const password = $("#password").val()
                if ($("#confpassword").val() != password) {
                    $(".login100-form-btn").addClass("confirm")
                    $(".login100-form-btn").hide()
                } else {
                    $("#confpassword").removeClass("confirm")
                    $(".login100-form-btn").show()
                }
            })

            $("#submit").click((e) => {
                if ($("#nationality option:selected").text() === "Nationality") {
                    e.preventDefault();
                    alert("Please Choose a Nationality")
                }
            })
        })
    </script>
</body>

</html>

<style>
    /* Create three equal columns that floats next to each other */
    .column {
        width: 50%;
        padding: 15px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
    @media screen and (max-width:600px) {
        .column {
            width: 100%;
        }
    }
</style>
</style>