$(window).on('resize', function() {
	$('video[frameWidth][frameHeight]').each(function() {
		var id = $(this).attr('id')
		setDims(id)
	})
})

function setDims(id) {
	var dims = getDims()
	var dimHeight = dims['vh']
	var dimWidth = dims['vw']
	var frameWidth = $('#'+id).attr('frameWidth')
	var frameHeight = $('#'+id).attr('frameHeight')
	var minHeight = dimWidth/frameWidth*frameHeight
	if (minHeight < dimHeight) {
		$('#'+id).addClass('dimFlip')
	} else {
		$('#'+id).removeClass('dimFlip')
	}
}

function getDims() {
	var vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0)
	var vh = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0)
	return {vw:vw, vh:vh}
}