<!DOCTYPE html>
<html>

<head>
     <?php 
        
        session_start();
        if(! isset($_SESSION['logged_in'])){
            
            header("Location:./login.html");
        }
    ?>

        <?php include '../includes/user-header-path.php';?>


</head>

<body>

    <div class="container-fluid">
        <div class="row heading">
            <div class="col-sm-10">
                <div class="logo">
                    <img src="images/logo.png" />
                </div>
            </div>
            <div class="col-sm-2 ">
                <a id="link_1" href="index.php" class="btn btn-primary pull-right" role="button" aria-pressed="true">View All</a>
            </div>
        </div>
        <div class="main-container">
            <div class="row sub-heading">
                <div class="col-sm-12">
                    <h2 class="contract_name_head">Create a new Contract</h2>
                    <h6 class="contract_last_mod">Last Modified:
                        <span></span>
                    </h6>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row success-alert">
                    <div class="col-sm-10 succs">
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Well done!</h4>
                            <p>Contract has been successfully updated.</p>
                            <hr>
                            <p class="mb-0">
                                <a id="downpdf_link" target="_blank" href="">Click here</a> to download the PDF.</p>
                        </div>
                    </div>
                    <div class="col-sm-2 tick">
                        <img class="img-fluid" src="images/tick.png" />
                    </div>
                </div>
            </div>
            <form id="create_contract1" enctype="multipart/form-data">
                <div class="col">

                    <div class="row-sm-4">
                        <div class="form-sec">
                            <div class="addnewbox">
                                <h3>Enter the Client Details</h3>
                                <ul>
                                    <li>
                                        <label for="client_name">Client Name</label>
                                        <input type="text" id="client_name" name="client_name">
                                    </li>
                                    <li>
                                        <label for="client_spoc">Client SPOC</label>
                                        <input type="text" id="client_spoc" name="client_spoc">
                                    </li>
                                    <li>
                                        <label for="client_contact_no">Client Contact Number</label>
                                        <input type="text" id="client_contact_no" name="client_contact_no">
                                    </li>
                                    <li>
                                        <label for="client_pan">Client PAN</label>
                                        <input type="text" id="client_pan" name="client_pan">
                                    </li>
                                    <li>
                                        <label for="client_GSTN">Client GSTN</label>
                                        <input type="file" id="client_gstn_upload">
                                        <input type="hidden" id="client_gstn" name="client_gstn" required>
                                        <input type="hidden" id="gstn_name" name="gstn_name">
                                        <br />
                                        <a id='gstn_preview' download='' href=''></a>
                                    </li>
                                    <li>
                                        <label for="client_billing_address">Client Billing Address</label>
                                        <input type="text" id="client_billing_address" name="client_billing_address">
                                    </li>
                                    <li>
                                        <label for="client_payment_terms">Client Payment Terms</label>
                                        <input type="text" id="client_payment_terms" name="client_payment_terms">
                                    </li>
                                    <li>
                                        <label for="client_email_address">Client Email id</label>
                                        <input type="text" id="client_email_address" name="client_email_address">
                                    </li>
                                    <!-- <label for="client_gstn">Client GSTN</label>
						<input type="file" name="fileToUpload" id="client_gstn"> -->
                                    <input type="hidden" id="client_id" name="client_id" value="">
                                    <br>
                                    <br>
                                </ul>
                            </div>

                        </div>
                        <div class="row-sm-4">

                            <div class="form-sec">
                                <div class="addnewbox">
                                    <h3>Contract Details</h3>
                                    <ul>
                                        <li>
                                            <label for="contract_name">Contract Name</label>

                                            <input type="text" id="contract_name" name="contract_name" required>
                                        </li>
                                        <li>
                                            <label for="contract_description">Contract Description</label>
                                            <input type="text" id="contract_description" name="contract_description">
                                        </li>
                                        <li>
                                            <label for="contract_start_date">Contract Start Date</label>
                                            <input readonly size="16" type="text" data-date="" data-link-format="yyyy-mm-dd hh:ii" class="form_datetime control" required
                                                name="contract_start_date" id="contract_start_date">
                                        </li>
                                        <li>
                                            <label for="contract_end_date">Contract End Date</label>
                                            <input readonly size="16" type="text" data-date="" data-link-format="yyyy-mm-dd hh:ii" class="form_datetime control" required
                                                name="contract_end_date" id="contract_end_date">
                                        </li>

                                        <li>
                                            <label for="contract_type">Contract Type</label>
                                            <select id="contract_type" name="contract_type">
                                                <option value="1">Digital Marketing</option>
                                                <option value="2">Techincal</option>
                                                <option value="3">Both</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row-sm-4">

                                <div class="form-sec seobox">

                                    <h3>Scope Details</h3>
                                    <br />

                                    <ul id="scope_list" name="contract_scope"></ul>

                                </div>

                                <div class="form-sec">
                                    <h3>Legal</h3>
                                    <br />
                                    <ul id="legal" name="legal_terms"></ul>
                                </div>
                                <br>

                                <br>
                                <input type="submit" id="submit" value="Update" class="btn btn-primary">
                                <br>
                                <br>
                                <br>
                                <br>

                            </div>

                        </div>
            </form>
            </div>
            </div>


            <!-- Include JQuery - A JS library to make life easier -->
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>

            <script type="text/javascript" src="../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>

            <!-- Include our app.js file, this will contain the logic on frontend -->
            <script src="../js/path.js"></script>
            <script src="../js/app_detail.js"></script>

</body>

</html>