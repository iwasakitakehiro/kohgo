/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/hamburger.js":
/*!*****************************!*\
  !*** ./src/js/hamburger.js ***!
  \*****************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"Hamburger\": function() { return /* binding */ Hamburger; }\n/* harmony export */ });\nfunction _typeof(obj) { \"@babel/helpers - typeof\"; return _typeof = \"function\" == typeof Symbol && \"symbol\" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && \"function\" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? \"symbol\" : typeof obj; }, _typeof(obj); }\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, \"prototype\", { writable: false }); return Constructor; }\nfunction _toPropertyKey(arg) { var key = _toPrimitive(arg, \"string\"); return _typeof(key) === \"symbol\" ? key : String(key); }\nfunction _toPrimitive(input, hint) { if (_typeof(input) !== \"object\" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || \"default\"); if (_typeof(res) !== \"object\") return res; throw new TypeError(\"@@toPrimitive must return a primitive value.\"); } return (hint === \"string\" ? String : Number)(input); }\nvar Hamburger = /*#__PURE__*/function () {\n  function Hamburger(_ref) {\n    var target = _ref.target,\n      navigation = _ref.navigation;\n    _classCallCheck(this, Hamburger);\n    this.button = document.querySelector(target);\n    this.navigation = document.querySelector(navigation);\n    this.isOpen = false;\n  }\n  _createClass(Hamburger, [{\n    key: \"init\",\n    value: function init() {\n      if (!this.button) return;\n      this.toggle();\n    }\n  }, {\n    key: \"toggle\",\n    value: function toggle() {\n      var _this = this;\n      this.button.addEventListener(\"click\", function () {\n        if (!_this.isOpen) {\n          _this.open();\n        } else {\n          _this.close();\n        }\n      });\n    }\n  }, {\n    key: \"open\",\n    value: function open() {\n      this.navigation.classList.add(\"active\");\n      this.isOpen = true;\n    }\n  }, {\n    key: \"close\",\n    value: function close() {\n      this.navigation.classList.remove(\"active\");\n      this.isOpen = false;\n    }\n  }]);\n  return Hamburger;\n}();\n\n\n//# sourceURL=webpack://my-theme/./src/js/hamburger.js?");

/***/ }),

/***/ "./src/js/index.js":
/*!*************************!*\
  !*** ./src/js/index.js ***!
  \*************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _hamburger__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./hamburger */ \"./src/js/hamburger.js\");\nfunction _typeof(obj) { \"@babel/helpers - typeof\"; return _typeof = \"function\" == typeof Symbol && \"symbol\" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && \"function\" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? \"symbol\" : typeof obj; }, _typeof(obj); }\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, \"prototype\", { writable: false }); return Constructor; }\nfunction _toPropertyKey(arg) { var key = _toPrimitive(arg, \"string\"); return _typeof(key) === \"symbol\" ? key : String(key); }\nfunction _toPrimitive(input, hint) { if (_typeof(input) !== \"object\" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || \"default\"); if (_typeof(res) !== \"object\") return res; throw new TypeError(\"@@toPrimitive must return a primitive value.\"); } return (hint === \"string\" ? String : Number)(input); }\n// import \"slick-carousel\";\n// import \"slick-carousel/slick/slick.css\";\n// import \"slick-carousel/slick/slick-theme.css\";\n\nvar PanelTabs = /*#__PURE__*/function () {\n  function PanelTabs(selector) {\n    var _options$buttonSelect, _options$panelSelecto, _options$buttonKey, _options$panelKey, _options$stateKey;\n    var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};\n    _classCallCheck(this, PanelTabs);\n    this.root = document.querySelector(selector);\n    this.buttonSelector = (_options$buttonSelect = options.buttonSelector) !== null && _options$buttonSelect !== void 0 ? _options$buttonSelect : \"[data-panel-tab]\";\n    this.panelSelector = (_options$panelSelecto = options.panelSelector) !== null && _options$panelSelecto !== void 0 ? _options$panelSelecto : \"[data-panel-content]\";\n    this.buttonKey = (_options$buttonKey = options.buttonKey) !== null && _options$buttonKey !== void 0 ? _options$buttonKey : \"panelTab\";\n    this.panelKey = (_options$panelKey = options.panelKey) !== null && _options$panelKey !== void 0 ? _options$panelKey : \"panelContent\";\n    this.stateKey = (_options$stateKey = options.stateKey) !== null && _options$stateKey !== void 0 ? _options$stateKey : null;\n    this.buttons = [];\n    this.panels = [];\n  }\n  _createClass(PanelTabs, [{\n    key: \"init\",\n    value: function init() {\n      var _this = this;\n      if (!this.root) return;\n      this.buttons = Array.from(this.root.querySelectorAll(this.buttonSelector));\n      this.panels = Array.from(this.root.querySelectorAll(this.panelSelector));\n      this.buttons.forEach(function (button) {\n        button.addEventListener(\"click\", function () {\n          _this.open(button.dataset[_this.buttonKey]);\n        });\n      });\n    }\n  }, {\n    key: \"open\",\n    value: function open(key) {\n      var _this2 = this;\n      if (this.stateKey) {\n        this.root.dataset[this.stateKey] = key;\n      }\n      this.buttons.forEach(function (button) {\n        var isActive = button.dataset[_this2.buttonKey] === key;\n        button.classList.toggle(\"is-active\", isActive);\n        button.setAttribute(\"aria-selected\", String(isActive));\n      });\n      this.panels.forEach(function (panel) {\n        var isActive = panel.dataset[_this2.panelKey] === key;\n        panel.classList.toggle(\"is-active\", isActive);\n        panel.hidden = !isActive;\n      });\n    }\n  }]);\n  return PanelTabs;\n}();\nvar hamburger = new _hamburger__WEBPACK_IMPORTED_MODULE_0__.Hamburger({\n  target: \"#hamburger\",\n  navigation: \".hamburger__menu\"\n});\nvar tirePriceTabs = new PanelTabs(\"[data-tire-price-tabs]\", {\n  buttonSelector: \"[data-tire-tab]\",\n  panelSelector: \"[data-tire-panel]\",\n  buttonKey: \"tireTab\",\n  panelKey: \"tirePanel\",\n  stateKey: \"activeTheme\"\n});\nvar priceGuideTabs = new PanelTabs(\"[data-panel-tabs]\");\nhamburger.init();\ntirePriceTabs.init();\npriceGuideTabs.init();\n\n//# sourceURL=webpack://my-theme/./src/js/index.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/js/index.js");
/******/ 	
/******/ })()
;