$('input#name-submit').on('click',function(){
	var name = $('input#name').val();
	if($.trim(name)!='')
	{
		
		$.post('one.php',{name:name},function(data){
			$('div#rishanth').html(data);
		});
	/*$.post('one.php',{name:name},function(data){
		$('div#rishanth').text(data);
	});*/
	}
});
