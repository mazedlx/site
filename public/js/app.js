(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/app"],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/ContactForm.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/ContactForm.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_1__);


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      done: false,
      name: "",
      email: "",
      message: "",
      errors: [],
      loading: false,
      thankYouMessage: this.isGerman() ? "Vielen Dank für Ihre Nachricht, wir melden uns in Kürze." : "Thank you for your message. We'll get back at you shortly.",
      placeholders: {
        name: this.isGerman() ? "Ihr Name" : "Your name",
        email: this.isGerman() ? "Ihre E-Mail-Adresse" : "Your email address",
        message: this.isGerman() ? "Ihre Idee die Sie mit uns umsetzen wollen" : "Your awesome idea that needs realization"
      },
      buttonText: this.isGerman() ? "Nachricht absenden" : "Send message"
    };
  },
  methods: {
    isGerman: function isGerman() {
      return window.locale === "de";
    },
    clearError: function clearError(key) {
      this.errors[key] = null;
    },
    sendMail: function () {
      var _sendMail = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
        var response;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                this.loading = true;
                _context.prev = 1;
                _context.next = 4;
                return axios__WEBPACK_IMPORTED_MODULE_1___default.a.post("/contact", {
                  name: this.name,
                  email: this.email,
                  message: this.message,
                  locale: window.locale
                });

              case 4:
                response = _context.sent;
                this.name = "";
                this.email = "";
                this.message = "";
                this.done = true;
                _context.next = 15;
                break;

              case 11:
                _context.prev = 11;
                _context.t0 = _context["catch"](1);
                this.errors = _context.t0.response.data.errors;
                this.loading = false;

              case 15:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this, [[1, 11]]);
      }));

      function sendMail() {
        return _sendMail.apply(this, arguments);
      }

      return sendMail;
    }()
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/ContactForm.vue?vue&type=template&id=76db242e&":
/*!**************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/ContactForm.vue?vue&type=template&id=76db242e& ***!
  \**************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm.done
    ? _c("div", { staticClass: "subheading text-center py-8" }, [
        _vm._v("\n  " + _vm._s(_vm.thankYouMessage) + "\n")
      ])
    : _c(
        "form",
        {
          staticClass: "flex flex-col w-full",
          attrs: { action: "/contact", method: "POST" }
        },
        [
          _c("div", { staticClass: "form-group" }, [
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.name,
                  expression: "name"
                }
              ],
              staticClass: "form-input",
              class: {
                "border-red": _vm.errors["name"]
              },
              attrs: {
                placeholder: _vm.placeholders.name,
                type: "text",
                required: ""
              },
              domProps: { value: _vm.name },
              on: {
                input: [
                  function($event) {
                    if ($event.target.composing) {
                      return
                    }
                    _vm.name = $event.target.value
                  },
                  function($event) {
                    return _vm.clearError("name")
                  }
                ]
              }
            }),
            _vm._v(" "),
            _vm.errors["name"]
              ? _c("div", { staticClass: "form-error" }, [
                  _vm._v(_vm._s(_vm.errors["name"][0]))
                ])
              : _vm._e()
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "form-group" }, [
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.email,
                  expression: "email"
                }
              ],
              staticClass: "form-input",
              class: {
                "border-red": _vm.errors["email"]
              },
              attrs: {
                placeholder: _vm.placeholders.email,
                type: "email",
                required: ""
              },
              domProps: { value: _vm.email },
              on: {
                input: [
                  function($event) {
                    if ($event.target.composing) {
                      return
                    }
                    _vm.email = $event.target.value
                  },
                  function($event) {
                    return _vm.clearError("email")
                  }
                ]
              }
            }),
            _vm._v(" "),
            _vm.errors["email"]
              ? _c("div", { staticClass: "form-error" }, [
                  _vm._v(_vm._s(_vm.errors["email"][0]))
                ])
              : _vm._e()
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "form-group" }, [
            _c("textarea", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.message,
                  expression: "message"
                }
              ],
              staticClass: "form-input",
              class: {
                "border-red": _vm.errors["message"]
              },
              attrs: {
                placeholder: _vm.placeholders.message,
                rows: "10",
                cols: "30",
                required: ""
              },
              domProps: { value: _vm.message },
              on: {
                input: [
                  function($event) {
                    if ($event.target.composing) {
                      return
                    }
                    _vm.message = $event.target.value
                  },
                  function($event) {
                    return _vm.clearError("message")
                  }
                ]
              }
            }),
            _vm._v(" "),
            _vm.errors["message"]
              ? _c("div", { staticClass: "form-error" }, [
                  _vm._v(_vm._s(_vm.errors["message"][0]))
                ])
              : _vm._e()
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "flex justify-end" }, [
            _c("button", {
              staticClass: "btn",
              attrs: { type: "button", disabled: _vm.loading },
              domProps: { textContent: _vm._s(_vm.buttonText) },
              on: { click: _vm.sendMail }
            })
          ])
        ]
      )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.common.js");
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(vue__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _components_ContactForm__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/ContactForm */ "./resources/js/components/ContactForm.vue");


var app = new vue__WEBPACK_IMPORTED_MODULE_0___default.a({
  el: "#vue",
  render: function render(createElement) {
    return createElement(_components_ContactForm__WEBPACK_IMPORTED_MODULE_1__["default"]);
  }
});
var btn = document.getElementById("nav_btn");
var links = document.getElementById("nav_links");
btn.addEventListener("click", function () {
  console.log('clicked');
  links.classList.toggle("hidden");
});

/***/ }),

/***/ "./resources/js/components/ContactForm.vue":
/*!*************************************************!*\
  !*** ./resources/js/components/ContactForm.vue ***!
  \*************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _ContactForm_vue_vue_type_template_id_76db242e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ContactForm.vue?vue&type=template&id=76db242e& */ "./resources/js/components/ContactForm.vue?vue&type=template&id=76db242e&");
/* harmony import */ var _ContactForm_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ContactForm.vue?vue&type=script&lang=js& */ "./resources/js/components/ContactForm.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _ContactForm_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _ContactForm_vue_vue_type_template_id_76db242e___WEBPACK_IMPORTED_MODULE_0__["render"],
  _ContactForm_vue_vue_type_template_id_76db242e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/ContactForm.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/ContactForm.vue?vue&type=script&lang=js&":
/*!**************************************************************************!*\
  !*** ./resources/js/components/ContactForm.vue?vue&type=script&lang=js& ***!
  \**************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ContactForm_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./ContactForm.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/ContactForm.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ContactForm_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/ContactForm.vue?vue&type=template&id=76db242e&":
/*!********************************************************************************!*\
  !*** ./resources/js/components/ContactForm.vue?vue&type=template&id=76db242e& ***!
  \********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ContactForm_vue_vue_type_template_id_76db242e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./ContactForm.vue?vue&type=template&id=76db242e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/ContactForm.vue?vue&type=template&id=76db242e&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ContactForm_vue_vue_type_template_id_76db242e___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ContactForm_vue_vue_type_template_id_76db242e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/maze/Code/site/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /Users/maze/Code/site/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

},[[0,"/js/manifest","/js/vendor"]]]);