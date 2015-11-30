<?php $this->pageTitle = "FSKTM MCS | Claim"; ?>

<div class="container" xmlns:display="http://www.w3.org/1999/xhtml">

    <div class="span16">
        <section id="wizard" style="width:110%;">
            <div class="page-header" style="padding-top:10px;">
                <h1>Apply for Mileage Claim</h1>
            </div>

            <div id="rootwizard" class="tabbable tabs-left" style="width:100%;">
                <ul class="nav nav-tabs" style=" display:inline;">
                    <li class="active"><a href="claim.html#tab1" data-toggle="tab">Trip Information</a></li>
                    <!--<li class=""><a href="claim.html#tab2" data-toggle="tab">Vehicle</a></li>-->
                    <!--<li class=""><a href="claim.html#tab3" data-toggle="tab">Mileage Claim</a></li>-->
                    <li class=""><a href="claim.html#tab2" data-toggle="tab">Meals & Daily Allowance</a></li>
                    <li class=""><a href="claim.html#tab3" data-toggle="tab">Hotel/Lodging Allowance</a></li>
                    <li class=""><a href="claim.html#tab4" data-toggle="tab">Public Transport Allowance</a></li>
                    <li class=""><a href="claim.html#tab5" data-toggle="tab">Others</a></li>
                    <li class=""><a href="claim.html#tab6" data-toggle="tab">Advances</a></li>
                    <li class=""><a href="claim.html#tab7" data-toggle="tab">Summary</a></li>
                </ul>
                <div class="tab-content" style="width:85.45%;">
                    <ul class="pager wizard">
                        <li class="previous first disabled" style="display:none;"><a href="#">First</a></li>
                        <li class="previous disabled"><a href="#">Previous</a></li>
                        <li class="next last" style="display:none;"><a href="#">Last</a></li>
                        <li class="next"><a href="#">Next</a></li>
                    </ul>
                    <div class="tab-pane  active" id="tab1" style="width:100%;">
                        <div class="form">

                            <?php $form=$this->beginWidget('CActiveForm', array(
                                'id'=>'trip-form',
                                /*'enableClientValidation'=>true,
                                'clientOptions'=>array(
                                    'validateOnSubmit'=>true,
                                ),*/
                            )); ?>


                            <table style=" width:100%;margin-left:0px;">
                                <thead>
                                <th style="width: 200px;">Depart Date</th>
                                <th style="width: 200px;">Arrival Date</th>
                                <th style="width: 200px;">Depart Time</th>
                                <th style="width: 200px;">Arrival Time</th>
                                </thead>
                                <tbody>
                                <td>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <!--<input type='text' class="form-control" style="width:100px; padding: 14px;"/>-->
                                            <?php echo $form->textField($model,'departDate', array('class' => 'form-control', 'style' => 'width:100px; padding: 14px;', 'required' => '')); ?>

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
                                        <!--<input type='text' class="form-control" style="width:100px; padding: 14px;"/>-->
                                        <?php echo $form->textField($model,'arrivalDate', array('class' => 'form-control', 'style' => 'width:100px; padding: 14px;', 'required' => '')); ?>

                                        <span class="input-group-addon" style="float:left; width:40px;"">
                                                <span class="glyphicon glyphicon-calendar">
                                                </span>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker3'>

                                            <!--<input type='text' class="form-control" style="width:100px; padding: 14px;">-->
                                            <?php echo $form->textField($model,'departTime', array('class' => 'form-control', 'style' => 'width:100px; padding: 14px;', 'required' => '')); ?>
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
                                            <!--<input type='text' class="form-control" style="width:100px; padding: 14px;">-->

                                            <?php echo $form->textField($model,'arrivalTime', array('class' => 'form-control', 'style' => 'width:100px; padding: 14px;', 'required' => '')); ?>
                                            <span class="input-group-addon" style="float:left; width:40px;">
                                            <span class="glyphicon glyphicon-calendar">
                                            </span>
                                        </span>
                                        </div>
                                    </div>
                                </td>
                                </tbody>
                            </table>
                            <table style=" width:100%;margin-left:0px;">
                                <thead>
                                <th style="width: 200px;">Depart Location</th>
                                <th style="width: 200px;">Destination</th>
                                <th style="width: 200px;">Type of Duty</th>
                                <th style="width: 200px;">Vehicle</th>
                                </thead>
                                <tbody>
                                <td>
                                    <div class="form-group">
                                        <div class='input-group date' id=''>
                                            <!--<input type='text' class="form-control" style="width:100px; padding: 14px;">-->
                                            <?php echo $form->textField($model,'departLocation', array('class' => 'form-control', 'style' => 'width:180px; padding: 14px;', 'required' => '')); ?>
                                            <!--<span class="input-group-addon" style="float:left; width:40px;">
                                                    <span class="glyphicon glyphicon-map-marker">
                                                    </span>
                                                </span>-->
                                            <?php echo $form->hiddenField($model,'departCity', array('class' => 'form-control','id' => 'departCity', 'required' => '')); ?>
                                            <?php echo $form->hiddenField($model,'departCityLat', array('class' => 'form-control','id' => 'departCityLat', 'required' => '')); ?>
                                            <?php echo $form->hiddenField($model,'departCityLng', array('class' => 'form-control','id' => 'departCityLng', 'required' => '')); ?>
                                            <!--<button onclick="window.alert(document.getElementById('departCity').value)">Test</button>
                                       <button onclick="init()">Add</button>-->
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class='input-group date' id=''>
                                                                                        <!--<input type='text' class="form-control" style="width:100px; padding: 14px;">-->
                                            <?php echo $form->textField($model,'arrivalLocation', array('class' => 'form-control', 'style' => 'width:160px; padding: 14px;', 'required' => '')); ?>
                                            <!--<span class="input-group-addon" style="float:left; width:40px;">
                                                    <span class="glyphicon glyphicon-map-marker">
                                                    </span>
                                                </span>-->
                                            <?php echo $form->hiddenField($model,'destinationCity', array('class' => 'form-control','id' => 'destinationCity', 'required' => '')); ?>
                                            <?php echo $form->hiddenField($model,'destinationCityLat', array('class' => 'form-control','id' => 'destinationCityLat', 'required' => '')); ?>
                                            <?php echo $form->hiddenField($model,'destinationCityLng', array('class' => 'form-control','id' => 'destinationCityLng', 'required' => '')); ?>
                                            <?php echo $form->hiddenField($model,'distance', array('class' => 'form-control','id' => 'distance', 'required' => '')); ?>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div  class="form-group">
                                        <div id="duty">
                                        <?php echo $form->dropDownList($model,'dutyType',array('1'=>'Formal Duty','2'=>'Informal Duty'));?>
                                        </div>
                                        <!-- <select id="duty">
                                           <option>Formal Duty</option>
                                            <option>Informal Duty</option>-->
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div  class="form-group">
                                        <div id="vehicle">
                                        <?php echo $form->dropDownList($model,'vehicle',array('1'=>'ACY 9876 Mazda RX7','2'=>'AGE 1234 Honda CRZ'));?>
                                        </div>
                                            <!--<select id="vehicle">
                                            <option>ACY 9876 Mazda RX7</option>
                                            <option>AGE 1234 Honda CRZ</option>
                                        </select>-->
                                    </div>
                                </td>
                                </tbody>
                            </table>
                            <center> <?php echo CHtml::submitButton('Save', array('class' => 'btn btn-default', 'onclick' => 'getDist()')); ?>
                                <!--<input type="submit" class="btn btn-default">Save</input>-->
                                <input type="reset" class="btn btn-default"></input>
                            </center>

                            </form>

                            <?php $this->endWidget(); ?>
                        </div><!-- form -->
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
                                <td style="text-align:center;"><input type='text' class="form-control" style="padding: 14px;"></td>
                                <td>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepickerHotel'">
                                        <input type='text' class="form-control" style="width:160px; padding: 14px;"/>
                                        <span class="input-group-addon" style="float:left; width:40px;"">
                                            <span class="glyphicon glyphicon-calendar">
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-default">Upload</button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-default">Add</button>
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
                                        <input type='text' class="form-control" style="width:160px; padding: 14px;"/>
                                        <span class="input-group-addon" style="float:left; width:40px;"">
                                            <span class="glyphicon glyphicon-calendar">
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-default">Upload</button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-default">Add</button>
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
                                    <div class="form-group">
                                        <select id="publicType">
                                            <option>Taxi</option>
                                            <option>City Bus</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepickerPublic'">
                                        <input type='text' class="form-control" style="width:160px; padding: 14px;"/>
                                        <span class="input-group-addon" style="float:left; width:40px;"">
                                            <span class="glyphicon glyphicon-calendar">
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td style="text-align:center; width:100px">
                                    <label style="display:block; width:20px; float:left; border:1px solid cyan">RM</label>
                                    <input type='text' class="form-control" style="display:block; border:1px solid blue;float:left;width=70px;padding: 14px;">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-default">Upload</button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-default">Add</button>
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
                                    <button type="button" class="btn btn-default">Upload</button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-default">Add</button>
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
                        <?php
                        $this->breadcrumbs=array(
                            'Trips',
                        );
                        ?>
                        <?php $this->widget('zii.widgets.CListView', array(
                            'dataProvider'=>$dataProvider,
                            'itemView'=>'_view',
                        )); ?>
                        <div style="margin-right:10px;"><button type="button" class="btn btn-default pull-right">Submit</button>
                            <button style="margin-right:10px; float:right;"type="button" class="btn btn-default">Save</button>
                        </div>
                    </div>
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
            format: 'DD MM YYYY',

        });
    });

