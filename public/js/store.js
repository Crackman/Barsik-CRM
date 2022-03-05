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

eval("window.addEventListener(\"product-saved\", function () {\n  $(\"#product-form-modal\").modal('hide');\n  $('.modal-backdrop').remove();\n});\nvar product_modal = document.getElementById('product-modal');\n\nif (product_modal) {\n  product_modal.addEventListener('hidden.bs.modal', function () {\n    Livewire.emit('resetForm');\n  });\n}\n\nwindow.addEventListener(\"count-hide\", function () {\n  $(\"#count-modal\").modal('hide');\n  $('.modal-backdrop').remove();\n});\nLivewire.on(\"showModalProduct\", function () {\n  $(\"#product-modal\").modal('show');\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc3RvcmUvc3RvcmUuanM/ZGNmNiJdLCJuYW1lcyI6WyJ3aW5kb3ciLCJhZGRFdmVudExpc3RlbmVyIiwiJCIsIm1vZGFsIiwicmVtb3ZlIiwicHJvZHVjdF9tb2RhbCIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJMaXZld2lyZSIsImVtaXQiLCJvbiJdLCJtYXBwaW5ncyI6IkFBQUFBLE1BQU0sQ0FBQ0MsZ0JBQVAsQ0FBd0IsZUFBeEIsRUFBeUMsWUFBTTtBQUMzQ0MsRUFBQUEsQ0FBQyxDQUFDLHFCQUFELENBQUQsQ0FBeUJDLEtBQXpCLENBQStCLE1BQS9CO0FBQ0FELEVBQUFBLENBQUMsQ0FBQyxpQkFBRCxDQUFELENBQXFCRSxNQUFyQjtBQUNILENBSEQ7QUFLQSxJQUFJQyxhQUFhLEdBQUdDLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixlQUF4QixDQUFwQjs7QUFDQSxJQUFJRixhQUFKLEVBQ0E7QUFDSUEsRUFBQUEsYUFBYSxDQUFDSixnQkFBZCxDQUErQixpQkFBL0IsRUFBa0QsWUFBWTtBQUMxRE8sSUFBQUEsUUFBUSxDQUFDQyxJQUFULENBQWMsV0FBZDtBQUNILEdBRkQ7QUFHSDs7QUFFRFQsTUFBTSxDQUFDQyxnQkFBUCxDQUF3QixZQUF4QixFQUFzQyxZQUFNO0FBQ3hDQyxFQUFBQSxDQUFDLENBQUMsY0FBRCxDQUFELENBQWtCQyxLQUFsQixDQUF3QixNQUF4QjtBQUNBRCxFQUFBQSxDQUFDLENBQUMsaUJBQUQsQ0FBRCxDQUFxQkUsTUFBckI7QUFDSCxDQUhEO0FBS0FJLFFBQVEsQ0FBQ0UsRUFBVCxDQUFZLGtCQUFaLEVBQWdDLFlBQU07QUFDbENSLEVBQUFBLENBQUMsQ0FBQyxnQkFBRCxDQUFELENBQW9CQyxLQUFwQixDQUEwQixNQUExQjtBQUNILENBRkQiLCJzb3VyY2VzQ29udGVudCI6WyJ3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcihcInByb2R1Y3Qtc2F2ZWRcIiwgKCkgPT4ge1xyXG4gICAgJChcIiNwcm9kdWN0LWZvcm0tbW9kYWxcIikubW9kYWwoJ2hpZGUnKTtcclxuICAgICQoJy5tb2RhbC1iYWNrZHJvcCcpLnJlbW92ZSgpO1xyXG59KTtcclxuXHJcbnZhciBwcm9kdWN0X21vZGFsID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3Byb2R1Y3QtbW9kYWwnKTtcclxuaWYgKHByb2R1Y3RfbW9kYWwpXHJcbntcclxuICAgIHByb2R1Y3RfbW9kYWwuYWRkRXZlbnRMaXN0ZW5lcignaGlkZGVuLmJzLm1vZGFsJywgZnVuY3Rpb24gKCkge1xyXG4gICAgICAgIExpdmV3aXJlLmVtaXQoJ3Jlc2V0Rm9ybScpO1xyXG4gICAgfSk7XHJcbn1cclxuXHJcbndpbmRvdy5hZGRFdmVudExpc3RlbmVyKFwiY291bnQtaGlkZVwiLCAoKSA9PiB7XHJcbiAgICAkKFwiI2NvdW50LW1vZGFsXCIpLm1vZGFsKCdoaWRlJyk7XHJcbiAgICAkKCcubW9kYWwtYmFja2Ryb3AnKS5yZW1vdmUoKTtcclxufSk7XHJcblxyXG5MaXZld2lyZS5vbihcInNob3dNb2RhbFByb2R1Y3RcIiwgKCkgPT4ge1xyXG4gICAgJChcIiNwcm9kdWN0LW1vZGFsXCIpLm1vZGFsKCdzaG93Jyk7XHJcbn0pOyJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc3RvcmUvc3RvcmUuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/store/store.js\n");

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