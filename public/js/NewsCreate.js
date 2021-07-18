(self["webpackChunk"] = self["webpackChunk"] || []).push([["NewsCreate"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************************************************/
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
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: 'NewsCreate',
  data: function data() {
    return {
      editorConfig: {// The configuration of the editor.
      },
      url: Boolean,
      options: [{
        value: 'a',
        text: 'Please select an option'
      }, {
        value: 'a',
        text: 'This is First option'
      }, {
        value: 'b',
        text: 'Selected Option'
      }, {
        value: {
          C: '3PO'
        },
        text: 'This is an option with object value'
      }, {
        value: 'd',
        text: 'This one is disabled',
        disabled: true
      }],
      form: {
        cover: {
          image: '',
          title: String,
          caption: String
        },
        title: '',
        description: '',
        content: '',
        category: [],
        written_by: '',
        news_source: '',
        photo_source: '',
        news_tag: [],
        suggested_tag: [],
        schedule: '',
        highlight: {
          selected: null,
          options: [{
            value: 1,
            text: 'Yes'
          }, {
            value: 0,
            text: 'No'
          }]
        },
        accordions: [{
          title: 'a1',
          caption: 'a1'
        }, {
          title: 'a2',
          caption: 'a2'
        }],
        photo_gallery: [{
          title: 'p1',
          caption: 'p1',
          image: null
        }, {
          title: 'p2',
          caption: 'p2',
          image: null
        }],
        wide_gallery: [{
          title: 'w1',
          caption: 'w1',
          image: null
        }, {
          title: 'w2',
          caption: 'w2',
          image: null
        }]
      },
      coverPhoto: true,
      show: true
    };
  },
  methods: {
    addElement: function addElement(type) {
      if (type == 'accordion') {
        this.form.accordions.push({
          title: '2',
          caption: '2'
        });
      }

      if (type == 'photo_gallery') {
        this.form.photo_gallery.push({
          title: '2',
          caption: '2',
          image: null
        });
      }

      if (type == 'wide_gallery') {
        this.form.wide_gallery.push({
          title: '2',
          caption: '2',
          image: null
        });
      }
    },
    removeElement: function removeElement(type, id) {
      console.log(type, id);

      if (type == 'accordion') {
        if (this.form.accordions.length > 1) {
          this.form.accordions = this.form.accordions.filter(function (item, index) {
            return index !== id;
          });
        }
      }

      if (type == 'photo_gallery') {
        this.form.photo_gallery = this.form.photo_gallery.filter(function (item, index) {
          return index !== id;
        });
      }

      if (type == 'wide_gallery') {
        this.form.wide_gallery = this.form.wide_gallery.filter(function (item, index) {
          return index !== id;
        });
      }
    },
    showPhoto: function showPhoto(e) {
      console.log(e);
      var type = e.target.dataset.type;
      console.log('type', type);

      if (type == 'cover') {
        var file = e.target.files[0];
        this.form.cover.image = URL.createObjectURL(file);
        this.coverPhoto = false;
      }

      if (type == 'photo') {
        console.log(e.target.dataset.type);
        var _file = e.target.files[0];
        this.form.photo_gallery[e.target.dataset.index]['image'] = URL.createObjectURL(_file);
      }

      if (type == 'wide') {
        var _file2 = e.target.files[0];
        this.form.wide_gallery[e.target.dataset.index]['image'] = URL.createObjectURL(_file2);
      } // const file = e.target.files[0];
      // this.url = URL.createObjectURL(file);
      // this.coverPhoto = false;

    },
    onSubmit: function onSubmit(event) {
      event.preventDefault();
      alert(JSON.stringify(this.form));
    },
    onReset: function onReset(event) {
      var _this = this;

      event.preventDefault(); // Reset our form values

      this.form.email = '';
      this.form.name = '';
      this.form.food = null;
      this.form.checked = []; // Trick to reset/clear native browser form validation state

      this.show = false;
      this.$nextTick(function () {
        _this.show = true;
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=style&index=0&id=1c30846d&scoped=true&lang=css&":
/*!*************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=style&index=0&id=1c30846d&scoped=true&lang=css& ***!
  \*************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, "\n.middle[data-v-1c30846d] {\n  transition: 0.5s ease;\n  opacity: 0;\n  position: absolute;\n  top: 50%;\n  left: 50%;\n  transform: translate(-50%, -50%);\n  -ms-transform: translate(-50%, -50%);\n  text-align: center;\n}\n.text[data-v-1c30846d] {\n  background-color: #04aa6d;\n  color: white;\n  font-size: 16px;\n  padding: 16px 32px;\n}\n.container:hover .image[data-v-1c30846d] {\n  opacity: 0.3;\n}\n.container:hover .middle[data-v-1c30846d] {\n  opacity: 1;\n}\n", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=style&index=0&id=1c30846d&scoped=true&lang=css&":
/*!*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=style&index=0&id=1c30846d&scoped=true&lang=css& ***!
  \*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../../../../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_NewsCreate_vue_vue_type_style_index_0_id_1c30846d_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!../../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NewsCreate.vue?vue&type=style&index=0&id=1c30846d&scoped=true&lang=css& */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=style&index=0&id=1c30846d&scoped=true&lang=css&");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_NewsCreate_vue_vue_type_style_index_0_id_1c30846d_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_1__.default, options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_NewsCreate_vue_vue_type_style_index_0_id_1c30846d_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_1__.default.locals || {});

/***/ }),

/***/ "./resources/js/vue/modules/news/views/NewsCreate.vue":
/*!************************************************************!*\
  !*** ./resources/js/vue/modules/news/views/NewsCreate.vue ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _NewsCreate_vue_vue_type_template_id_1c30846d_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./NewsCreate.vue?vue&type=template&id=1c30846d&scoped=true& */ "./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=template&id=1c30846d&scoped=true&");
/* harmony import */ var _NewsCreate_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./NewsCreate.vue?vue&type=script&lang=js& */ "./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=script&lang=js&");
/* harmony import */ var _NewsCreate_vue_vue_type_style_index_0_id_1c30846d_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./NewsCreate.vue?vue&type=style&index=0&id=1c30846d&scoped=true&lang=css& */ "./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=style&index=0&id=1c30846d&scoped=true&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");



;


/* normalize component */

var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__.default)(
  _NewsCreate_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _NewsCreate_vue_vue_type_template_id_1c30846d_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _NewsCreate_vue_vue_type_template_id_1c30846d_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "1c30846d",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/vue/modules/news/views/NewsCreate.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=script&lang=js&":
/*!*************************************************************************************!*\
  !*** ./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NewsCreate_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NewsCreate.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NewsCreate_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=style&index=0&id=1c30846d&scoped=true&lang=css&":
/*!*********************************************************************************************************************!*\
  !*** ./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=style&index=0&id=1c30846d&scoped=true&lang=css& ***!
  \*********************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_dist_cjs_js_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_NewsCreate_vue_vue_type_style_index_0_id_1c30846d_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/style-loader/dist/cjs.js!../../../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!../../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NewsCreate.vue?vue&type=style&index=0&id=1c30846d&scoped=true&lang=css& */ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=style&index=0&id=1c30846d&scoped=true&lang=css&");


/***/ }),

