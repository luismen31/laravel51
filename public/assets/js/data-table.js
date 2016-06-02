$(function(){

	$("#table_users").bootstrapTable({
		url: url_base + '/buscar/usuarios',
		height: 300,
		search: true,
		sidePagination: 'server',
		pagination: true,					
	});
});