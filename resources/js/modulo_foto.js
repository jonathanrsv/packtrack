
window.loadCamera = function () {
	//Captura elemento de vídeo
	var video = document.querySelector("#webCamera");
	//As opções abaixo são necessárias para o funcionamento correto no iOS
	video.setAttribute('autoplay', '');
	video.setAttribute('muted', '');
	video.setAttribute('playsinline', '');
	//--

	//Verifica se o navegador pode capturar mídia

	if (navigator.mediaDevices.getUserMedia) {
		navigator.mediaDevices.getUserMedia({
			audio: false,
			video: {
				width: { min: 1024, ideal: 1280, max: 1920 },
				height: { min: 576, ideal: 720, max: 1080 },
				facingMode: 'environment'
			}
		})
			.then(function (stream) {
				//Definir o elemento vídeo a carregar o capturado pela webcam
				video.srcObject = stream;
			})
			.catch(function (error) {
				alert("Oooopps... Falhou :'(");
			});
	}
}


window.takeSnapShotAgain = function () {
	var video = document.querySelector("#webCamera");
	var final_image = document.getElementById("imagemConvertida")
	final_image.src = ''
	final_image.style.display = 'none'
	video.style.display = ''
}

window.takeSnapShot = function () {
	//Captura elemento de vídeo
	var video = document.querySelector("#webCamera");

	//Criando um canvas que vai guardar a imagem temporariamente
	var canvas = document.createElement('canvas');
	canvas.width = video.videoWidth;
	canvas.height = video.videoHeight;
	var ctx = canvas.getContext('2d');

	//Desenhando e convertendo as dimensões
	ctx.drawImage(video, 0, 0, canvas.width, canvas.height);

	//Criando o JPG
	var dataURI = canvas.toDataURL('image/jpeg'); //O resultado é um BASE64 de uma imagem.
	document.querySelector("#base_img").value = dataURI;


	console.log(dataURI); //Gerar Imagem e Salvar Caminho no Banco
	video.style.display = 'none'

	var final_image = document.getElementById("imagemConvertida")
	final_image.style.display = ''
	final_image.src = dataURI

}

$('#modalCamera').on('shown.bs.modal', function () {
	window.loadCamera();
})