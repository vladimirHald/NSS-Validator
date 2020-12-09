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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/nssCheck.js":
/*!**********************************!*\
  !*** ./resources/js/nssCheck.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.onNssChange = function onNssChange() {
  var nssPregCheck = document.getElementById("nssCodePregCheck");
  var nssCheckBtn = document.getElementById("nssCheckBtn");
  var nssFull = document.getElementById("nssFull");
  var nssSex = document.getElementById("nssSex").value;
  var nssYear = document.getElementById("nssYear").value;
  var nssMonth = document.getElementById("nssMonth").value;
  var nssDepartment = document.getElementById("nssDepartment").value;
  var nssComune = document.getElementById("nssComune").value;
  var nssOrderNumber = document.getElementById("nssOrderNumber").value;
  var nssControlKey = document.getElementById("nssControlKey").value;
  var fullGeneratedCode = nssSex + nssYear + nssMonth + nssDepartment + nssComune + nssOrderNumber + nssControlKey;
  nssFull.value = fullGeneratedCode;
  var value = nssFull.value;

  if (value.substring(0, 13).match(/^\d{5}(\d{2}|2a|2b)\d{6}$/i) && value.length == 15) {
    nssPregCheck.innerHTML = "Код введен верно, можно продолжить";
    nssCheckBtn.removeAttribute("disabled");
  } else {
    nssPregCheck.innerHTML = "Код введен неверно";
    nssCheckBtn.setAttribute("disabled", "");
  }
};

/***/ }),

/***/ 1:
/*!****************************************!*\
  !*** multi ./resources/js/nssCheck.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\web\projects\NSS-Validator\nssvalidator.site\resources\js\nssCheck.js */"./resources/js/nssCheck.js");


/***/ })

/******/ });