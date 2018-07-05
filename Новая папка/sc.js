$(document).ready(function() {
		setInterval(function(){
			$.ajax({
				url: 'planet.php',
				type: 'POST',
				data: {
					action: 'Ok'
				},
				success:function(a){
					var x = JSON.parse(a);
					$('#solar').css({
						top: x.x0+'px',
						left: x.y0+'px'
					});
					
					$('#mercury').css({
						top: x.x1+'px',
						left: x.y1+'px'
					});
					$('#venus').css({
						top: x.x2+'px',
						left: x.y2+'px'
					});
					$('#earth').css({
						top: x.x3+'px',
						left: x.y3+'px'
					});
					$('#marc').css({
						top: x.x4+'px',
						left: x.y4+'px'
					});
					$('#jupiter').css({
						top: x.x5+'px',
						left: x.y5+'px'
					});
					$('#saturn').css({
						top: x.x6+'px',
						left: x.y6+'px'
					});
					$('#stanal').html(x);
				}
			})	
		}, 200)
});