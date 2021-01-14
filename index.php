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
                            <input name="city_corporation" placeholder="City Corporation" class="form-control"
                                type="text">
                        </div>
                    </div>
                </div>

                <!-- Dropdown input -->
                <div class="form-group">
                    <label class="col-md-4 control-label">Ward No:</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="ward_no" class="form-control selectpicker">
                                <option value="">Select your Ward</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                                <option>32</option>
                                <option>33</option>
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
                            <input name="par_add" placeholder="Parmanent Address" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Local Address</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="local_add" placeholder="Local Address" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Date input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Date of Birth</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="dob" placeholder="Date of Birth" class="form-control" type="date">
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
                            <input name="client_name" placeholder="Client Name" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Dropdown input -->
                <div class="form-group">
                    <label class="col-md-4 control-label">Profession</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="profession" class="form-control selectpicker">
                                <option value="">Select your Profession</option>
                                <option>Doctor, Health Worker (Govt.)</option>
                                <option>Doctor, Health Worker (Private)</option>
                                <option>First Responder ( Firefighter, Police)</option>
                                <option>Education (Teacher, Stuff)</option>
                                <option>Freedom Fighter</option>
                                <option>Journalist </option>
                                <option>Elected Official</option>
                                <option>City Corporation Officer</option>
                                <option>City Corporation Employee</option>
                                <option>Govt. Emergency Service Worker</option>
                                <option>Banker</option>
                                <option>National team player</option>
                                <option>Skilled Agricultural, Forestry & Fishery Workers</option>
                                <option>Plant and Machine Operators and Assemblers</option>
                                <option>Elementary Occupations</option>
                                <option>Service and Sales Workers</option>
                                <option>Armed Forces Occupations</option>
                                <option>Technicians and Associate Professionals</option>
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
                            <input name="mobile_no" placeholder="017XXXXXXXX" class="form-control" type="number">
                        </div>
                    </div>
                </div>

                <!-- number input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">NID</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="nid" placeholder="XXXXXXXXXXX" class="form-control" type="number">
                        </div>
                    </div>
                </div>

                <!-- number input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Birth Certificate NO</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="birth_certificate" placeholder="XXXXXXXXXXX" class="form-control"
                                type="number">
                        </div>
                    </div>
                </div>

                <!-- number input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Emergency Contact Number</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="emer_contact_no" placeholder="017XXXXXXXX" class="form-control" type="number">
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
                            <input name="covid_test_date" placeholder="Date" class="form-control" type="date">
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
                            <input name="immunity_times" placeholder="Number" class="form-control" type="text">
                        </div>
                    </div>
                </div>


                <!-- Dropdown input -->
                <div class="form-group">
                    <label class="col-md-4 control-label">Previous Health History</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="health_history" class="form-control selectpicker">
                                <option value="">Select your Health History</option>
                                <option>Diabetic</option>
                                <option>Blood Presure</option>
                                <option>Cancer</option>
                                <option>Fever</option>
                                <option>Cough</option>
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