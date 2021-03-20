/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************!*\
  !*** ./resources/js/alpine-functions.js ***!
  \******************************************/
function menu() {
  return {
    show: false,
    open: function open() {
      this.show = true;
    },
    close: function close() {
      this.show = false;
    },
    isOpen: function isOpen() {
      return this.show === true;
    }
  };
}

window.menu = menu;

function educationListen() {
  return {
    isEditing: false,
    openEdit: function openEdit() {
      this.isEditing = true;
    },
    closeEdit: function closeEdit() {
      this.isEditing = false;
    },
    deleteItem: function deleteItem(id) {
      confirmAction("eliminarcarrera", id);
    }
  };
}

window.educationListen = educationListen;

function languageListen() {
  return {
    deleteItem: function deleteItem(id) {
      confirmAction("refreshLanguage", id);
    }
  };
}

window.languageListen = languageListen;
/******/ })()
;