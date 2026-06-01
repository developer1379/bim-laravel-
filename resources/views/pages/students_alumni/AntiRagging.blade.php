@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@section('content')
<!-- About Us Section Start -->
    <div class="container mb-5">

        <section id="Grievance" class="appointment pt-5">
            <div class="container">
                <div class="php-email-form border rounded-0 p-4">
                    <div class="row">
                        <h2 class="text-danger text-center mb-4 mt-0 pt-0">Ragging Complaint Form </h2>

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
@endsection