</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker2').datetimepicker({
            viewMode: 'years',
            format: 'DD MM YYYY',
        });
    });

</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker3').datetimepicker({
            viewMode: 'years',
            format: 'LT',
        });
    });

</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker4').datetimepicker({
            viewMode: 'years',
            format: 'LT',
        });
    });

</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepickerHotel').datetimepicker({
            viewMode: 'years',
            format: 'DD MMMM YYYY',
        });
    });

</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepickerLodging').datetimepicker({
            viewMode: 'years',
            format: 'DD MMMM YYYY',
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

<script>
    var input1 = document.getElementById('Trip_departLocation');
    var input2 = document.getElementById('Trip_arrivalLocation');
    var options = {
        types: ['(cities)'],
        componentRestrictions: {country: 'my'}
    };
    var autocomplete1 = new google.maps.places.Autocomplete(input1);
    var autocomplete2 = new google.maps.places.Autocomplete(input2);
    var place1 = autocomplete1.getPlace();
    var place2 = autocomplete2.getPlace();
    function init() {


    }

    google.maps.event.addDomListener(window, 'load', init);
    google.maps.event.addListener(autocomplete1, 'place_changed', function () {
        var place1 = autocomplete1.getPlace();
        document.getElementById('departCity').value = place1.address_components[0].long_name;
        document.getElementById('departCityLat').value = place1.geometry.location.lat();
        document.getElementById('departCityLng').value = place1.geometry.location.lng();

        /*var lat = place1.geometry.location.lat(),
            lng = place1.geometry.location.lng();*/
    });
    google.maps.event.addListener(autocomplete2, 'place_changed', function () {
        var place2 = autocomplete2.getPlace();
        document.getElementById('destinationCity').value = place2.address_components[0].long_name;
        document.getElementById('destinationCityLat').value = place2.geometry.location.lat();
        document.getElementById('destinationCityLng').value = place2.geometry.location.lng();

    });
function getDist(){
    var fromLat = document.getElementById('departCityLat').value;
    var fromLng = document.getElementById('departCityLng').value
    var toLat = document.getElementById('destinationCityLat').value;
    var toLng = document.getElementById('destinationCityLng').value;
    var from = new google.maps.LatLng(fromLat, fromLng);
    var to   = new google.maps.LatLng(toLat, toLng);
    var dist = google.maps.geometry.spherical.computeDistanceBetween(from, to);
    console.dir(dist);
    document.getElementById('distance').value = dist/1000;
}

</script>
