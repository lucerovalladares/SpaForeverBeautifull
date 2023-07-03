
          function login(){
            //alert('1');
            dni=$(d).val();
            contra=$(c).val();
        
              $.ajax({
              type: "POST",
                url: "php/login.php",
            data: 'dni='+dni+'&contra='+contra,
            //data: formData,
              success: function(data){
                  cont = data;
                  if(cont>0){
                    alert('Bienvenidooo');
                    window.location="php/layout.php";
                } else{
                    alert("Usuario no registrado o suspendido");
                }
                  }})}