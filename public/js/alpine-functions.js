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

function togleWireClass(key, elementId) {
  var tag = document.getElementById(elementId);
  tag.classList.toggle("tagSelected");
}

window.togleWireClass = togleWireClass;

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

function abilityListen() {
  return {
    tagId: null,
    habilidades: true,
    togleTagClass: function togleTagClass(key, event) {
      console.log("en el togle tag class");
      var tag = document.getElementById(event.target.id);
      console.log(tag);
      tag.classList.toggle("tagSelected");
      Livewire.emit("onemoreability", key);
    },
    togleTagRemoveClass: function togleTagRemoveClass(key, event) {
      console.log("en el remove tag class");
      var tag = document.getElementById(event.target.id);
      console.log(tag);
      tag.classList.toggle("tagRemoveSelected");
      Livewire.emit("onelessability", key);
    }
  };
}

window.abilityListen = abilityListen;

function subareaListen() {
  return {
    tagId: null,
    habilidades: true,
    togleTagClass: function togleTagClass(key, event) {
      console.log("en el togle tag class");
      console.log(event);
      var tag = document.getElementById(event.target.id);
      console.log(tag);
      tag.classList.toggle("tagSelected");
      Livewire.emit("toggleSubareaModel", key);
    },
    togleTagRemoveClass: function togleTagRemoveClass(key, event) {
      console.log("en el remove tag class");
      var tag = document.getElementById(event.target.id);
      console.log(tag);
      tag.classList.toggle("tagRemoveSelected");
      Livewire.emit("onelessability", key);
    }
  };
}

window.subareaListen = subareaListen;

function ServiceTagListen() {
  return {
    tagId: null,
    habilidades: true,
    togleTagClass: function togleTagClass(key, event) {
      console.log("en el togle tag class");
      var tag = document.getElementById(event.target.id);
      console.log(tag);
      tag.classList.toggle("tagSelected");
      Livewire.emit("toggletag", key);
    }
  };
}

window.ServiceTagListen = ServiceTagListen;

function descripcion() {
  return {
    quillShow: function quillShow() {
      var delta = quill.container.firstChild.innerHTML;
      Livewire.emit("servicedescription", delta);
    }
  };
}

window.descripcion = descripcion;
/******/ })()
;