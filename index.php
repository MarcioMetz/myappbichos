<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="crud, cadastro, php, mysql, crud php mysql">
    <meta name="description" content="administre os seus clientes, banco de dados completo em www.montepage.com.br">
    <title> Cadastro de Animais</title>
    <link rel="stylesheet" type="text/css" href="css/easyui.css">
    <link rel="stylesheet" type="text/css" href="css/icon.css">
    <link rel="stylesheet" type="text/css" href="css/demo.css">
    <style type="text/css">
        #fm{
            margin:0;
            padding:10px 30px;
        }
        .ftitle{
            font-size:24px;
            font-weight:bold;
            color:#666;
            padding:5px 0;
            margin-bottom:10px;
            border-bottom:1px solid #ccc;
        }
        .fitem{
            margin-bottom:5px;
        }
        .fitem label{
            display:inline-block;
            width:80px;
        }
    </style>
    <script type="text/javascript" src="js/jquery-1.6.min.js"></script>
    <script type="text/javascript" src="js/jquery.easyui.min.js"></script>
    <script type="text/javascript">
        var url;
        function newUser(){
            $('#dlg').dialog('open').dialog('setTitle','Novo Cadastro');
            $('#fm').form('clear');
            url = 'salvar_cadastro.php';
        }
        function editUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg').dialog('open').dialog('setTitle','Editar Cadastro');
                $('#fm').form('load',row);
                url = 'atualiza_cadastro.php?id='+row.id;
            }
        }
        function saveUser(){
            $('#fm').form('submit',{
                url: url,
                    onSubmit: function(){
                    return $(this).form('validate');
                },
                success: function(result){
                    var result = eval('('+result+')');
                    if (result.success){
                        $('#dlg').dialog('close');        // close the dialog
                        $('#dg').datagrid('reload');    // reload the user data
                    } else {
                        $.messager.show({
                            title: 'Erro',
                            msg: result.msg
                        });
                    }
                }
            });
        }
        function removeUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $.messager.confirm('Confirma','Tem certeza que deseja remover o Cadastro?',function(r){
                    if (r){
                        $.post('remover_cadastro.php',{id:row.id},function(result){
                            if (result.success){
                                $('#dg').datagrid('reload');    // reload the user data
                            } else {
                                $.messager.show({    // show error message
                                    title: 'Error',
                                    msg: result.msg
                                });
                            }
                        },'json');
                    }
                });
            }
        }
    </script>
</head>
<body>
   <center><h2>ONG S.O.S BICHO</h2></center>
    <div class="demo-info" style="margin-bottom:20px">
        <center><div class="demo-tip icon-tip">&nbsp;</div></center>
        <center><div>Clique na opção desejada na barra de ferramentas.</div></center></br>
    </div>
    
    <center><table id="dg" title="Cadastro de Animais" class="easyui-datagrid" style="width:900px;height:350px"
            url="pegar_cadastro.php"
            toolbar="#toolbar" pagination="true"
            rownumbers="true" fitColumns="true" singleSelect="true"></center>
        <thead>
            <tr>
                <th field="nome" width="70">Nome</th>
                <th field="porte" width="70">Porte</th>
                <th field="especie" width="70">Especie</th>
                <th field="raca" width="70">Raca</th>
				 <th field="idade" width="70">Idade</th>
				  <th field="fotos" width="70">Fotos</th>
            </tr>
        </thead>
    </table>
    <div id="toolbar">
        <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()" title="Adicionar Cliente">Novo Cadastro</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()" title="Alterar Dados do Cliente">Editar Cadastro</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="removeUser()" title="Remover Dados do Cliente">Remover Cadastro</a>
    </div>
    
    <div id="dlg" class="easyui-dialog" style="width:500px;height:320px;padding:20px 30px"
            closed="true" buttons="#dlg-buttons">
        <div class="ftitle">Cadastro dos Animais</div>
        <form id="fm" method="post" novalidate>
            <div class="fitem">
                <label>Nome:</label>
                <input name="nome" class="easyui-validatebox" required="true">
            </div>
            <div class="fitem">
                <label>Porte:</label>
                <input name="porte" class="easyui-validatebox" required="true">
            </div>
            <div class="fitem">
                <label>Espécie:</label>
                <input name="especie"class="easyui-validatebox" required="true">
            </div>
            <div class="fitem">
                <label>Raca:</label>
                <input name="raca" class="easyui-validatebox" required="true">
            </div>
			<div class="fitem">
                <label>Idade:</label>
                <input name="idade" class="easyui-validatebox" required="true">
            </div>
			<div class="fitem">
                <label>Fotos:</label>
                <input name="fotos" class="easyui-validatebox" required="true">
		    </div>
        </form>
    </div>			
	
	
    <div id="dlg-buttons">
        <a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveUser()">Salvar</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancelar</a>
    </div>
	
	 		</br><a href='Logout.php'>Sair</a>
</body>
</html>