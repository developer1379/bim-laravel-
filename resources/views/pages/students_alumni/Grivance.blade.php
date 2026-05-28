<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grievance - BIM</title>
    <link href="{{ asset('Includes/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('Images/logo.png') }}">
    @include('includes.head_links')
</head>

<body>
    @include('includes.navbar')

    <!-- About Us Section Start -->
    <div class="container mb-5">




        <section id="Grievance" class="appointment" style="padding-top: 80px !important">
            <div class="container">

                <div class="section-title">
                    <h2 class="text-danger text-center">Grievance Redressal Cell </h2>

                </div>


                <div class="row mb-2">
                    <!-- start contact block -->

                    <!-- start contact-form head -->
                    <div class="col-12 col-xl-12 col-md-12 md-margin-40px-bottom sm-margin-30px-bottom text-left">
                        <h6 class=" font-weight-600 mb-0 text-center  text-danger"><a href="{{ asset('pdf/Grievance Redressal Committee.pdf') }}" target="_blank" class="text-decoration-none text-black">Grievance Redressal Cell </a><a></a></h6>
                        <a>
                            <br>
                            <p class="width-95 lg-width-100">
                                The capacity of the cell is to investigate the complaints submitted by any student/ employee/ stakeholders and judge its legitimacy.
                                The Grievance cell is additionally engaged to investigate matters of harassment.
                                Anyone with a genuine grievance may approach the members of the cell in person or in consultation with the officer in-charge of the "Grievance Redressal Cell".
                                On the off chance that the individual is unwilling to show up in self, complaint might be dropped/ recorded as a hard copy at the idea box of the Grievance Cell at Administrative Block.
                                Complaints may likewise plague through email to the official responsible for the Cell.
                            </p>
                        </a>
                    </div>
                </div>





                <div class="php-email-form border rounded-0 p-4">
                    <div class="row">
                        <h2 class="text-danger text-center mb-4 mt-0 pt-0">Grievance Form</h2>

                        <div class="col-md-4 form-group">
                            <input name="ctl00$ContentPlaceHolder1$tb_name1" type="text" maxlength="150" id="ContentPlaceHolder1_tb_name1" class="form-control border rounded-0" placeholder="Your Name" />
                            <span id="ContentPlaceHolder1_RequiredFieldValidator4" style="color:Red;display:none;">Required</span>
                        </div>

                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input name="ctl00$ContentPlaceHolder1$tb_email1" type="text" maxlength="150" id="ContentPlaceHolder1_tb_email1" class="form-control border rounded-0" placeholder="Your Email" />
                            <span id="ContentPlaceHolder1_RequiredFieldValidator7" style="color:Red;display:none;">Required</span>
                            <span id="ContentPlaceHolder1_RegularExpressionValidator2" style="color:Red;display:none;">Invalid Email Id</span>
                        </div>

                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input name="ctl00$ContentPlaceHolder1$tb_phone1" type="text" maxlength="15" id="ContentPlaceHolder1_tb_phone1" class="form-control border rounded-0" placeholder="Contact No" />
                            <span id="ContentPlaceHolder1_RequiredFieldValidator5" style="color:Red;display:none;">Required</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 form-group mt-3">
                            <select name="ctl00$ContentPlaceHolder1$ddl_userType" id="ContentPlaceHolder1_ddl_userType" class="form-control form-select border rounded-0">
                                <option value="0">-Type-</option>
                                <option value="Student">Student</option>
                                <option value="Staff">Staff</option>
                            </select>
                            <span id="ContentPlaceHolder1_CompareValidator3" style="color:Red;display:none;">Required</span>
                        </div>

                        <div class="col-md-3 form-group mt-3">
                            <select name="ctl00$ContentPlaceHolder1$ddl_fac" onchange="__doPostBack('ctl00$ContentPlaceHolder1$ddl_fac','')" id="ContentPlaceHolder1_ddl_fac" class="form-control form-select border rounded-0">
                                <option selected="selected" value="0">-Faculty-</option>
                                <option value="1">College of Engineering & Technology</option>
                                <option value="2">BIT College of Management</option>
                            </select>
                            <span id="ContentPlaceHolder1_CompareValidator1" style="color:Red;display:none;">Required</span>
                        </div>

                        <div class="col-md-3 form-group mt-3">
                            <select name="ctl00$ContentPlaceHolder1$ddl_dept" onchange="__doPostBack('ctl00$ContentPlaceHolder1$ddl_dept','')" id="ContentPlaceHolder1_ddl_dept" class="form-control form-select border rounded-0">
                                <option selected="selected" value="0">-Department-</option>
                            </select>
                        </div>

                        <div class="col-md-3 form-group mt-3">
                            <select name="ctl00$ContentPlaceHolder1$ddl_branch" onchange="__doPostBack('ctl00$ContentPlaceHolder1$ddl_branch','')" id="ContentPlaceHolder1_ddl_branch" class="form-control form-select border rounded-0">
                                <option value="0">-Branch-</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <input name="ctl00$ContentPlaceHolder1$tb_subject1" type="text" maxlength="250" id="ContentPlaceHolder1_tb_subject1" class="form-control border rounded-0" placeholder="Subject" />
                        <span id="ContentPlaceHolder1_RequiredFieldValidator6" style="color:Red;display:none;">Required</span>
                    </div>

                    <div class="form-group mt-3">
                        <textarea name="ctl00$ContentPlaceHolder1$tb_msg1" rows="5" maxlength="2000" id="ContentPlaceHolder1_tb_msg1" class="form-control border rounded-0" placeholder="Message"></textarea>
                    </div>

                    <div class="btn-wrap bg-white py-2 text-center">
                        <a id="ContentPlaceHolder1_btn_submitGrievance" class="btn btn-danger rounded-0 mt-4" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions('ctl00$ContentPlaceHolder1$btn_submitGrievance', '', true, 'x2', '', false, true))">Send Grievance</a>
                    </div>
                </div>



            </div>
        </section>
    </div>
    <!-- About Us Section Ends -->

    @include('includes.footer')
    @include('includes.body_links')
</body>

</html>