<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>রংপুর সিটি কর্পোরেশন করোনো টিকা পোর্টাল</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript">
    </script>

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
    <link rel="stylesheet" href="./style.css">

    <script>
    function showHideCovid() {
        if (document.getElementById('covidTestBeforeYes').checked) {
            document.getElementById('covidTestDate').style.display = 'block';
        } else {
            document.getElementById('covidTestDate').style.display = 'none';
        }
    }

    function showHideImmunity() {
        if (document.getElementById('immunityYes').checked) {
            document.getElementById('immunityTimes').style.display = 'block';
        } else {
            document.getElementById('immunityTimes').style.display = 'none';
        }
    }
    </script>

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">

        <form class="well form-horizontal" action=" " method="post" id="contact_form">
            <fieldset>

                <!-- Form Name -->
                <legend>
                    <center>
                        <h2><b>রংপুর সিটি কর্পোরেশন করোনো টিকা পোর্টাল</b></h2>
                    </center>
                </legend><br>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">City Corporation</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="first_name" placeholder="First Name" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Dropdown input -->
                <div class="form-group">
                    <label class="col-md-4 control-label">Ward No:</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="department" class="form-control selectpicker">
                                <option value="">Select your Department/Office</option>
                                <option>Department of Engineering</option>
                                <option>Department of Agriculture</option>
                                <option>Accounting Office</option>
                                <option>Tresurer's Office</option>
                                <option>MPDC</option>
                                <option>MCTC</option>
                                <option>MCR</option>
                                <option>Mayor's Office</option>
                                <option>Tourism Office</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Parmanent Address</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="last_name" placeholder="Last Name" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Local Address</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="last_name" placeholder="Last Name" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Date input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Date of Birth</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="last_name" placeholder="Last Name" class="form-control" type="date">
                        </div>
                    </div>
                </div>

                <!-- radio input -->

                <div class="form-group">
                    <label class="col-md-4 control-label">Gender</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male"> Male</label><br>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female"> Female</label><br>
                            <input type="radio" id="other" name="gender" value="other">
                            <label for="other"> Other</label>
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Client Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="user_name" placeholder="Username" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Dropdown input -->
                <div class="form-group">
                    <label class="col-md-4 control-label">Profession</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="department" class="form-control selectpicker">
                                <option value="">Select your Department/Office</option>
                                <option>Department of Engineering</option>
                                <option>Department of Agriculture</option>
                                <option>Accounting Office</option>
                                <option>Tresurer's Office</option>
                                <option>MPDC</option>
                                <option>MCTC</option>
                                <option>MCR</option>
                                <option>Mayor's Office</option>
                                <option>Tourism Office</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- number input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Mobile Number</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="contact_no" placeholder="(639)" class="form-control" type="number">
                        </div>
                    </div>
                </div>

                <!-- number input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">NID</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="contact_no" placeholder="(639)" class="form-control" type="number">
                        </div>
                    </div>
                </div>

                <!-- number input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Birth Certificate NO</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="contact_no" placeholder="(639)" class="form-control" type="number">
                        </div>
                    </div>
                </div>

                <!-- number input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Emergency Contact Number</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="contact_no" placeholder="(639)" class="form-control" type="number">
                        </div>
                    </div>
                </div>

                <!-- Checkbox input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Did you COVID-19 Test Before?</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <input type="checkbox" id="covidTestBeforeYes" name="covidTestBeforeYes" value="yes"
                                onclick="showHideCovid()">
                            <label for="covidTestBeforeYes"> Yes</label><br>
                            <input type="checkbox" id="covidTestBeforeNo" name="covidTestBeforeNo" value="no">
                            <label for="covidTestBeforeNo"> No</label><br>
                        </div>
                    </div>
                </div>

                <!-- Date input-->

                <div class="form-group" id="covidTestDate">
                    <label class="col-md-4 control-label">In which Date?</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="last_name" placeholder="Last Name" class="form-control" type="date">
                        </div>
                    </div>
                </div>


                <!-- Checkbox input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Immunity Compromised Patient?</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <input type="checkbox" id="immunityYes" name="immunityYes" value="yes"
                                onclick="showHideImmunity()">
                            <label for="immunityYes"> Yes</label><br>
                            <input type="checkbox" id="immunityNo" name="immunityNo" value="no">
                            <label for="immunityNo"> No</label><br>
                        </div>
                    </div>
                </div>

                <!-- Date input-->

                <div class="form-group" id="immunityTimes">
                    <label class="col-md-4 control-label">How Many Times?</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="last_name" placeholder="Last Name" class="form-control" type="text">
                        </div>
                    </div>
                </div>


                <!-- Dropdown input -->
                <div class="form-group">
                    <label class="col-md-4 control-label">Profession</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="department" class="form-control selectpicker">
                                <option value="">Select your Department/Office</option>
                                <option>Department of Engineering</option>
                                <option>Department of Agriculture</option>
                                <option>Accounting Office</option>
                                <option>Tresurer's Office</option>
                                <option>MPDC</option>
                                <option>MCTC</option>
                                <option>MCR</option>
                                <option>Mayor's Office</option>
                                <option>Tourism Office</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Select Basic -->

                <!-- Success message -->
                <div class="alert alert-success" role="alert" id="success_message">Success <i
                        class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit"
                            class="btn btn-warning">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span
                                class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
    </div><!-- /.container -->
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'>
    </script>
    <script src="./script.js"></script>

</body>

</html>