
      		var quebrada = false;
		function mudaLampada(tipo){
			if (!quebrada) {
			document.getElementById("luz").src = "img/" + tipo +".jpg";
			if (tipo == 'lampada-quebrada') {
				quebrada = true;
					}
				}
			}
      			
			var desmarcada = false;
		function desmarcaFilial(tipo1){
			document.getElementById("filialporusuario").src = "img/" + tipo1 +".jpg";
			
				}
			
      	