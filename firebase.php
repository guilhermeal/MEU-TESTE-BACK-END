<script src="https://www.gstatic.com/firebasejs/4.6.2/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCR8XD4Sj6tDLc2d5506L2C7OdR_vW5scY",
    authDomain: "teste-log.firebaseapp.com",
    databaseURL: "https://teste-log.firebaseio.com",
    projectId: "teste-log",
    storageBucket: "teste-log.appspot.com",
    messagingSenderId: "483865783070"
  };

  var defaultApp = firebase.initializeApp(config);

	function writeUserData(userId, name, email, imageUrl) {
	  firebase.database().ref('users/' + userId).set({
		username: name,
		email: email,
		profile_picture : imageUrl
	  });
	}

	function escreverLogDb(logId, produto, cliente, dataHora, categoria, operacao) {
	  firebase.database().ref('logs/' + logId).set({
		produto: produto,
		cliente: cliente,
		datahora: dataHora,
		categoria: categoria,
		operacao: operacao
	  });
	}

	function retornarLogs() {

		var array="";

		var ref = firebase.database().ref("logs");
		ref.orderByKey().on("child_added", function(snapshot) {

			var id 			= snapshot.key;
			var produto 	= snapshot.val().produto;
			var cliente 	= snapshot.val().cliente;
			var datahora 	= snapshot.val().datahora;
			var categoria 	= snapshot.val().categoria;
			var operacao 	= snapshot.val().operacao;

			array = id + ":[" +
							"{'produto':'" + produto + "'," +
							"'cliente':'" + cliente + "'," +
							"'datahora':'" + datahora + "'," +
							"'categoria':'" + categoria + "'," +
							"'operacao':'" + operacao + "'}" +
						"];";

			var tr = document.createElement("tr");
			var td = document.createElement("td");
			var textnode = document.createTextNode(array);
			td.appendChild(textnode);
			tr.appendChild(td);
			var tr_id2 = document.getElementById("id_2");
			tr_id2.parentNode.insertBefore(tr, tr_id2);
		});

	}



</script>
