(self["webpackChunk"] = self["webpackChunk"] || []).push([["NewsIndex"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/vue/modules/news/views/NewsIndex.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/vue/modules/news/views/NewsIndex.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
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
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: 'NewsIndex',
  data: function data() {
    return {
      news: []
    };
  },
  mounted: function mounted() {
    this.getNewsListing();
  },
  methods: {
    getNewsListing: function getNewsListing() {
      var _this = this;

      axios.get('http://localhost:8000/api/news').then(function (response) {
        console.log(response);

        if (response.status == 200) {
          _this.news = response.data.data;
          console.log(_this.news);
        }

        if (response.status == 204) {
          alert(response.statusText);
        }
      })["catch"](function (error) {
        console.log(error);
      });
    }
  }
});

/***/ }),

/***/ "./resources/js/vue/modules/news/views/NewsIndex.vue":
/*!***********************************************************!*\
  !*** ./resources/js/vue/modules/news/views/NewsIndex.vue ***!
  \***********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _NewsIndex_vue_vue_type_template_id_9563571e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./NewsIndex.vue?vue&type=template&id=9563571e& */ "./resources/js/vue/modules/news/views/NewsIndex.vue?vue&type=template&id=9563571e&");
/* harmony import */ var _NewsIndex_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./NewsIndex.vue?vue&type=script&lang=js& */ "./resources/js/vue/modules/news/views/NewsIndex.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _NewsIndex_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _NewsIndex_vue_vue_type_template_id_9563571e___WEBPACK_IMPORTED_MODULE_0__.render,
  _NewsIndex_vue_vue_type_template_id_9563571e___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/vue/modules/news/views/NewsIndex.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/vue/modules/news/views/NewsIndex.vue?vue&type=script&lang=js&":
/*!************************************************************************************!*\
  !*** ./resources/js/vue/modules/news/views/NewsIndex.vue?vue&type=script&lang=js& ***!
  \************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NewsIndex_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NewsIndex.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/vue/modules/news/views/NewsIndex.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NewsIndex_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/vue/modules/news/views/NewsIndex.vue?vue&type=template&id=9563571e&":
/*!******************************************************************************************!*\
  !*** ./resources/js/vue/modules/news/views/NewsIndex.vue?vue&type=template&id=9563571e& ***!
  \******************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NewsIndex_vue_vue_type_template_id_9563571e___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NewsIndex_vue_vue_type_template_id_9563571e___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NewsIndex_vue_vue_type_template_id_9563571e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NewsIndex.vue?vue&type=template&id=9563571e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/vue/modules/news/views/NewsIndex.vue?vue&type=template&id=9563571e&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/vue/modules/news/views/NewsIndex.vue?vue&type=template&id=9563571e&":
/*!*********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/vue/modules/news/views/NewsIndex.vue?vue&type=template&id=9563571e& ***!
  \*********************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _vm._v("\n  News\n  "),
      _c(
        "b-container",
        [
          _c(
            "b-row",
            [
              _c("b-col", [
                _c("div", { staticClass: "table-responsive" }, [
                  _c(
                    "table",
                    { staticClass: "table" },
                    [
                      _c("thead", [
                        _c("tr", [
                          _c("th", { attrs: { scope: "col" } }, [
                            _vm._v("\n                  #\n                ")
                          ]),
                          _vm._v(" "),
                          _c("th", { attrs: { scope: "col" } }, [
                            _vm._v(
                              "\n                  First\n                "
                            )
                          ]),
                          _vm._v(" "),
                          _c("th", { attrs: { scope: "col" } }, [
                            _vm._v("\n                  Last\n                ")
                          ]),
                          _vm._v(" "),
                          _c("th", { attrs: { scope: "col" } }, [
                            _vm._v(
                              "\n                  Handle\n                "
                            )
                          ])
                        ])
                      ]),
                      _vm._v(" "),
                      _vm._l(_vm.news, function(newss, index) {
                        return _c("tbody", { key: index }, [
                          _c("tr", [
                            _c("td", [_vm._v(_vm._s(newss["d_title"]))]),
                            _vm._v(" "),
                            _c("td", [_vm._v(_vm._s(newss["created_by"]))]),
                            _vm._v(" "),
                            _c("td", [_vm._v(_vm._s(newss["status"]))]),
                            _vm._v(" "),
                            _c(
                              "td",
                              [
                                _c(
                                  "router-link",
                                  {
                                    attrs: {
                                      to: {
                                        name: "news.show",
                                        params: { id: newss.id }
                                      }
                                    }
                                  },
                                  [
                                    _vm._v(
                                      "\n                    View\n                  "
                                    )
                                  ]
                                )
                              ],
                              1
                            )
                          ])
                        ])
                      })
                    ],
                    2
                  )
                ])
              ])
            ],
            1
          )
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);