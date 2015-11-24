<?php $this->pageTitle = "FSKTM MCS | Claim"; ?>

<div class="container">

    <div class="span16">
        <section id="wizard" style="width:110%;">
            <div class="page-header" style="padding-top:10px;">
                <h1>Apply for Mileage Claim</h1>
            </div>

            <div id="rootwizard" class="tabbable tabs-left" style="width:100%;">
                <ul class="nav nav-tabs" >
                    <li class="active"><a href="claim.html#tab1" data-toggle="tab">Trip Information</a></li>
                    <!--<li class=""><a href="claim.html#tab2" data-toggle="tab">Vehicle</a></li>-->
                    <!--<li class=""><a href="claim.html#tab3" data-toggle="tab">Mileage Claim</a></li>-->
                    <li class=""><a href="claim.html#tab2" data-toggle="tab">Meals & Daily Allowance</a></li>
                    <li class=""><a href="claim.html#tab3" data-toggle="tab">Hotel/Lodging Allowance</a></li>
                    <li><a href="claim.html#tab4" data-toggle="tab">Public Transport Allowance</a></li>
                    <li><a href="claim.html#tab5" data-toggle="tab">Others</a></li>
                    <li><a href="claim.html#tab6" data-toggle="tab">Advances</a></li>
                    <li><a href="claim.html#tab7" data-toggle="tab">Summary</a></li>
                </ul>
                <div class="tab-content" style="width:87.45%;">
                    <div class="tab-pane  active" id="tab1" style="width:100%;">
                        <table style=" width:100%; margin-left:-15px;">
                            <thead>
                                <th style="width: 200px;">Depart Date</th>
                                <th style="width: 200px;">Arrival Date</th>
                                <th style="width: 200px;">Depart Time</th>
                                <th style="width: 200px;">Arrival Time</th>
                                <th style="width: 200px;">Departure and Arrival<br>Locations</th>
                                <th style="width: 200px;">Type of Duty</th>
                                <th style="width: 100px;">Vehicle</th>
                            </thead>
                            <tbody>
                                <td>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" style="width:70px; padding: 14px;"/>
                                    <span class="input-group-addon" style="float:left; width:40px;">
                                        <span class="glyphicon glyphicon-calendar">
                                        </span>
                                    </span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker2'">
                                            <input type='text' class="form-control" style="width:70px; padding: 14px;"/>
                                        <span class="input-group-addon" style="float:left; width:40px;"">
                                            <span class="glyphicon glyphicon-calendar">
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker3'>
                                            <input type='text' class="form-control" style="width:70px; padding: 14px;">
                                            <span class="input-group-addon" style="float:left; width:40px;">
                                            <span class="glyphicon glyphicon-calendar">
                                            </span>
                                        </span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker4'>
                                            <input type='text' class="form-control" style="width:70px; padding: 14px;">
                                    <span class="input-group-addon" style="float:left; width:40px;">
                                        <span class="glyphicon glyphicon-calendar">
                                        </span>
                                    </span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" style="width:70px; padding: 14px;">
                                        <span class="input-group-addon" style="float:left; width:40px;">
                                            <span class="glyphicon glyphicon-map-marker">
                                            </span>
                                        </span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div  class="form-group">
                                        <select id="duty">
                                            <option>Formal Duty</option>
                                            <option>Informal Duty</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div  class="form-group">
                                        <select id="vehicle">
                                            <option>ACY 9876 Mazda RX7</option>
                                            <option>AGE 1234 Honda CRZ</option>
                                        </select>
                                    </div>
                                </td>
                            </tbody>
                        </table>
                    </div>
                    <div  class="tab-pane" id="tab2"  style="width:100%;">
                        <table class="table table-bordered table-condensed" style="margin-left:auto;margin-right:auto;text-align:center;">
                            <thead>
                            <tr>
                                <th>Meal Allowance</th>
                                <th>Daily Allowance</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="text-align:center;">RM 90</td>
                                <td style="text-align:center;">RM 120</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="tab3"  style="width:100%;">
                        <h5>Hotel Allowance</h5>
                        <table class="table table-bordered table-condensed" style="margin-left:auto;margin-right:auto;text-align:center;">
                            <thead>
                            <tr>
                                <th>Hotel Name</th>
                                <th>Date</th>
                                <th>Receipt</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="text-align:center;"><input type='text' class="form-control" style="width=70px;padding: 14px;"></td>
                                <td>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepickerHotel'">
                                        <input type='text' class="form-control" style="width:70px; padding: 14px;"/>
                                        <span class="input-group-addon" style="float:left; width:40px;"">
                                            <span class="glyphicon glyphicon-calendar">
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <button>Upload</button>
                                </td>
                                <td>
                                    <button>Add</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <br>
                        <h5>Lodging Allowance</h5>
                        <table class="table table-bordered table-condensed" style="margin-left:auto;margin-right:auto;text-align:center;">
                            <thead>
                            <tr>
                                <th>Lodging Name</th>
                                <th>Date</th>
                                <th>Receipt</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="text-align:center;"><input type='text' class="form-control" style="padding: 14px;"></td>
                                <td>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepickerLodging'">
                                        <input type='text' class="form-control" style="width:70px; padding: 14px;"/>
                                        <span class="input-group-addon" style="float:left; width:40px;"">
                                            <span class="glyphicon glyphicon-calendar">
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <button>Upload</button>
                                </td>
                                <td>
                                    <button>Add</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="tab4"  style="width:100%;">
                        <table class="table table-bordered table-condensed" style="margin-left:auto;margin-right:auto;text-align:center;">
                            <thead>
                            <tr>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Price</th>
                                <th>Receipt</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div  class="form-group">
                                        <select id="publicType">
                                            <option>Taxi</option>
                                            <option>City Bus</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepickerPublic'">
                                        <input type='text' class="form-control" style="width:70px; padding: 14px;"/>
                                        <span class="input-group-addon" style="float:left; width:40px;"">
                                            <span class="glyphicon glyphicon-calendar">
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td style="text-align:center;">RM <input type='text' class="form-control" style="width=70px;padding: 14px;"></td>
                                <td>
                                    <button>Upload</button>
                                </td>
                                <td>
                                    <button>Add</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="tab5">
                        <table class="table table-bordered table-condensed" style="margin-left:auto;margin-right:auto;text-align:center;">
                            <thead>
                            <tr>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Receipt</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div  class="form-group">
                                        <select id="publicType">
                                            <option>Toll</option>
                                            <option>City Bus</option>
                                        </select>
                                    </div>
                                </td>
                                <td style="text-align:center;">RM <input type='text' class="form-control" style="width=70px;padding: 14px;"></td>
                                <td>
                                    <button>Upload</button>
                                </td>
                                <td>
                                    <button>Add</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="tab6">
                        <table class="table table-bordered table-condensed" style="margin-left:auto;margin-right:auto;text-align:center;">
                            <thead>
                            <tr>
                                <th>Total Advance Received</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="text-align:center;">RM <input value="0.00" type='text' class="form-control" style="width=70px;padding: 14px;"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="tab7">
                        7
                    </div>
                    <div class="tab-pane" id="tab8">
                        Advances
                    </div>
                    <div class="tab-pane" id="tab9">
                        Summary
                    </div>
                    <ul class="pager wizard">
                        <li class="previous first disabled" style="display:none;"><a href="#">First</a></li>
                        <li class="previous disabled"><a href="#">Previous</a></li>
                        <li class="next last" style="display:none;"><a href="#">Last</a></li>
                        <li class="next"><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>


        </section>
    </div>
