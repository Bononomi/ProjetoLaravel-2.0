
        function eliminarCategoria(idForm, destino) {
            
            confirma = confirm("Deseja eliminar a categoria");

if(confirma)
{
            
            dadosForm = $('#'+idForm).serialize();
            
            $.ajax({
                
            method: 'post',
            url: destino,
            data: dadosForm,
            dataType: 'html',
            success: function (data) {
                //Ação de sucesso
                if (data == 'true') {
                    $('#linha'+idForm).remove();
                } else {
                    alert('Não foi possível eliminar a categoria!');
                }
            },
            error: function (argument) {
                alert('Erro ao eliminar categoria!');
            }
            
            });
            
        }
            
            return false;
        }
        //JS guarda estados das variaveis
        var situacao = false;
        
               
        function mostrarEsconderTitulo(){
                $('#titulo').slideToggle(1000); 
           
        }
        
        function adicionarCategoria(destino){
            
            dadosForm = $('#formAdd').serialize();
            nomcat = $('#nomcat').val();
            if (nomcat.trim() !="") {          
            $.ajax({
                
            method: 'post',
            url: destino,
            data: dadosForm,
            dataType: 'html',
            success: function (data) {
                //Ação de sucesso
                if (data == 'true') {
                   alert('Categoria adicionada com sucesso!');
                   
                   $('#nomcat').val('');
                   $('#nomcat').focus();
                   
                } else {
                    alert('Falha ao adicionar categoria!');
                }
            },
            error: function (argument) {
                alert('Erro ao eliminar categoria!');
            }
            
            });
            
        }else{
            alert("Preencha todos os campos");
        }
            
            return false;
        }
        


