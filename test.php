<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	
#select-team , #quesOne, #quesTwo, #quesThree, #quesFour, #results {
	display: none;
}

/*VQ Challenge*/
.gameBanner {
    background-color: #094266;
}

h1.headline-game {
    color: #fff;
    padding: 5px 20px;
}

.infoBox.boxRadius {
    background-color: #f3f3f3;
    padding: 20px;
}

.btnDefault {
    margin-top: 10px;
    padding: 5px 10px;
    color: #fff;
    border: 0;
    background-color: #428bca;
    border-color: #357ebd;
}

.headScan{
	text-align: center;
}

.headStyle {
    background-color: #0090c5;
    color: white;
    margin: 0 10px;
    padding: 5px;
}
.select-team .option {
   float: left;
    width: 47%;
    background-color: #f3f3f3;
    border: 1px solid #ddd;
    margin: 5px 10px;
}

.select-team .imgStyle {
    text-align: center;
}

.qPlay {
    color: #fff;
    padding: 15px 20px;
}

.ansbtn {
    float: left;
    margin-left: 20px;
}

p.true {
    color: #05b70c;
    font-size: 16px;
}

.hide{
	display: none;
}

</style>
<!-- include jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- include underscore.js for template -->
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.4/underscore-min.js"></script> -->

    <!-- include the countdown plugin -->
    <script src="jquery.countdown.js"></script>


	 
</head>
<body>

<span id="my-countdown"></span><br/>


<style type="text/css">
	
#select-team , #quesOne, #quesTwo, #quesThree, #quesFour, #results {
	display: none;
}

/*VQ Challenge*/
.gameBanner {
    background-color: #094266;
}

h1.headline-game {
    color: #fff;
    padding: 5px 20px;
}

.infoBox.boxRadius {
    background-color: #f3f3f3;
    padding: 20px;
}

.btnDefault {
    margin-top: 10px;
    padding: 5px 10px;
    color: #fff;
    border: 0;
    background-color: #428bca;
    border-color: #357ebd;
}

.headScan{
	text-align: center;
}

.headStyle {
    background-color: #0090c5;
    color: white;
    margin: 0 10px;
    padding: 5px;
}
.select-team .option {
   float: left;
    width: 47%;
    background-color: #f3f3f3;
    border: 1px solid #ddd;
    margin: 5px 10px;
}

.select-team .imgStyle {
    text-align: center;
}

.qPlay {
    color: #fff;
    padding: 15px 20px;
}

.ansbtn {
    float: left;
    margin-left: 20px;
}

p.true {
    color: #05b70c;
    font-size: 16px;
}

</style>
<div id="initial-start">
	<div class="row banner-row">
		<div class="col-xs-10 col-sm-8 col-md-8 col-lg-8">
			<div class="gameBanner">
				<h1 class="headline-game">How to play</h1>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-10 col-sm-7 col-md-7 col-lg-7">
			<div class="infoBox boxRadius">
				<div class="howText">
					<p>Can you diagnose PAH or CTEPH from a ventilation/perfusion (V/Q) scan?</p>
					<p>You have 1 minute to identify the condition on 4 pairs of scans.</p>
					<p>For every correct answer you will win points.</p>
					<p>Good luck!</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row select-team">
		<div class="col-xs-9 col-sm-8 col-md-8 col-lg-8">
			<button ontouchstart="" type="button" id="startGame" class="btnDefault normal boxRadius game-start-btn">START</button>
		</div>
	</div>
</div><!-- end initial start -->

<div id="select-team">
	<div class="row banner-row">
		<div class="col-xs-10 col-sm-8 col-md-8 col-lg-8">
			<div class="gameBanner">
				<h1 class="headline-game">Press Start</h1>
			</div>
		</div>
	</div>
	<div class="row select-team">
		<div class=" col-xs-10  col-sm-10  col-md-10 col-lg-10">
			<div class="row option">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row headScan">
						<div class="col-xs-12 headStyle boxRadius"><p>Ventilation</p></div>
					</div>
					<div class="row">
						<div class="col-xs-12 imgStyle"><p style="padding-top: 35px;">Press Start</p></div>
					</div>
				</div>
			</div>
			<div class="row option">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row headScan">
						<div class="col-xs-12 headStyle boxRadius"><p>Perfusion</p></div>
					</div>
					<div class="row">
						<div class="col-xs-12 imgStyle"><p style="padding-top: 35px;">Press Start</p></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row select-team">
		<div class=" col-xs-9  col-sm-8  col-md-8 col-lg-8">
			<button ontouchstart="" type="button" id="startGame" class="btnDefault normal boxRadius btnBottom start-btn">START</button>
		</div>
	</div>
</div><!--end select team -->



<!-- Question 1 -->
<div id="quesOne">
	<div class="row banner-row">
		<div class="col-xs-10 col-sm-9 col-md-9 col-lg-8">
			<div class="gameBanner playQuestion">
				<div class="boxRadius qNumber" style="float: left;"><strong></strong></div><div class="qPlay"><strong>Does the ventilation/perfusion scan show a patient with CTEPH or one with PAH?</strong></div>
			</div>
		</div>
	</div>

	<div class="row select-team">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
			<div class="row option">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row headScan">
						<div class="col-xs-12 headStyle boxRadius"><p>Ventilation</p></div>
					</div>
					<div class="row">
						<div class="col-xs-12 imgStyle"><img style="height: 230px;" src="01_PAHVinverted.jpg"></div>
					</div>
				</div>
			</div>
			<div class="row option">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row headScan">
						<div class="col-xs-12 headStyle boxRadius"><p>Perfusion</p></div>
					</div>
					<div class="row">
						<div class="col-xs-12 imgStyle"><img style="height: 230px;" src="02_PAHQinverted.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row btnAnswers select-team">
		<div class=" col-xs-10  col-sm-5  col-md-7 col-lg-5">
			<div class="row">
				
					<div class="ansbtn">
						<button class="answer btnDefault boxRadius cteph" type="button" value="false">CTEPH</button>
					</div>

					<div class="ansbtn">
						<button  class="answer btnDefault boxRadius pah" type="button" value="true">PAH</button>
					</div>
				
			</div>
		</div>
	</div>

	<div class="row correctAnswer hide" style="margin-top: 45px;">
		<div class=" col-xs-10  col-sm-10  col-md-10 col-lg-10" style="text-align: left;">
			<p class="true" style="font-size: 25px; font-weight: bold;">Correct answer: PAH</p>
		</div>
	</div>

	<div class="row select-team">
		<div class=" col-xs-9  col-sm-8  col-md-8 col-lg-8">
			<button ontouchstart="" id="confirm" class="doEnter btnDefault normal boxRadius btnBottom hide">CONFIRM</button>
		</div>
	</div>

	<div class="row select-team">
		<div class=" col-xs-9  col-sm-8  col-md-8 col-lg-8">
			<button type="button" id="next" ontouchstart="" class="goNext btnDefault normal boxRadius btnBottom hide">NEXT</button>
		</div>
	</div>
</div><!--end question One-->


<!-- Question 2 -->
<div id="quesTwo">
	<div class="row banner-row">
		<div class="col-xs-10 col-sm-9 col-md-9 col-lg-8">
			<div class="gameBanner playQuestion">
				<div class="boxRadius qNumber" style="float: left;"><strong></strong></div><div class="qPlay"><strong>Does the ventilation/perfusion scan show a patient with CTEPH or one with PAH?</strong></div>
			</div>
		</div>
	</div>

	<div class="row select-team">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
			<div class="row option">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row headScan">
						<div class="col-xs-12 headStyle boxRadius"><p>Ventilation</p></div>
					</div>
					<div class="row">
						<div class="col-xs-12 imgStyle"><img style="height: 230px;" src="01_PAHVinverted.jpg"></div>
					</div>
				</div>
			</div>
			<div class="row option">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row headScan">
						<div class="col-xs-12 headStyle boxRadius"><p>Perfusion</p></div>
					</div>
					<div class="row">
						<div class="col-xs-12 imgStyle"><img style="height: 230px;" src="02_PAHQinverted.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row btnAnswers select-team">
		<div class=" col-xs-10  col-sm-5  col-md-7 col-lg-5">
			<div class="row">
				
					<div class="ansbtn">
						<button class="answer btnDefault boxRadius cteph" type="button" value="false">CTEPH</button>
					</div>

					<div class="ansbtn">
						<button class="answer btnDefault boxRadius pah" type="button" value="true">PAH</button>
					</div>
				
			</div>
		</div>
	</div>

	<div class="row correctAnswer hide" style="margin-top: 45px;">
		<div class=" col-xs-10  col-sm-10  col-md-10 col-lg-10" style="text-align: left;">
			<p class="true" style="font-size: 25px; font-weight: bold;">Correct answer: PAH</p>
		</div>
	</div>

	<div class="row select-team">
		<div class=" col-xs-9  col-sm-8  col-md-8 col-lg-8">
			<button ontouchstart="" id="confirm" class="doEnter btnDefault normal boxRadius btnBottom hide">CONFIRM</button>
		</div>
	</div>

	<div class="row select-team">
		<div class=" col-xs-9  col-sm-8  col-md-8 col-lg-8">
			<button type="button" id="next" ontouchstart="" class="goNext btnDefault normal boxRadius btnBottom hide">NEXT</button>
		</div>
	</div>
</div><!--end question One-->



<!-- Question 3 -->
<div id="quesThree">
	<div class="row banner-row">
		<div class="col-xs-10 col-sm-9 col-md-9 col-lg-8">
			<div class="gameBanner playQuestion">
				<div class="boxRadius qNumber" style="float: left;"><strong></strong></div><div class="qPlay"><strong>Does the ventilation/perfusion scan show a patient with CTEPH or one with PAH?</strong></div>
			</div>
		</div>
	</div>

	<div class="row select-team">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
			<div class="row option">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row headScan">
						<div class="col-xs-12 headStyle boxRadius"><p>Ventilation</p></div>
					</div>
					<div class="row">
						<div class="col-xs-12 imgStyle"><img style="height: 230px;" src="01_PAHVinverted.jpg"></div>
					</div>
				</div>
			</div>
			<div class="row option">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row headScan">
						<div class="col-xs-12 headStyle boxRadius"><p>Perfusion</p></div>
					</div>
					<div class="row">
						<div class="col-xs-12 imgStyle"><img style="height: 230px;" src="02_PAHQinverted.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row btnAnswers select-team">
		<div class=" col-xs-10  col-sm-5  col-md-7 col-lg-5">
			<div class="row">
				
					<div class="ansbtn">
						<button class="answer btnDefault boxRadius cteph" type="button" value="false">CTEPH</button>
					</div>

					<div class="ansbtn">
						<button class="answer btnDefault boxRadius pah" type="button" value="true">PAH</button>
					</div>
				
			</div>
		</div>
	</div>

	<div class="row correctAnswer hide" style="margin-top: 45px;">
		<div class=" col-xs-10  col-sm-10  col-md-10 col-lg-10" style="text-align: left;">
			<p class="true" style="font-size: 25px; font-weight: bold;">Correct answer: PAH</p>
		</div>
	</div>

	<div class="row select-team">
		<div class=" col-xs-9  col-sm-8  col-md-8 col-lg-8">
			<button ontouchstart="" class="doEnter btnDefault normal boxRadius btnBottom hide">CONFIRM</button>
		</div>
	</div>

	<div class="row select-team">
		<div class=" col-xs-9  col-sm-8  col-md-8 col-lg-8">
			<button type="button"  ontouchstart="" class="goNext btnDefault normal boxRadius btnBottom hide">NEXT</button>
		</div>
	</div>
</div><!--end question One-->