/***/ "./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=template&id=1c30846d&scoped=true&":
/*!*******************************************************************************************************!*\
  !*** ./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=template&id=1c30846d&scoped=true& ***!
  \*******************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NewsCreate_vue_vue_type_template_id_1c30846d_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NewsCreate_vue_vue_type_template_id_1c30846d_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NewsCreate_vue_vue_type_template_id_1c30846d_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./NewsCreate.vue?vue&type=template&id=1c30846d&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=template&id=1c30846d&scoped=true&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=template&id=1c30846d&scoped=true&":
/*!**********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/vue/modules/news/views/NewsCreate.vue?vue&type=template&id=1c30846d&scoped=true& ***!
  \**********************************************************************************************************************************************************************************************************************************************/
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
    "b-container",
    { attrs: { fluid: "" } },
    [
      _c(
        "b-row",
        { staticClass: "m-0 w-100" },
        [
          _c(
            "b-col",
            { staticClass: "w-100 pr-lg-5", attrs: { cols: "12" } },
            [
              _vm.show
                ? _c(
                    "b-form",
                    { on: { submit: _vm.onSubmit, reset: _vm.onReset } },
                    [
                      _c(
                        "b-col",
                        { staticClass: "text-left", attrs: { cols: "4" } },
                        [
                          _c(
                            "label",
                            {
                              staticClass: "container",
                              attrs: { for: "coverPhoto" }
                            },
                            [
                              _c(
                                "div",
                                {
                                  directives: [
                                    {
                                      name: "show",
                                      rawName: "v-show",
                                      value: _vm.form.cover.image,
                                      expression: "form.cover.image"
                                    }
                                  ]
                                },
                                [
                                  _c("img", {
                                    staticClass: "img-thumbnail image",
                                    attrs: { src: _vm.form.cover.image }
                                  })
                                ]
                              ),
                              _vm._v(" "),
                              _c(
                                "div",
                                {
                                  directives: [
                                    {
                                      name: "show",
                                      rawName: "v-show",
                                      value: _vm.form.cover.image,
                                      expression: "form.cover.image"
                                    }
                                  ],
                                  staticClass: "middle"
                                },
                                [
                                  _c("div", { staticClass: "text" }, [
                                    _vm._v(
                                      "\n                Change\n              "
                                    )
                                  ])
                                ]
                              )
                            ]
                          )
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "b-form-group",
                        {
                          attrs: {
                            id: "cover-group",
                            "label-cols-sm": "2",
                            label: "Cover Photo",
                            "label-for": "coverPhoto"
                          }
                        },
                        [
                          _c("b-form-file", {
                            directives: [
                              {
                                name: "show",
                                rawName: "v-show",
                                value: _vm.coverPhoto,
                                expression: "coverPhoto"
                              }
                            ],
                            attrs: {
                              id: "coverPhoto",
                              accept: ".jpeg, .jpg",
                              state: Boolean(_vm.url),
                              placeholder: "Choose a file or drop it here...",
                              "drop-placeholder": "Drop file here...",
                              "data-type": "cover"
                            },
                            on: { change: _vm.showPhoto }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c("div", { attrs: { id: "preview" } }, [
                        _vm.url
                          ? _c("img", {
                              attrs: { src: _vm.url, height: "80px" }
                            })
                          : _vm._e()
                      ]),
                      _vm._v(" "),
                      _c(
                        "b-form-group",
                        {
                          attrs: {
                            id: "title-group",
                            "label-cols-sm": "2",
                            label: "Title",
                            "label-for": "title"
                          }
                        },
                        [
                          _c("b-form-input", {
                            attrs: {
                              id: "title",
                              placeholder: "Enter Title",
                              required: "",
                              type: "text"
                            },
                            model: {
                              value: _vm.form.title,
                              callback: function($$v) {
                                _vm.$set(_vm.form, "title", $$v)
                              },
                              expression: "form.title"
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "b-form-group",
                        {
                          attrs: {
                            "label-cols-sm": "2",
                            label: "Description",
                            "label-for": "description"
                          }
                        },
                        [
                          _c("b-form-input", {
                            attrs: {
                              id: "description",
                              placeholder: "Enter Description",
                              type: "text",
                              required: ""
                            },
                            model: {
                              value: _vm.form.description,
                              callback: function($$v) {
                                _vm.$set(_vm.form, "description", $$v)
                              },
                              expression: "form.description"
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "b-form-group",
                        {
                          attrs: {
                            "label-cols-sm": "2",
                            label: "Content",
                            "label-for": "content"
                          }
                        },
                        [
                          _c("ckeditor", {
                            attrs: { id: "content", config: _vm.editorConfig },
                            model: {
                              value: _vm.form.content,
                              callback: function($$v) {
                                _vm.$set(_vm.form, "content", $$v)
                              },
                              expression: "form.content"
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "b-row",
                        { staticClass: "w-100 m-0 p-0" },
                        [
                          _c(
                            "b-col",
                            { staticClass: "pl-0 pr-0", attrs: { lg: "6" } },
                            [
                              _c(
                                "b-form-group",
                                {
                                  attrs: {
                                    id: "category-group",
                                    "label-cols-lg": "4",
                                    label: "Category",
                                    "label-for": "category"
                                  }
                                },
                                [
                                  _c("b-form-select", {
                                    attrs: { options: _vm.options },
                                    model: {
                                      value: _vm.form.category,
                                      callback: function($$v) {
                                        _vm.$set(_vm.form, "category", $$v)
                                      },
                                      expression: "form.category"
                                    }
                                  })
                                ],
                                1
                              )
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c(
                            "b-col",
                            { staticClass: "pl-0 pr-0", attrs: { lg: "6" } },
                            [
                              _c(
                                "b-form-group",
                                {
                                  staticClass: "pl-lg-4",
                                  attrs: {
                                    id: "written_by-group",
                                    "label-cols-lg": "4",
                                    label: "Written by",
                                    "label-for": "written_by"
                                  }
                                },
                                [
                                  _c("b-form-input", {
                                    attrs: {
                                      id: "written_by",
                                      placeholder: "Written by",
                                      type: "text",
                                      required: ""
                                    },
                                    model: {
                                      value: _vm.form.written_by,
                                      callback: function($$v) {
                                        _vm.$set(_vm.form, "written_by", $$v)
                                      },
                                      expression: "form.written_by"
                                    }
                                  })
                                ],
                                1
                              )
                            ],
                            1
                          )
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "b-row",
                        { staticClass: "w-100 m-0 p-0" },
                        [
                          _c(
                            "b-col",
                            { staticClass: "pl-0 pr-0", attrs: { lg: "6" } },
                            [
                              _c(
                                "b-form-group",
                                {
                                  attrs: {
                                    id: "news_source-group",
                                    "label-cols-lg": "4",
                                    label: "News Source",
                                    "label-for": "news_source"
                                  }
                                },
                                [
                                  _c("b-form-input", {
                                    attrs: {
                                      id: "news_source",
                                      placeholder: "News Source",
                                      type: "text",
                                      required: ""
                                    },
                                    model: {
                                      value: _vm.form.news_source,
                                      callback: function($$v) {
                                        _vm.$set(_vm.form, "news_source", $$v)
                                      },
                                      expression: "form.news_source"
                                    }
                                  })
                                ],
                                1
                              )
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c(
                            "b-col",
                            { staticClass: "pl-0 pr-0", attrs: { lg: "6" } },
                            [
                              _c(
                                "b-form-group",
                                {
                                  staticClass: "pl-lg-4",
                                  attrs: {
                                    id: "photo_source-group",
                                    "label-cols-lg": "4",
                                    label: "Photo source / credit",
                                    "label-for": "photo_source"
                                  }
                                },
                                [
                                  _c("b-form-input", {
                                    attrs: {
                                      id: "photo_source",
                                      placeholder: "Photo source / credit",
                                      type: "text",
                                      required: ""
                                    },
                                    model: {
                                      value: _vm.form.photo_source,
                                      callback: function($$v) {
                                        _vm.$set(_vm.form, "photo_source", $$v)
                                      },
                                      expression: "form.photo_source"
                                    }
                                  })
                                ],
                                1
                              )
                            ],
                            1
                          )
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "b-form-group",
                        {
                          attrs: {
                            id: "scdedule-group",
                            "label-cols-sm": "2",
                            label: "Schedule",
                            "label-for": "scdedule"
                          }
                        },
                        [
                          _c(
                            "b-col",
                            { staticClass: "pl-0 pr-0", attrs: { lg: "4" } },
                            [
                              _c("b-form-datepicker", {
                                staticClass: "mb-2",
                                attrs: { id: "example-datepicker" },
                                model: {
                                  value: _vm.form.schedule,
                                  callback: function($$v) {
                                    _vm.$set(_vm.form, "schedule", $$v)
                                  },
                                  expression: "form.schedule"
                                }
                              })
                            ],
                            1
                          )
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "b-form-group",
                        {
                          attrs: {
                            id: "highlight-group",
                            "label-cols-sm": "2",
                            label: "Highlight",
                            "label-for": "highlight"
                          }
                        },
                        [
                          _c(
                            "b-col",
                            { staticClass: "pl-0 pr-0", attrs: { lg: "4" } },
                            [
                              _c("b-form-select", {
                                attrs: {
                                  id: "highlight",
                                  options: _vm.form.highlight.options,
                                  type: "text",
                                  required: ""
                                },
                                model: {
                                  value: _vm.form.highlight.selected,
                                  callback: function($$v) {
                                    _vm.$set(
                                      _vm.form.highlight,
                                      "selected",
                                      $$v
                                    )
                                  },
                                  expression: "form.highlight.selected"
                                }
                              })
                            ],
                            1
                          )
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c("hr", {
                        staticStyle: { border: "1px solid lightgray" }
                      }),
                      _vm._v(" "),
                      _vm._l(_vm.form.accordions, function(accordion, index) {
                        return _c(
                          "div",
                          { key: "accordiion" + index },
                          [
                            _c(
                              "b-row",
                              { staticClass: "w-100 m-0 p-0" },
                              [
                                _c(
                                  "b-col",
                                  {
                                    staticClass: "text-left",
                                    attrs: { lg: "2" }
                                  },
                                  [
                                    index == 0
                                      ? _c("div", [
                                          _vm._v(
                                            "\n                Accordion\n              "
                                          )
                                        ])
                                      : _vm._e()
                                  ]
                                ),
                                _vm._v(" "),
                                _c(
                                  "b-col",
                                  {
                                    staticClass: "text-left",
                                    attrs: { lg: "10" }
                                  },
                                  [
                                    _c("div", { staticClass: "text-right" }, [
                                      _c(
                                        "svg",
                                        {
                                          staticClass: "bi bi-x-circle",
                                          staticStyle: { cursor: "pointer" },
                                          attrs: {
                                            xmlns: "http://www.w3.org/2000/svg",
                                            width: "16",
                                            height: "16",
                                            fill: "red",
                                            viewBox: "0 0 16 16"
                                          },
                                          on: {
                                            click: function($event) {
                                              return _vm.removeElement(
                                                "accordion",
                                                index
                                              )
                                            }
                                          }
                                        },
                                        [
                                          _c("path", {
                                            attrs: {
                                              d:
                                                "M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
                                            }
                                          }),
                                          _vm._v(" "),
                                          _c("path", {
                                            attrs: {
                                              d:
                                                "M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                                            }
                                          })
                                        ]
                                      )
                                    ]),
                                    _vm._v(" "),
                                    _c(
                                      "b-form-group",
                                      {
                                        attrs: {
                                          id: "accordionTitleLabel" + index,
                                          "label-cols-sm": "2",
                                          label: "Title",
                                          "label-for": "accordionTitle" + index
                                        }
                                      },
                                      [
                                        _c("b-form-input", {
                                          attrs: {
                                            id: "accordionTitle" + index,
                                            type: "text",
                                            placeholder: "Title",
                                            required: ""
                                          },
                                          model: {
                                            value: accordion["title"],
                                            callback: function($$v) {
                                              _vm.$set(accordion, "title", $$v)
                                            },
                                            expression: "accordion['title']"
                                          }
                                        })
                                      ],
                                      1
                                    ),
                                    _vm._v(" "),
                                    _c(
                                      "b-form-group",
                                      {
                                        attrs: {
                                          id: "accordionCaptionLabel" + index,
                                          "label-cols-sm": "2",
                                          label: "Caption",
                                          "label-for":
                                            "accordionCaption" + index
                                        }
                                      },
                                      [
                                        _c("ckeditor", {
                                          attrs: {
                                            id: "accordionCaptionLabel" + index,
                                            editor: "InLineEditor",
                                            config: _vm.editorConfig
                                          },
                                          model: {
                                            value: accordion["caption"],
                                            callback: function($$v) {
                                              _vm.$set(
                                                accordion,
                                                "caption",
                                                $$v
                                              )
                                            },
                                            expression: "accordion['caption']"
                                          }
                                        })
                                      ],
                                      1
                                    )
                                  ],
                                  1
                                )
                              ],
                              1
                            )
                          ],
                          1
                        )
                      }),
                      _vm._v(" "),
                      _c(
                        "b-col",
                        { staticClass: "ml-lg-auto", attrs: { lg: "10" } },
                        [
                          _c(
                            "b-button",
                            {
                              attrs: { type: "button", variant: "primary" },
                              on: {
                                click: function($event) {
                                  return _vm.addElement("accordion")
                                }
                              }
                            },
                            [_vm._v("\n            Add\n          ")]
                          )
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c("hr", {
                        staticStyle: { border: "1px solid lightgray" }
                      }),
                      _vm._v(" "),
                      _vm._l(_vm.form.photo_gallery, function(photo, index) {
                        return _c(
                          "div",
                          { key: "photo_gallery" + index },
                          [
                            _c("div", { staticClass: "text-right" }, [
                              _c(
                                "svg",
                                {
                                  directives: [
                                    {
                                      name: "b-tooltip",
                                      rawName: "v-b-tooltip.hover",
                                      modifiers: { hover: true }
                                    }
                                  ],
                                  staticClass: "bi bi-x-circle",
                                  staticStyle: { cursor: "pointer" },
                                  attrs: {
                                    title: "Delete",
                                    xmlns: "http://www.w3.org/2000/svg",
                                    width: "16",
                                    height: "16",
                                    fill: "red",
                                    viewBox: "0 0 16 16"
                                  },
                                  on: {
                                    click: function($event) {
                                      return _vm.removeElement(
                                        "photo_gallery",
                                        index
                                      )
                                    }
                                  }
                                },
                                [
                                  _c("path", {
                                    attrs: {
                                      d:
                                        "M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("path", {
                                    attrs: {
                                      d:
                                        "M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                                    }
                                  })
                                ]
                              )
                            ]),
                            _vm._v(" "),
                            _c(
                              "b-row",
                              [
                                _c(
                                  "b-col",
                                  {
                                    staticClass: "text-center",
                                    attrs: { cols: "2" }
                                  },
                                  [
                                    index == 0
                                      ? _c("div", [
                                          _vm._v(
                                            "\n                Photo Gallery\n              "
                                          )
                                        ])
                                      : _vm._e()
                                  ]
                                ),
                                _vm._v(" "),
                                _c(
                                  "b-col",
                                  {
                                    staticClass: "text-left",
                                    attrs: { cols: "4" }
                                  },
                                  [
                                    _c(
                                      "label",
                                      {
                                        staticClass: "container",
                                        attrs: { for: "photo_gallery" + index }
                                      },
                                      [
                                        _c(
                                          "div",
                                          {
                                            directives: [
                                              {
                                                name: "show",
                                                rawName: "v-show",
                                                value: photo["image"],
                                                expression: "photo['image']"
                                              }
                                            ]
                                          },
                                          [
                                            _c("img", {
                                              staticClass:
                                                "img-thumbnail image",
                                              attrs: { src: photo["image"] }
                                            })
                                          ]
                                        ),
                                        _vm._v(" "),
                                        _c(
                                          "div",
                                          {
                                            directives: [
                                              {
                                                name: "show",
                                                rawName: "v-show",
                                                value: photo["image"],
                                                expression: "photo['image']"
                                              }
                                            ],
                                            staticClass: "middle"
                                          },
                                          [
                                            _c("div", { staticClass: "text" }, [
                                              _vm._v("Change")
                                            ])
                                          ]
                                        ),
                                        _vm._v(" "),
                                        _c("div")
                                      ]
                                    ),
                                    _vm._v(" "),
                                    _c("b-form-file", {
                                      directives: [
                                        {
                                          name: "show",
                                          rawName: "v-show",
                                          value: !photo["image"],
                                          expression: "!photo['image']"
                                        }
                                      ],
                                      attrs: {
                                        id: "photo_gallery" + index,
                                        accept: ".jpeg, .jpg",
                                        state: Boolean(photo["image"]),
                                        placeholder:
                                          "Choose a file or drop it here...",
                                        "drop-placeholder": "Drop file here...",
                                        "data-index": index,
                                        "data-type": "photo"
                                      },
                                      on: { change: _vm.showPhoto }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c(
                                  "b-col",
                                  {
                                    staticClass: "text-left",
                                    attrs: { lg: "6" }
                                  },
                                  [
                                    _c(
                                      "b-form-group",
                                      {
                                        attrs: {
                                          id: "photoTitleLabel" + index,
                                          "label-cols-sm": "2",
                                          label: "Title",
                                          "label-for": "photoTitle" + index
                                        }
                                      },
                                      [
                                        _c("b-form-input", {
                                          attrs: {
                                            id: "photoTitle" + index,
                                            type: "text",
                                            placeholder: "Title",
                                            required: ""
                                          },
                                          model: {
                                            value: photo["title"],
                                            callback: function($$v) {
                                              _vm.$set(photo, "title", $$v)
                                            },
                                            expression: "photo['title']"
                                          }
                                        })
                                      ],
                                      1
                                    ),
                                    _vm._v(" "),
                                    _c(
                                      "b-form-group",
                                      {
                                        attrs: {
                                          id: "photoCaptionLabel" + index,
                                          "label-cols-sm": "2",
                                          label: "Caption",
                                          "label-for": "photoCaption" + index
                                        }
                                      },
                                      [
                                        _c("b-form-input", {
                                          attrs: {
                                            id: "photoCaption" + index,
                                            type: "text",
                                            placeholder: "Caption",
                                            required: ""
                                          },
                                          model: {
                                            value: photo["caption"],
                                            callback: function($$v) {
                                              _vm.$set(photo, "caption", $$v)
                                            },
                                            expression: "photo['caption']"
                                          }
                                        })
                                      ],
                                      1
                                    )
                                  ],
                                  1
                                )
                              ],
                              1
                            )
                          ],
                          1
                        )
                      }),
                      _vm._v(" "),
                      _c(
                        "b-col",
                        { staticClass: "ml-lg-auto", attrs: { lg: "10" } },
                        [
                          _c(
                            "b-button",
                            {
                              attrs: { type: "button", variant: "primary" },
                              on: {
                                click: function($event) {
                                  return _vm.addElement("photo_gallery")
                                }
                              }
                            },
                            [_vm._v("\n            Add\n          ")]
                          )
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c("hr", {
                        staticStyle: { border: "1px solid lightgray" }
                      }),
                      _vm._v(" "),
                      _vm._l(_vm.form.wide_gallery, function(wide, index) {
                        return _c(
                          "div",
                          { key: "wide_gallery" + index },
                          [
                            _c("div", { staticClass: "text-right" }, [
                              _c(
                                "svg",
                                {
                                  directives: [
                                    {
                                      name: "b-tooltip",
                                      rawName: "v-b-tooltip.hover",
                                      modifiers: { hover: true }
                                    }
                                  ],
                                  staticClass: "bi bi-x-circle",
                                  staticStyle: { cursor: "pointer" },
                                  attrs: {
                                    title: "Delete",
                                    xmlns: "http://www.w3.org/2000/svg",
                                    width: "16",
                                    height: "16",
                                    fill: "red",
                                    viewBox: "0 0 16 16"
                                  },
                                  on: {
                                    click: function($event) {
                                      return _vm.removeElement(
                                        "wide_gallery",
                                        index
                                      )
                                    }
                                  }
                                },
                                [
                                  _c("path", {
                                    attrs: {
                                      d:
                                        "M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("path", {
                                    attrs: {
                                      d:
                                        "M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                                    }
                                  })
                                ]
                              )
                            ]),
                            _vm._v(" "),
                            _c(
                              "b-row",
                              [
                                _c(
                                  "b-col",
                                  {
                                    staticClass: "text-center",
                                    attrs: { cols: "2" }
                                  },
                                  [
                                    index == 0
                                      ? _c("div", [
                                          _vm._v(
                                            "\n                Wide Gallery\n              "
                                          )
                                        ])
                                      : _vm._e()
                                  ]
                                ),
                                _vm._v(" "),
                                _c(
                                  "b-col",
                                  {
                                    staticClass: "text-left",
                                    attrs: { cols: "4" }
                                  },
                                  [
                                    _c(
                                      "label",
                                      {
                                        staticClass: "container",
                                        attrs: { for: "wide_gallery" + index }
                                      },
                                      [
                                        _c(
                                          "div",
                                          {
                                            directives: [
                                              {
                                                name: "show",
                                                rawName: "v-show",
                                                value: wide["image"],
                                                expression: "wide['image']"
                                              }
                                            ]
                                          },
                                          [
                                            _c("img", {
                                              staticClass:
                                                "img-thumbnail image",
                                              attrs: { src: wide["image"] }
                                            })
                                          ]
                                        ),
                                        _vm._v(" "),
                                        _c(
                                          "div",
                                          {
                                            directives: [
                                              {
                                                name: "show",
                                                rawName: "v-show",
                                                value: wide["image"],
                                                expression: "wide['image']"
                                              }
                                            ],
                                            staticClass: "middle"
                                          },
                                          [
                                            _c("div", { staticClass: "text" }, [
                                              _vm._v("Change")
                                            ])
                                          ]
                                        )
                                      ]
                                    ),
                                    _vm._v(" "),
                                    _c("b-form-file", {
                                      directives: [
                                        {
                                          name: "show",
                                          rawName: "v-show",
                                          value: !wide["image"],
                                          expression: "!wide['image']"
                                        }
                                      ],
                                      attrs: {
                                        id: "wide_gallery" + index,
                                        accept: ".jpeg, .jpg",
                                        state: Boolean(wide["image"]),
                                        placeholder:
                                          "Choose a file or drop it here...",
                                        "drop-placeholder": "Drop file here...",
                                        "data-index": index,
                                        "data-type": "wide"
                                      },
                                      on: { change: _vm.showPhoto }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c(
                                  "b-col",
                                  {
                                    staticClass: "text-left",
                                    attrs: { lg: "6" }
                                  },
                                  [
                                    _c(
                                      "b-form-group",
                                      {
                                        attrs: {
                                          id: "wideTitleLabel" + index,
                                          "label-cols-sm": "2",
                                          label: "Title",
                                          "label-for": "wideTitle" + index
                                        }
                                      },
                                      [
                                        _c("b-form-input", {
                                          attrs: {
                                            id: "wideTitle" + index,
                                            type: "text",
                                            placeholder: "Title",
                                            required: ""
                                          },
                                          model: {
                                            value: wide["title"],
                                            callback: function($$v) {
                                              _vm.$set(wide, "title", $$v)
                                            },
                                            expression: "wide['title']"
                                          }
                                        })
                                      ],
                                      1
                                    ),
                                    _vm._v(" "),
                                    _c(
                                      "b-form-group",
                                      {
                                        attrs: {
                                          id: "wideCaptionLabel" + index,
                                          "label-cols-sm": "2",
                                          label: "Caption",
                                          "label-for": "wideCaption" + index
                                        }
                                      },
                                      [
                                        _c("b-form-input", {
                                          attrs: {
                                            id: "wideCaption" + index,
                                            type: "text",
                                            placeholder: "Caption",
                                            required: ""
                                          },
                                          model: {
                                            value: wide["caption"],
                                            callback: function($$v) {
                                              _vm.$set(wide, "caption", $$v)
                                            },
                                            expression: "wide['caption']"
                                          }
                                        })
                                      ],
                                      1
                                    )
                                  ],
                                  1
                                )
                              ],
                              1
                            )
                          ],
                          1
                        )
                      }),
                      _vm._v(" "),
                      _c(
                        "b-col",
                        { staticClass: "ml-lg-auto", attrs: { lg: "10" } },
                        [
                          _c(
                            "b-button",
                            {
                              attrs: { type: "button", variant: "primary" },
                              on: {
                                click: function($event) {
                                  return _vm.addElement("wide_gallery")
                                }
                              }
                            },
                            [_vm._v("\n            Add\n          ")]
                          )
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c("hr", {
                        staticStyle: { border: "1px solid lightgray" }
                      }),
                      _vm._v(" "),
                      _c(
                        "b-button",
                        { attrs: { type: "submit", variant: "primary" } },
                        [_vm._v("\n          Submit\n        ")]
                      ),
                      _vm._v(" "),
                      _c(
                        "b-button",
                        { attrs: { type: "reset", variant: "danger" } },
                        [_vm._v("\n          Reset\n        ")]
                      )
                    ],
                    2
                  )
                : _vm._e(),
              _vm._v(" "),
              _c(
                "b-card",
                { staticClass: "mt-3", attrs: { header: "Form Data Result" } },
                [_c("pre", { staticClass: "m-0" }, [_vm._v(_vm._s(_vm.$data))])]
              )
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