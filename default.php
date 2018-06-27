<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

JHTML::_('behavior.formvalidator');
?>

<form method="post" name="mathform" id="mathform">

  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            This should add numbers 1 and 2 and provide the result in JSON
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="get2" name="get2"  class="btn btn-primary" >
                  Get Answer 1
              </button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12" id="result2">

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          This should add two numbers from a POST body
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="number1">Number 1</label>
                <input type="text" class="form-control" id="number1">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="number2">Number 2</label>
                <input type="text" class="form-control" id="number2">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="get1" name="get1"  class="btn btn-primary" >
                  Get Answer 1
              </button>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12" id="result1">

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            This should fetch time for MST at time of call from another service
          </a>
        </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12">
              <button type="button" id="get3" name="get3"  class="btn btn-primary" >
                  Get Answer 3
              </button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12" id="result3">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<script>
   jQuery(document).ready(function (e) {

     jQuery("body").on("click", "#get2", function () {
          jQuery.ajax({
               url: "index.php?option=com_project&task=math.time&<?php echo JSession::getFormToken(); ?>",
               type: "GET",
               contentType: false,
               cache: false,
               processData: false,
               success: function (data)
               {
                 jQuery("#result3").empty();
                  jQuery("#result3").append("<br><h3>Result: "+ data + "</h3>");
               }
            });
      });

      jQuery("body").on("click", "#get2", function () {
           jQuery.ajax({
                url: "index.php?option=com_project&task=math.add&<?php echo JSession::getFormToken(); ?>=1&n1=4&n2=5",
                type: "GET",
                contentType: false,
                cache: false,
                processData: false,
                success: function (data)
                {
                  jQuery("#result2").empty();
                   jQuery("#result2").append("<br><h3>Result: "+ data + "</h3>");
                }
             });
       });

     jQuery("body").on("click", "#get1", function () {

       var num1 = jQuery("#number1").val();
        var num2 = jQuery("#number2").val();

       jQuery.ajax({
            url: "index.php?option=com_project&task=math.add&<?php echo JSession::getFormToken(); ?>=1&n1="+num1+"&n2="+num2,
            type: "POST",
            contentType: false,
            cache: false,
            processData: false,
            success: function (data)
            {
              jQuery("#result1").empty();
               jQuery("#result1").append("<br><h3>Result: "+ data + "</h3>");
            }
         });
     });

   });
</script>
