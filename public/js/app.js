/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("//require('./bootstrap');\n__webpack_require__(/*! ./modulo_foto */ \"./resources/js/modulo_foto.js\");\n\n$(document).on(\"click\", \".browse\", function () {\n  var file = $(this).parents().find(\".file\");\n  file.trigger(\"click\");\n});\n$('input[type=\"file\"]').change(function (e) {\n  var fileName = e.target.files[0].name;\n  $(\"#file\").val(fileName);\n  var reader = new FileReader();\n\n  reader.onload = function (e) {\n    // get loaded data and render thumbnail.\n    document.getElementById(\"preview\").src = e.target.result;\n  }; // read the image file as a data URL.\n\n\n  reader.readAsDataURL(this.files[0]);\n});\n\n(function ($) {\n  \"use strict\"; // Add active state to sidbar nav links\n\n  var path = window.location.href; // because the 'href' property of the DOM element is the absolute path\n\n  $(\"#layoutSidenav_nav .sb-sidenav a.nav-link\").each(function () {\n    if (this.href === path) {\n      $(this).addClass(\"active\");\n    }\n  }); // Toggle the side navigation\n\n  $(\"#sidebarToggle\").on(\"click\", function (e) {\n    e.preventDefault();\n    $(\"body\").toggleClass(\"sb-sidenav-toggled\");\n  });\n})(jQuery);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYXBwLmpzPzZkNDAiXSwibmFtZXMiOlsicmVxdWlyZSIsIiQiLCJkb2N1bWVudCIsIm9uIiwiZmlsZSIsInBhcmVudHMiLCJmaW5kIiwidHJpZ2dlciIsImNoYW5nZSIsImUiLCJmaWxlTmFtZSIsInRhcmdldCIsImZpbGVzIiwibmFtZSIsInZhbCIsInJlYWRlciIsIkZpbGVSZWFkZXIiLCJvbmxvYWQiLCJnZXRFbGVtZW50QnlJZCIsInNyYyIsInJlc3VsdCIsInJlYWRBc0RhdGFVUkwiLCJwYXRoIiwid2luZG93IiwibG9jYXRpb24iLCJocmVmIiwiZWFjaCIsImFkZENsYXNzIiwicHJldmVudERlZmF1bHQiLCJ0b2dnbGVDbGFzcyIsImpRdWVyeSJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQUEsbUJBQU8sQ0FBQyxvREFBRCxDQUFQOztBQUVBQyxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxFQUFaLENBQWUsT0FBZixFQUF3QixTQUF4QixFQUFtQyxZQUFZO0FBQzdDLE1BQUlDLElBQUksR0FBR0gsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRSSxPQUFSLEdBQWtCQyxJQUFsQixDQUF1QixPQUF2QixDQUFYO0FBQ0FGLE1BQUksQ0FBQ0csT0FBTCxDQUFhLE9BQWI7QUFDRCxDQUhEO0FBSUFOLENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCTyxNQUF4QixDQUErQixVQUFVQyxDQUFWLEVBQWE7QUFDMUMsTUFBSUMsUUFBUSxHQUFHRCxDQUFDLENBQUNFLE1BQUYsQ0FBU0MsS0FBVCxDQUFlLENBQWYsRUFBa0JDLElBQWpDO0FBQ0FaLEdBQUMsQ0FBQyxPQUFELENBQUQsQ0FBV2EsR0FBWCxDQUFlSixRQUFmO0FBRUEsTUFBSUssTUFBTSxHQUFHLElBQUlDLFVBQUosRUFBYjs7QUFDQUQsUUFBTSxDQUFDRSxNQUFQLEdBQWdCLFVBQVVSLENBQVYsRUFBYTtBQUMzQjtBQUNBUCxZQUFRLENBQUNnQixjQUFULENBQXdCLFNBQXhCLEVBQW1DQyxHQUFuQyxHQUF5Q1YsQ0FBQyxDQUFDRSxNQUFGLENBQVNTLE1BQWxEO0FBQ0QsR0FIRCxDQUwwQyxDQVMxQzs7O0FBQ0FMLFFBQU0sQ0FBQ00sYUFBUCxDQUFxQixLQUFLVCxLQUFMLENBQVcsQ0FBWCxDQUFyQjtBQUNELENBWEQ7O0FBZ0JBLENBQUMsVUFBVVgsQ0FBVixFQUFhO0FBQ1osZUFEWSxDQUdaOztBQUNBLE1BQUlxQixJQUFJLEdBQUdDLE1BQU0sQ0FBQ0MsUUFBUCxDQUFnQkMsSUFBM0IsQ0FKWSxDQUlxQjs7QUFDakN4QixHQUFDLENBQUMsMkNBQUQsQ0FBRCxDQUErQ3lCLElBQS9DLENBQW9ELFlBQVk7QUFDOUQsUUFBSSxLQUFLRCxJQUFMLEtBQWNILElBQWxCLEVBQXdCO0FBQ3RCckIsT0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRMEIsUUFBUixDQUFpQixRQUFqQjtBQUNEO0FBQ0YsR0FKRCxFQUxZLENBV1o7O0FBQ0ExQixHQUFDLENBQUMsZ0JBQUQsQ0FBRCxDQUFvQkUsRUFBcEIsQ0FBdUIsT0FBdkIsRUFBZ0MsVUFBVU0sQ0FBVixFQUFhO0FBQzNDQSxLQUFDLENBQUNtQixjQUFGO0FBQ0EzQixLQUFDLENBQUMsTUFBRCxDQUFELENBQVU0QixXQUFWLENBQXNCLG9CQUF0QjtBQUNELEdBSEQ7QUFJRCxDQWhCRCxFQWdCR0MsTUFoQkgiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYXBwLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLy9yZXF1aXJlKCcuL2Jvb3RzdHJhcCcpO1xucmVxdWlyZSgnLi9tb2R1bG9fZm90bycpO1xuXG4kKGRvY3VtZW50KS5vbihcImNsaWNrXCIsIFwiLmJyb3dzZVwiLCBmdW5jdGlvbiAoKSB7XG4gIHZhciBmaWxlID0gJCh0aGlzKS5wYXJlbnRzKCkuZmluZChcIi5maWxlXCIpO1xuICBmaWxlLnRyaWdnZXIoXCJjbGlja1wiKTtcbn0pO1xuJCgnaW5wdXRbdHlwZT1cImZpbGVcIl0nKS5jaGFuZ2UoZnVuY3Rpb24gKGUpIHtcbiAgdmFyIGZpbGVOYW1lID0gZS50YXJnZXQuZmlsZXNbMF0ubmFtZTtcbiAgJChcIiNmaWxlXCIpLnZhbChmaWxlTmFtZSk7XG5cbiAgdmFyIHJlYWRlciA9IG5ldyBGaWxlUmVhZGVyKCk7XG4gIHJlYWRlci5vbmxvYWQgPSBmdW5jdGlvbiAoZSkge1xuICAgIC8vIGdldCBsb2FkZWQgZGF0YSBhbmQgcmVuZGVyIHRodW1ibmFpbC5cbiAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInByZXZpZXdcIikuc3JjID0gZS50YXJnZXQucmVzdWx0O1xuICB9O1xuICAvLyByZWFkIHRoZSBpbWFnZSBmaWxlIGFzIGEgZGF0YSBVUkwuXG4gIHJlYWRlci5yZWFkQXNEYXRhVVJMKHRoaXMuZmlsZXNbMF0pO1xufSk7XG5cblxuXG5cbihmdW5jdGlvbiAoJCkge1xuICBcInVzZSBzdHJpY3RcIjtcblxuICAvLyBBZGQgYWN0aXZlIHN0YXRlIHRvIHNpZGJhciBuYXYgbGlua3NcbiAgdmFyIHBhdGggPSB3aW5kb3cubG9jYXRpb24uaHJlZjsgLy8gYmVjYXVzZSB0aGUgJ2hyZWYnIHByb3BlcnR5IG9mIHRoZSBET00gZWxlbWVudCBpcyB0aGUgYWJzb2x1dGUgcGF0aFxuICAkKFwiI2xheW91dFNpZGVuYXZfbmF2IC5zYi1zaWRlbmF2IGEubmF2LWxpbmtcIikuZWFjaChmdW5jdGlvbiAoKSB7XG4gICAgaWYgKHRoaXMuaHJlZiA9PT0gcGF0aCkge1xuICAgICAgJCh0aGlzKS5hZGRDbGFzcyhcImFjdGl2ZVwiKTtcbiAgICB9XG4gIH0pO1xuXG4gIC8vIFRvZ2dsZSB0aGUgc2lkZSBuYXZpZ2F0aW9uXG4gICQoXCIjc2lkZWJhclRvZ2dsZVwiKS5vbihcImNsaWNrXCIsIGZ1bmN0aW9uIChlKSB7XG4gICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICQoXCJib2R5XCIpLnRvZ2dsZUNsYXNzKFwic2Itc2lkZW5hdi10b2dnbGVkXCIpO1xuICB9KTtcbn0pKGpRdWVyeSk7XG5cblxuXG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

/***/ }),