<!-- Question 4 -->
<div id="quesFour">
	<div class="row banner-row">
		<div class="col-xs-10 col-sm-9 col-md-9 col-lg-8">
			<div class="gameBanner playQuestion">
				<div class="boxRadius qNumber" style="float: left;"><strong></strong></div><div class="qPlay"><strong>Four Does the ventilation/perfusion scan show a patient with CTEPH or one with PAH?</strong></div>
			</div>
		</div>
	</div>

	<div class="row select-team">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
			<div class="row option">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row headScan">
						<div class="col-xs-12 headStyle boxRadius"><p>Ventilation</p></div>
					</div>
					<div class="row">
						<div class="col-xs-12 imgStyle"><img style="height: 230px;" src="01_PAHVinverted.jpg"></div>
					</div>
				</div>
			</div>
			<div class="row option">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row headScan">
						<div class="col-xs-12 headStyle boxRadius"><p>Perfusion</p></div>
					</div>
					<div class="row">
						<div class="col-xs-12 imgStyle"><img style="height: 230px;" src="02_PAHQinverted.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row btnAnswers select-team">
		<div class=" col-xs-10  col-sm-5  col-md-7 col-lg-5">
			<div class="row">
				
					<div class="ansbtn">
						<button class="answer btnDefault boxRadius cteph" type="button" value="false">CTEPH</button>
					</div>

					<div class="ansbtn">
						<button class="answer btnDefault boxRadius pah" type="button" value="true">PAH</button>
					</div>
				
			</div>
		</div>
	</div>

	<div class="row correctAnswer hide" style="margin-top: 45px;">
		<div class=" col-xs-10  col-sm-10  col-md-10 col-lg-10" style="text-align: left;">
			<p class="true" style="font-size: 25px; font-weight: bold;">Correct answer: PAH</p>
		</div>
	</div>

	<div class="row select-team">
		<div class=" col-xs-9  col-sm-8  col-md-8 col-lg-8">
			<button ontouchstart=""  class="doEnter btnDefault normal boxRadius btnBottom hide">CONFIRM</button>
		</div>
	</div>

	<div class="row select-team">
		<div class=" col-xs-9  col-sm-8  col-md-8 col-lg-8">
			<button type="button" ontouchstart="" class="goNext btnDefault normal boxRadius btnBottom hide">NEXT</button>
		</div>
	</div>
</div><!--end question One-->


<!-- RESULTS -->
<div id="results">
	<!-- <div id="logo" class="hidden-xs"><img src="img/logo.png" style="width: 84px; height: 84px;"/> </div> -->
	<div class="row banner-row">
		<div class="col-xs-10 col-sm-8 col-md-8 col-lg-8">
			<h1 class="headline"></h1>
			<div class="gameBanner endgame">
				<h1 class="headline-game"></h1>
			</div>
		</div>
	</div>

	<div class="row select-team">
		<div class=" col-xs-9  col-sm-8  col-md-8 col-lg-8">
			<button type="button" ontouchstart="" class="btnDefault normal boxRadius restart">RESTART</button>
		</div>
	</div>
</div>

</body>
</html>


<script type="text/javascript">
 	
 	var jScored = [
    {
        "id": "0",
        "head": "Better luck next time!",
        "sub": "Sorry, you didn't get any correct answers"
    },
    {
        "id": "1",
        "head": "Better luck next time!",
        "sub": "You scored 1 of 4"
    },
    {
        "id": "2",
        "head": "Good effort!",
        "sub": "You scored 2 of 4"
    },
    {
        "id": "3",
        "head": "Congratulations!",
        "sub": "You scored 3 of 4"
    },
    {
        "id": "4",
        "head": "Congratulations!",
        "sub": "You scored 4 of 4"
    }
];

var correctScore = 0;
var answer;

$( ".game-start-btn" ).click(function() {

	$('#initial-start').css('display','none');
    $('#select-team').css('display','block');
});

$( ".start-btn" ).click(function() {
	
    $('#select-team').css('display','none');
    $('#quesOne').css('display', 'block');
    // timer();
    $("#my-countdown").countdown(options);
});


// ----------------------------------------------
// Question One
// ----------------------------------------------
$( "#quesOne .answer" ).click(function() {

	answer = $(this).attr('value');	
    $('#quesOne .doEnter').removeClass('hide');
});

$( "#quesOne .doEnter" ).click(function() {
	
	if (answer == "true"){
		correctScore = correctScore + 1;
	}
	console.log(correctScore);
    $('#quesOne .doEnter').addClass('hide');
    $('#quesOne .btnAnswers').addClass('hide');
    $('#quesOne .correctAnswer').removeClass('hide');
    $('#quesOne .goNext').removeClass('hide');
    // timer();
});

$( "#quesOne .goNext" ).click(function() {

	$('#quesOne').css('display','none');
	$('#quesOne .doEnter').removeClass('hide');
    $('#quesOne .btnAnswers').removeClass('hide');
    $('#quesOne .correctAnswer').addClass('hide');
    $('#quesOne .goNext').addClass('hide');
    $('#quesOne .doEnter').addClass('hide');
	$('#quesTwo').css('display','block');
	timer();
});




// ----------------------------------------------
// Question Two
// ----------------------------------------------


$( "#quesTwo .answer" ).click(function() {
	
	answer = $(this).attr('value');
    $('#quesTwo .doEnter').removeClass('hide');
});

$( "#quesTwo .doEnter" ).click(function() {
	
	if (answer == "true"){
		correctScore = correctScore + 1;
	}
	console.log(correctScore);
    $('#quesTwo .doEnter').addClass('hide');
    $('#quesTwo .btnAnswers').addClass('hide');
    $('#quesTwo .correctAnswer').removeClass('hide');
    $('#quesTwo .goNext').removeClass('hide');
    // timer();
});

$( "#quesTwo .goNext" ).click(function() {

	$('#quesTwo').css('display','none');
	$('#quesTwo .doEnter').removeClass('hide');
    $('#quesTwo .btnAnswers').removeClass('hide');
    $('#quesTwo .correctAnswer').addClass('hide');
    $('#quesTwo .goNext').addClass('hide');
    $('#quesTwo .doEnter').addClass('hide');
	$('#quesThree').css('display','block');
	timer();
});


// ----------------------------------------------
// Question Three
// ----------------------------------------------

$( "#quesThree .answer" ).click(function() {
	
	answer = $(this).attr('value');
    $('#quesThree .doEnter').removeClass('hide');
});

$( "#quesThree .doEnter" ).click(function() {
	
	if (answer == "true"){
		correctScore = correctScore + 1;
	}
	console.log(correctScore);
    $('#quesThree .doEnter').addClass('hide');
    $('#quesThree .btnAnswers').addClass('hide');
    $('#quesThree .correctAnswer').removeClass('hide');
    $('#quesThree .goNext').removeClass('hide');
    // timer();
});

$( "#quesThree .goNext" ).click(function() {

	$('#quesThree').css('display','none');
	$('#quesThree .doEnter').removeClass('hide');
    $('#quesThree .btnAnswers').removeClass('hide');
    $('#quesThree .correctAnswer').addClass('hide');
    $('#quesThree .goNext').addClass('hide');
    $('#quesThree .doEnter').addClass('hide');
	$('#quesFour').css('display','block');
	timer();
});



// ----------------------------------------------
// Question Four
// ----------------------------------------------

$( "#quesFour .answer" ).click(function() {
	
	var answer = $(this).attr('value');
    $('#quesFour .doEnter').removeClass('hide');
});

$( "#quesFour .doEnter" ).click(function() {
	
	if (answer == "true"){
		correctScore = correctScore + 1;
	}
	console.log(correctScore);
    $('#quesFour .doEnter').addClass('hide');
    $('#quesFour .btnAnswers').addClass('hide');
    $('#quesFour .correctAnswer').removeClass('hide');
    $('#quesFour .goNext').removeClass('hide');
    // timer();
});

$( "#quesFour .goNext" ).click(function() {

	$('#quesFour').css('display','none');
	results(correctScore);

	$('#quesFour .doEnter').removeClass('hide');
    $('#quesFour .btnAnswers').removeClass('hide');
    $('#quesFour .correctAnswer').addClass('hide');
    $('#quesFour .goNext').addClass('hide');
    $('#quesFour .doEnter').addClass('hide');
	$('#results').css('display','block');
	// timer();
});

$( "#results .restart" ).click(function() {
	correctScore = 0;
	$('#results').css('display','none');
	$('#initial-start').css('display','block');
	console.log(correctScore);

});


function results(score) {

	$("#results .headline").html(jScored[score]['head']);
	$("#results .headline-game").html(jScored[score]['sub']);
               
}

var options = {
    autostart: true,
    m: 1,
    S: 30,
    // show a message after the countdown timer once the countdown has ended
    done: function() {
        $('#my-countdown').after("<p>Time's up!</p>");
    },
    // el and opts will refer to the element the countdown is running on and opts are the options assigned to it
    tpl: function(el,opts) {
        // use underscore to generate the markup to be displayed from the countdown-tpl template
        var template = _.template(
            $('#countdown-tpl').html()
        );
        // display the template
        $(el).html(template(opts));
    }
}


</script>