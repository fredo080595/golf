<?php 
 class correo{

 	public function enviarCorreo($datosCorreo){



        $destinatario = "contacto@golfcarsmexico.com.mx"; 
        $asunto = $datosCorreo[2]; 
        $cuerpo = ' 
        <html> 
        <head> 
           <title>Nuevo contacto</title> 
        </head> 
        <body> 
        <h1>'.$datosCorreo[2].'</h1> 
        <p> 
        <b>
        El cliente: '.$datosCorreo[0].'
        <br>
        <p>
        '.$datosCorreo[4].'
        </p>
        <br>
        <p>
        Para contactar al cliente comuniquese al '.$datosCorreo[3].',
        o al correo '.$datosCorreo[1].'
        </p>
        <br>
        </p> 
        </body> 
        </html> 
        '; 

        //para el envío en formato HTML 
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; 

        //dirección del remitente 
        $headers .= "From: golfcarsmexico <contacto@golfcarsmexico.com.mx>\r\n"; 

        //dirección de respuesta, si queremos que sea distinta que la del remitente 
        $headers .= "Reply-To: contacto@golfcarsmexico.com.mx\r\n"; 

        //ruta del mensaje desde origen a destino 
        $headers .= "Return-path: '.$datosCorreo[1].'\r\n"; 

        //direcciones que recibián copia 
        $headers .= "Cc: contacto@golfcarsmexico.com.mx\r\n"; 

        //direcciones que recibirán copia oculta 
        $headers .= "Bcc: contacto@golfcarsmexico.com.mx\r\n"; 

        mail($destinatario,$asunto,$cuerpo,$headers); 
        
        $resultado = "correo enviado";
        echo '<script>alert("' . $resultado . '");
        window.location.href="../index.php#test6"</script>';
            
        }

 		
 	}
 

 ?>