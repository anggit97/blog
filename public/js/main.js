
$(document).ready(function() {
	var postBody = '';
	var postId	 = 0;
	$('.post').find('.interaction').find('.edit').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('#edit-modal').modal();
		postId   = event.target.parentNode.parentNode.dataset['postid'];
		postBody = event.target.parentNode.parentNode.childNodes[3].textContent;
		$('#post-body').val(postBody);
	});

	$('#modal-save').on('click', function(event) {
		event.preventDefault();
		$.ajax({
			method:'POST',
			url: url,
			data: {body: $('#post-body').val(),postId:postId,_token:token}
		})
		.done(function(msg) {
			$('div[data-postid="'+msg['id']+'"]').find('p').text(msg['new_body']);
			//data('postid', msg['id']).find('p').text(msg['new_body']);
			$('#edit-modal').modal('hide');
		});
		
	});
});
