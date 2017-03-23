$(document).ready(function()
{
	$(".btn-suivant-create").click(function(){
		$(".create-part1").css({
			"display" : "none",
		})
		$(".create-part2").css({
			"display" : "flex",
		})
	})
	$(".btn-suivant-create2").click(function(){
		$(".create-part2").css({
			"display" : "none",
		})
		$(".create-part3").css({
			"display" : "flex",
		})
	})
})