</div>

<script src="<?php echo $this->getThemePath()?>js/bootstrap.min v2.3.2.js"></script>
<script src="<?php echo $this->getThemePath()?>js/jquery.bootstrap.wizard.js"></script>
<script src="<?php echo $this->getThemePath()?>js/prettify.js"></script>
<script>
    $(document).ready(function() {
        $('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-tabs'});
        window.prettyPrint && prettyPrint()
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({
            viewMode: 'years',
            format: 'MM YY'
        });
    });

</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker2').datetimepicker({
            viewMode: 'years',
            format: 'MM YY'
        });
    });

</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker3').datetimepicker({
            viewMode: 'years',
            format: 'MM YY'
        });
    });

</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker4').datetimepicker({
            viewMode: 'years',
            format: 'MM YY'
        });
    });

</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepickerHotel').datetimepicker({
            viewMode: 'years',
            format: 'MM YY'
        });
    });

</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepickerLodging').datetimepicker({
            viewMode: 'years',
            format: 'MM YY'
        });
    });

</script>
<script type="text/javascript">
    $("tr").hover(function() {
        $(this).addClass("hover");
    }, function() {
        $(this).removeClass("hover");
    });
    $('tr').click(function(event) {
        $('tr').not(this).removeClass('clicked');
        $(this).toggleClass('clicked');
    });
</script>
