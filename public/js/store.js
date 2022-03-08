/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/store/store.js":
/*!*************************************!*\
  !*** ./resources/js/store/store.js ***!
  \*************************************/
/***/ (() => {

eval("window.addEventListener(\"product-saved\", function () {\n  $(\"#product-form-modal\").modal('hide');\n  $('.modal-backdrop').remove();\n});\nwindow.addEventListener(\"count-saved\", function () {\n  $(\"#count-modal\").modal('hide');\n  $('.modal-backdrop').remove();\n});\nvar product_modal = document.getElementById('product-modal');\n\nif (product_modal) {\n  product_modal.addEventListener('hidden.bs.modal', function () {\n    Livewire.emitTo('store.product-form', 'resetForm');\n  });\n}\n\nvar count_modal = document.getElementById('count-modal');\n\nif (count_modal) {\n  count_modal.addEventListener('hidden.bs.modal', function () {\n    Livewire.emitTo('store.count-form', 'resetForm');\n  });\n}\n\nLivewire.on(\"showModalProduct\", function () {\n  $(\"#product-modal\").modal('show');\n});\nLivewire.on(\"showModalCount\", function () {\n  $(\"#count-modal\").modal('show');\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc3RvcmUvc3RvcmUuanM/ZGNmNiJdLCJuYW1lcyI6WyJ3aW5kb3ciLCJhZGRFdmVudExpc3RlbmVyIiwiJCIsIm1vZGFsIiwicmVtb3ZlIiwicHJvZHVjdF9tb2RhbCIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJMaXZld2lyZSIsImVtaXRUbyIsImNvdW50X21vZGFsIiwib24iXSwibWFwcGluZ3MiOiJBQUFBQSxNQUFNLENBQUNDLGdCQUFQLENBQXdCLGVBQXhCLEVBQXlDLFlBQU07QUFDM0NDLEVBQUFBLENBQUMsQ0FBQyxxQkFBRCxDQUFELENBQXlCQyxLQUF6QixDQUErQixNQUEvQjtBQUNBRCxFQUFBQSxDQUFDLENBQUMsaUJBQUQsQ0FBRCxDQUFxQkUsTUFBckI7QUFDSCxDQUhEO0FBS0FKLE1BQU0sQ0FBQ0MsZ0JBQVAsQ0FBd0IsYUFBeEIsRUFBdUMsWUFBTTtBQUN6Q0MsRUFBQUEsQ0FBQyxDQUFDLGNBQUQsQ0FBRCxDQUFrQkMsS0FBbEIsQ0FBd0IsTUFBeEI7QUFDQUQsRUFBQUEsQ0FBQyxDQUFDLGlCQUFELENBQUQsQ0FBcUJFLE1BQXJCO0FBQ0gsQ0FIRDtBQUtBLElBQUlDLGFBQWEsR0FBR0MsUUFBUSxDQUFDQyxjQUFULENBQXdCLGVBQXhCLENBQXBCOztBQUNBLElBQUlGLGFBQUosRUFDQTtBQUNJQSxFQUFBQSxhQUFhLENBQUNKLGdCQUFkLENBQStCLGlCQUEvQixFQUFrRCxZQUFZO0FBQzFETyxJQUFBQSxRQUFRLENBQUNDLE1BQVQsQ0FBZ0Isb0JBQWhCLEVBQXNDLFdBQXRDO0FBQ0gsR0FGRDtBQUdIOztBQUVELElBQUlDLFdBQVcsR0FBR0osUUFBUSxDQUFDQyxjQUFULENBQXdCLGFBQXhCLENBQWxCOztBQUNBLElBQUlHLFdBQUosRUFDQTtBQUNJQSxFQUFBQSxXQUFXLENBQUNULGdCQUFaLENBQTZCLGlCQUE3QixFQUFnRCxZQUFZO0FBQ3hETyxJQUFBQSxRQUFRLENBQUNDLE1BQVQsQ0FBZ0Isa0JBQWhCLEVBQW1DLFdBQW5DO0FBQ0gsR0FGRDtBQUdIOztBQUVERCxRQUFRLENBQUNHLEVBQVQsQ0FBWSxrQkFBWixFQUFnQyxZQUFNO0FBQ2xDVCxFQUFBQSxDQUFDLENBQUMsZ0JBQUQsQ0FBRCxDQUFvQkMsS0FBcEIsQ0FBMEIsTUFBMUI7QUFDSCxDQUZEO0FBSUFLLFFBQVEsQ0FBQ0csRUFBVCxDQUFZLGdCQUFaLEVBQThCLFlBQU07QUFDaENULEVBQUFBLENBQUMsQ0FBQyxjQUFELENBQUQsQ0FBa0JDLEtBQWxCLENBQXdCLE1BQXhCO0FBQ0gsQ0FGRCIsInNvdXJjZXNDb250ZW50IjpbIndpbmRvdy5hZGRFdmVudExpc3RlbmVyKFwicHJvZHVjdC1zYXZlZFwiLCAoKSA9PiB7XHJcbiAgICAkKFwiI3Byb2R1Y3QtZm9ybS1tb2RhbFwiKS5tb2RhbCgnaGlkZScpO1xyXG4gICAgJCgnLm1vZGFsLWJhY2tkcm9wJykucmVtb3ZlKCk7XHJcbn0pO1xyXG5cclxud2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJjb3VudC1zYXZlZFwiLCAoKSA9PiB7XHJcbiAgICAkKFwiI2NvdW50LW1vZGFsXCIpLm1vZGFsKCdoaWRlJyk7XHJcbiAgICAkKCcubW9kYWwtYmFja2Ryb3AnKS5yZW1vdmUoKTtcclxufSk7XHJcblxyXG52YXIgcHJvZHVjdF9tb2RhbCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdwcm9kdWN0LW1vZGFsJyk7XHJcbmlmIChwcm9kdWN0X21vZGFsKVxyXG57XHJcbiAgICBwcm9kdWN0X21vZGFsLmFkZEV2ZW50TGlzdGVuZXIoJ2hpZGRlbi5icy5tb2RhbCcsIGZ1bmN0aW9uICgpIHtcclxuICAgICAgICBMaXZld2lyZS5lbWl0VG8oJ3N0b3JlLnByb2R1Y3QtZm9ybScsICdyZXNldEZvcm0nKTtcclxuICAgIH0pO1xyXG59XHJcblxyXG52YXIgY291bnRfbW9kYWwgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY291bnQtbW9kYWwnKTtcclxuaWYgKGNvdW50X21vZGFsKVxyXG57XHJcbiAgICBjb3VudF9tb2RhbC5hZGRFdmVudExpc3RlbmVyKCdoaWRkZW4uYnMubW9kYWwnLCBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgTGl2ZXdpcmUuZW1pdFRvKCdzdG9yZS5jb3VudC1mb3JtJywncmVzZXRGb3JtJyk7XHJcbiAgICB9KTtcclxufVxyXG5cclxuTGl2ZXdpcmUub24oXCJzaG93TW9kYWxQcm9kdWN0XCIsICgpID0+IHtcclxuICAgICQoXCIjcHJvZHVjdC1tb2RhbFwiKS5tb2RhbCgnc2hvdycpO1xyXG59KTtcclxuXHJcbkxpdmV3aXJlLm9uKFwic2hvd01vZGFsQ291bnRcIiwgKCkgPT4ge1xyXG4gICAgJChcIiNjb3VudC1tb2RhbFwiKS5tb2RhbCgnc2hvdycpO1xyXG59KTtcclxuIl0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9zdG9yZS9zdG9yZS5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/store/store.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/store/store.js"]();
/******/ 	
/******/ })()
;