<html>
    <head>
        <title>Resultados </title>
        <style>
            body{
			    background-image: url("imagenes/background4.jpg");	
		    }
		    div.intro{
			    padding-right: 30px;
			    padding-top: 50px;
			    padding-left: 60px;
			    padding-bottom: 50px;
			    background-color: rgba(255, 255, 255, .8);
			    width: 80%;
			    margin: 6%;
		    }
        </style>
    </head>

    <body>
        <div align = "center" class="intro">
            <h2> Respuestas enviadas </h2>
            <p> ¿Sabes o has escuchado del termino Cloud Computing (Computo en la nube)? R: <?php echo $_POST['pre1']; ?> </p>
            <p> ¿Cree usted que es importante que la FIME enseñe sobre Cloud Computing? R: <?php echo $_POST['pre2']; ?> </p>
            <p> ¿Conoce cuales son los servicios que se ofrecen en Cloud Computing? R: <?php echo $_POST['pre3']; ?> </p>
            <p> ¿Cuál de los servicios de Cloud Computing que usted conoce, cree que se pueda ofrecer o aplicar en FIME? R: <?php echo $_POST['pre4']; ?> </p>
            <p> ¿Cuales serian los principales beneficios de Cloud Computing en su carrera? R: <?php echo $_POST['pre5']; ?> </p>
            <p> ¿Cuales servicios de Cloud Computing utilizas en tu vida diaria? R: <?php echo $_POST['pre6']; ?> </p>
            <p> ¿Crees que podrias tener una vida igual sin los servicios de Cloud Computing? R: <?php echo $_POST['pre7']; ?> </p>
            <p> ¿Por que no deberia suicidarme? R: <?php echo $_POST['pre8']; ?> </p>
	    </div>
    </body>
</html>