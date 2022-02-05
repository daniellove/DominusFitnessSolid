$(window).on('resize', function() {
	$('video[frameWidth][frameHeight]').each(function() {
		var id = $(this).attr('id')
		setDims(id)
	})
})

function setDims(id) {
	var dimHeight = window.innerHeight
	var dimWidth = window.innerWidth
	var frameWidth = $('#'+id).attr('frameWidth')
	var frameHeight = $('#'+id).attr('frameHeight')
	var minHeight = dimWidth/frameWidth*frameHeight

	console.log(minHeight, dimHeight)
	if (minHeight < dimHeight) {
		$('#'+id).addClass('dimFlip')
	} else {
		$('#'+id).removeClass('dimFlip')
	}
}