/***/ "./resources/js/modulo_foto.js":
/*!*************************************!*\
  !*** ./resources/js/modulo_foto.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("window.loadCamera = function () {\n  //Captura elemento de vídeo\n  var video = document.querySelector(\"#webCamera\"); //As opções abaixo são necessárias para o funcionamento correto no iOS\n\n  video.setAttribute('autoplay', '');\n  video.setAttribute('muted', '');\n  video.setAttribute('playsinline', ''); //--\n  //Verifica se o navegador pode capturar mídia\n\n  if (navigator.mediaDevices.getUserMedia) {\n    navigator.mediaDevices.getUserMedia({\n      audio: false,\n      video: {\n        width: {\n          min: 1024,\n          ideal: 1280,\n          max: 1920\n        },\n        height: {\n          min: 576,\n          ideal: 720,\n          max: 1080\n        },\n        facingMode: 'environment'\n      }\n    }).then(function (stream) {\n      //Definir o elemento vídeo a carregar o capturado pela webcam\n      video.srcObject = stream;\n    })[\"catch\"](function (error) {\n      alert(\"Oooopps... Falhou :'(\");\n    });\n  }\n};\n\nwindow.takeSnapShotAgain = function () {\n  var video = document.querySelector(\"#webCamera\");\n  var final_image = document.getElementById(\"imagemConvertida\");\n  final_image.src = '';\n  final_image.style.display = 'none';\n  video.style.display = '';\n};\n\nwindow.takeSnapShot = function () {\n  //Captura elemento de vídeo\n  var video = document.querySelector(\"#webCamera\"); //Criando um canvas que vai guardar a imagem temporariamente\n\n  var canvas = document.createElement('canvas');\n  canvas.width = video.videoWidth;\n  canvas.height = video.videoHeight;\n  var ctx = canvas.getContext('2d'); //Desenhando e convertendo as dimensões\n\n  ctx.drawImage(video, 0, 0, canvas.width, canvas.height); //Criando o JPG\n\n  var dataURI = canvas.toDataURL('image/jpeg'); //O resultado é um BASE64 de uma imagem.\n\n  document.querySelector(\"#base_img\").value = dataURI;\n  console.log(dataURI); //Gerar Imagem e Salvar Caminho no Banco\n\n  video.style.display = 'none';\n  var final_image = document.getElementById(\"imagemConvertida\");\n  final_image.style.display = '';\n  final_image.src = dataURI;\n};\n\n$('#modalCamera').on('shown.bs.modal', function () {\n  window.loadCamera();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbW9kdWxvX2ZvdG8uanM/NmUwNCJdLCJuYW1lcyI6WyJ3aW5kb3ciLCJsb2FkQ2FtZXJhIiwidmlkZW8iLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJzZXRBdHRyaWJ1dGUiLCJuYXZpZ2F0b3IiLCJtZWRpYURldmljZXMiLCJnZXRVc2VyTWVkaWEiLCJhdWRpbyIsIndpZHRoIiwibWluIiwiaWRlYWwiLCJtYXgiLCJoZWlnaHQiLCJmYWNpbmdNb2RlIiwidGhlbiIsInN0cmVhbSIsInNyY09iamVjdCIsImVycm9yIiwiYWxlcnQiLCJ0YWtlU25hcFNob3RBZ2FpbiIsImZpbmFsX2ltYWdlIiwiZ2V0RWxlbWVudEJ5SWQiLCJzcmMiLCJzdHlsZSIsImRpc3BsYXkiLCJ0YWtlU25hcFNob3QiLCJjYW52YXMiLCJjcmVhdGVFbGVtZW50IiwidmlkZW9XaWR0aCIsInZpZGVvSGVpZ2h0IiwiY3R4IiwiZ2V0Q29udGV4dCIsImRyYXdJbWFnZSIsImRhdGFVUkkiLCJ0b0RhdGFVUkwiLCJ2YWx1ZSIsImNvbnNvbGUiLCJsb2ciLCIkIiwib24iXSwibWFwcGluZ3MiOiJBQUNBQSxNQUFNLENBQUNDLFVBQVAsR0FBb0IsWUFBWTtBQUMvQjtBQUNBLE1BQUlDLEtBQUssR0FBR0MsUUFBUSxDQUFDQyxhQUFULENBQXVCLFlBQXZCLENBQVosQ0FGK0IsQ0FHL0I7O0FBQ0FGLE9BQUssQ0FBQ0csWUFBTixDQUFtQixVQUFuQixFQUErQixFQUEvQjtBQUNBSCxPQUFLLENBQUNHLFlBQU4sQ0FBbUIsT0FBbkIsRUFBNEIsRUFBNUI7QUFDQUgsT0FBSyxDQUFDRyxZQUFOLENBQW1CLGFBQW5CLEVBQWtDLEVBQWxDLEVBTitCLENBTy9CO0FBRUE7O0FBRUEsTUFBSUMsU0FBUyxDQUFDQyxZQUFWLENBQXVCQyxZQUEzQixFQUF5QztBQUN4Q0YsYUFBUyxDQUFDQyxZQUFWLENBQXVCQyxZQUF2QixDQUFvQztBQUNuQ0MsV0FBSyxFQUFFLEtBRDRCO0FBRW5DUCxXQUFLLEVBQUU7QUFDTlEsYUFBSyxFQUFFO0FBQUVDLGFBQUcsRUFBRSxJQUFQO0FBQWFDLGVBQUssRUFBRSxJQUFwQjtBQUEwQkMsYUFBRyxFQUFFO0FBQS9CLFNBREQ7QUFFTkMsY0FBTSxFQUFFO0FBQUVILGFBQUcsRUFBRSxHQUFQO0FBQVlDLGVBQUssRUFBRSxHQUFuQjtBQUF3QkMsYUFBRyxFQUFFO0FBQTdCLFNBRkY7QUFHTkUsa0JBQVUsRUFBRTtBQUhOO0FBRjRCLEtBQXBDLEVBUUVDLElBUkYsQ0FRTyxVQUFVQyxNQUFWLEVBQWtCO0FBQ3ZCO0FBQ0FmLFdBQUssQ0FBQ2dCLFNBQU4sR0FBa0JELE1BQWxCO0FBQ0EsS0FYRixXQVlRLFVBQVVFLEtBQVYsRUFBaUI7QUFDdkJDLFdBQUssQ0FBQyx1QkFBRCxDQUFMO0FBQ0EsS0FkRjtBQWVBO0FBQ0QsQ0E1QkQ7O0FBK0JBcEIsTUFBTSxDQUFDcUIsaUJBQVAsR0FBMkIsWUFBWTtBQUN0QyxNQUFJbkIsS0FBSyxHQUFHQyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsWUFBdkIsQ0FBWjtBQUNBLE1BQUlrQixXQUFXLEdBQUduQixRQUFRLENBQUNvQixjQUFULENBQXdCLGtCQUF4QixDQUFsQjtBQUNBRCxhQUFXLENBQUNFLEdBQVosR0FBa0IsRUFBbEI7QUFDQUYsYUFBVyxDQUFDRyxLQUFaLENBQWtCQyxPQUFsQixHQUE0QixNQUE1QjtBQUNBeEIsT0FBSyxDQUFDdUIsS0FBTixDQUFZQyxPQUFaLEdBQXNCLEVBQXRCO0FBQ0EsQ0FORDs7QUFRQTFCLE1BQU0sQ0FBQzJCLFlBQVAsR0FBc0IsWUFBWTtBQUNqQztBQUNBLE1BQUl6QixLQUFLLEdBQUdDLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixZQUF2QixDQUFaLENBRmlDLENBSWpDOztBQUNBLE1BQUl3QixNQUFNLEdBQUd6QixRQUFRLENBQUMwQixhQUFULENBQXVCLFFBQXZCLENBQWI7QUFDQUQsUUFBTSxDQUFDbEIsS0FBUCxHQUFlUixLQUFLLENBQUM0QixVQUFyQjtBQUNBRixRQUFNLENBQUNkLE1BQVAsR0FBZ0JaLEtBQUssQ0FBQzZCLFdBQXRCO0FBQ0EsTUFBSUMsR0FBRyxHQUFHSixNQUFNLENBQUNLLFVBQVAsQ0FBa0IsSUFBbEIsQ0FBVixDQVJpQyxDQVVqQzs7QUFDQUQsS0FBRyxDQUFDRSxTQUFKLENBQWNoQyxLQUFkLEVBQXFCLENBQXJCLEVBQXdCLENBQXhCLEVBQTJCMEIsTUFBTSxDQUFDbEIsS0FBbEMsRUFBeUNrQixNQUFNLENBQUNkLE1BQWhELEVBWGlDLENBYWpDOztBQUNBLE1BQUlxQixPQUFPLEdBQUdQLE1BQU0sQ0FBQ1EsU0FBUCxDQUFpQixZQUFqQixDQUFkLENBZGlDLENBY2E7O0FBQzlDakMsVUFBUSxDQUFDQyxhQUFULENBQXVCLFdBQXZCLEVBQW9DaUMsS0FBcEMsR0FBNENGLE9BQTVDO0FBR0FHLFNBQU8sQ0FBQ0MsR0FBUixDQUFZSixPQUFaLEVBbEJpQyxDQWtCWDs7QUFDdEJqQyxPQUFLLENBQUN1QixLQUFOLENBQVlDLE9BQVosR0FBc0IsTUFBdEI7QUFFQSxNQUFJSixXQUFXLEdBQUduQixRQUFRLENBQUNvQixjQUFULENBQXdCLGtCQUF4QixDQUFsQjtBQUNBRCxhQUFXLENBQUNHLEtBQVosQ0FBa0JDLE9BQWxCLEdBQTRCLEVBQTVCO0FBQ0FKLGFBQVcsQ0FBQ0UsR0FBWixHQUFrQlcsT0FBbEI7QUFFQSxDQXpCRDs7QUEyQkFLLENBQUMsQ0FBQyxjQUFELENBQUQsQ0FBa0JDLEVBQWxCLENBQXFCLGdCQUFyQixFQUF1QyxZQUFZO0FBQ2xEekMsUUFBTSxDQUFDQyxVQUFQO0FBQ0EsQ0FGRCIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9tb2R1bG9fZm90by5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIlxyXG53aW5kb3cubG9hZENhbWVyYSA9IGZ1bmN0aW9uICgpIHtcclxuXHQvL0NhcHR1cmEgZWxlbWVudG8gZGUgdsOtZGVvXHJcblx0dmFyIHZpZGVvID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIiN3ZWJDYW1lcmFcIik7XHJcblx0Ly9BcyBvcMOnw7VlcyBhYmFpeG8gc8OjbyBuZWNlc3PDoXJpYXMgcGFyYSBvIGZ1bmNpb25hbWVudG8gY29ycmV0byBubyBpT1NcclxuXHR2aWRlby5zZXRBdHRyaWJ1dGUoJ2F1dG9wbGF5JywgJycpO1xyXG5cdHZpZGVvLnNldEF0dHJpYnV0ZSgnbXV0ZWQnLCAnJyk7XHJcblx0dmlkZW8uc2V0QXR0cmlidXRlKCdwbGF5c2lubGluZScsICcnKTtcclxuXHQvLy0tXHJcblxyXG5cdC8vVmVyaWZpY2Egc2UgbyBuYXZlZ2Fkb3IgcG9kZSBjYXB0dXJhciBtw61kaWFcclxuXHJcblx0aWYgKG5hdmlnYXRvci5tZWRpYURldmljZXMuZ2V0VXNlck1lZGlhKSB7XHJcblx0XHRuYXZpZ2F0b3IubWVkaWFEZXZpY2VzLmdldFVzZXJNZWRpYSh7XHJcblx0XHRcdGF1ZGlvOiBmYWxzZSxcclxuXHRcdFx0dmlkZW86IHtcclxuXHRcdFx0XHR3aWR0aDogeyBtaW46IDEwMjQsIGlkZWFsOiAxMjgwLCBtYXg6IDE5MjAgfSxcclxuXHRcdFx0XHRoZWlnaHQ6IHsgbWluOiA1NzYsIGlkZWFsOiA3MjAsIG1heDogMTA4MCB9LFxyXG5cdFx0XHRcdGZhY2luZ01vZGU6ICdlbnZpcm9ubWVudCdcclxuXHRcdFx0fVxyXG5cdFx0fSlcclxuXHRcdFx0LnRoZW4oZnVuY3Rpb24gKHN0cmVhbSkge1xyXG5cdFx0XHRcdC8vRGVmaW5pciBvIGVsZW1lbnRvIHbDrWRlbyBhIGNhcnJlZ2FyIG8gY2FwdHVyYWRvIHBlbGEgd2ViY2FtXHJcblx0XHRcdFx0dmlkZW8uc3JjT2JqZWN0ID0gc3RyZWFtO1xyXG5cdFx0XHR9KVxyXG5cdFx0XHQuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XHJcblx0XHRcdFx0YWxlcnQoXCJPb29vcHBzLi4uIEZhbGhvdSA6JyhcIik7XHJcblx0XHRcdH0pO1xyXG5cdH1cclxufVxyXG5cclxuXHJcbndpbmRvdy50YWtlU25hcFNob3RBZ2FpbiA9IGZ1bmN0aW9uICgpIHtcclxuXHR2YXIgdmlkZW8gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI3dlYkNhbWVyYVwiKTtcclxuXHR2YXIgZmluYWxfaW1hZ2UgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImltYWdlbUNvbnZlcnRpZGFcIilcclxuXHRmaW5hbF9pbWFnZS5zcmMgPSAnJ1xyXG5cdGZpbmFsX2ltYWdlLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSdcclxuXHR2aWRlby5zdHlsZS5kaXNwbGF5ID0gJydcclxufVxyXG5cclxud2luZG93LnRha2VTbmFwU2hvdCA9IGZ1bmN0aW9uICgpIHtcclxuXHQvL0NhcHR1cmEgZWxlbWVudG8gZGUgdsOtZGVvXHJcblx0dmFyIHZpZGVvID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIiN3ZWJDYW1lcmFcIik7XHJcblxyXG5cdC8vQ3JpYW5kbyB1bSBjYW52YXMgcXVlIHZhaSBndWFyZGFyIGEgaW1hZ2VtIHRlbXBvcmFyaWFtZW50ZVxyXG5cdHZhciBjYW52YXMgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdjYW52YXMnKTtcclxuXHRjYW52YXMud2lkdGggPSB2aWRlby52aWRlb1dpZHRoO1xyXG5cdGNhbnZhcy5oZWlnaHQgPSB2aWRlby52aWRlb0hlaWdodDtcclxuXHR2YXIgY3R4ID0gY2FudmFzLmdldENvbnRleHQoJzJkJyk7XHJcblxyXG5cdC8vRGVzZW5oYW5kbyBlIGNvbnZlcnRlbmRvIGFzIGRpbWVuc8O1ZXNcclxuXHRjdHguZHJhd0ltYWdlKHZpZGVvLCAwLCAwLCBjYW52YXMud2lkdGgsIGNhbnZhcy5oZWlnaHQpO1xyXG5cclxuXHQvL0NyaWFuZG8gbyBKUEdcclxuXHR2YXIgZGF0YVVSSSA9IGNhbnZhcy50b0RhdGFVUkwoJ2ltYWdlL2pwZWcnKTsgLy9PIHJlc3VsdGFkbyDDqSB1bSBCQVNFNjQgZGUgdW1hIGltYWdlbS5cclxuXHRkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI2Jhc2VfaW1nXCIpLnZhbHVlID0gZGF0YVVSSTtcclxuXHJcblxyXG5cdGNvbnNvbGUubG9nKGRhdGFVUkkpOyAvL0dlcmFyIEltYWdlbSBlIFNhbHZhciBDYW1pbmhvIG5vIEJhbmNvXHJcblx0dmlkZW8uc3R5bGUuZGlzcGxheSA9ICdub25lJ1xyXG5cclxuXHR2YXIgZmluYWxfaW1hZ2UgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImltYWdlbUNvbnZlcnRpZGFcIilcclxuXHRmaW5hbF9pbWFnZS5zdHlsZS5kaXNwbGF5ID0gJydcclxuXHRmaW5hbF9pbWFnZS5zcmMgPSBkYXRhVVJJXHJcblxyXG59XHJcblxyXG4kKCcjbW9kYWxDYW1lcmEnKS5vbignc2hvd24uYnMubW9kYWwnLCBmdW5jdGlvbiAoKSB7XHJcblx0d2luZG93LmxvYWRDYW1lcmEoKTtcclxufSkiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/modulo_foto.js\n");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9hcHAuc2Nzcz8wZTE1Il0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL3Nhc3MvYXBwLnNjc3MuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyByZW1vdmVkIGJ5IGV4dHJhY3QtdGV4dC13ZWJwYWNrLXBsdWdpbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/sass/app.scss\n");

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\jonathanrs\Documents\projects\packtrack\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\Users\jonathanrs\Documents\projects\packtrack\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });