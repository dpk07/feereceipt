$(document).ready(function(){
	$(".login").click(function(){
		$(".loginbox").hide();
		$(".signupbox").show();
	});
	$(".signup").click(function(){
		$(".loginbox").show();
		$(".signupbox").hide();
	});
});