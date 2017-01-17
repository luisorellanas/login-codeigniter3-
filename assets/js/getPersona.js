

//aqui se llena la tabla
// $('#btnGetPersonas').click(function(){
	$('#tblPersonas tbody').html('');
	$.post(base_url+"mlogin/getUser2",
		function(data){
			//alert(data);
			var p = JSON.parse(data);
			$.each(p, function(i, item){
				$('#tblPersonas tbody').append(
					'<tr>'+
					  '	<td>1</td>'+
					  '	<td>'+item.nombre+'</td>'+
					  '	<td>'+item.app+'</td>'+
					  '	<td>'+item.apmaterno+'</td>'+
					  '	<td>'+item.dni+'</td>'+
					  '	<td>'+item.ciudad+'</td>'+
					  '	<td><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 80%;" data-toggle="modal" data-target="#modalEditPersona" onClick="selPersona(\''+item.idPersona+'\',\''+item.nombre+'\',\''+item.app+'\',\''+item.apmaterno+'\',\''+item.email+'\');"><i class="fa fa-fw fa-edit"></i></a></td>'+
					  '</tr>'
					);
			});
		});
// });

//con esta funcion pasamos los paremtros a los text del modal.
selPersona = function(idPersona, nombre, app, apm, email){
	$('#mhdnIdPersona').val(idPersona);
	$('#mtxtNombre').val(nombre);
	$('#mtxtApPaterno').val(app);

};

//metodo update del modal
$('#mbtnUpdPerona').click(function(){
	var idP = $('#mhdnIdPersona').val();
	var nom = $('#mtxtNombre').val();
	var app = $('#mtxtApPaterno').val();
	var apm = $('#mtxtApMaterno').val();
	var mail = $('#mtxtEmail').val();
	$.post(baseurl+"cpersona/updPersona",	
	{
		mhdnIdPersona:idP,
		mtxtNombre:nom,
		mtxtApPaterno:app,
		mtxtApMaterno:apm,
		mtxtEmail:mail
	},			
	function(data){
		if (data == 1) {
			$('#mbtnCerrarModal').click();

			location.reload();
		}
	});
});