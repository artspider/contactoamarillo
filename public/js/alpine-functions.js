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

function menu2() {
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

window.menu2 = menu2;

function togleWireClass(key, elementId) {
  var tag = document.getElementById(elementId);
  console.log('en el togleWireClass');
  console.log(tag);
  tag.classList.remove('tagSelected');
  tag.classList.add('bg-gray-600');
  tag.classList.add('text-gray-100');
}

window.togleWireClass = togleWireClass;

function initDesc(desc) {
  var tag = document.getElementById('wysiwyg');
  tag.contentDocument.body.innerHTML = desc;
}

window.initDesc = initDesc;

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
      confirmAction('eliminarcarrera', id);
    }
  };
}

window.educationListen = educationListen;

function languageListen() {
  return {
    deleteItem: function deleteItem(id) {
      confirmAction('refreshLanguage', id);
    }
  };
}

window.languageListen = languageListen;

function abilityListen() {
  return {
    tagId: null,
    habilidades: true,
    togleTagClass: function togleTagClass(key, event) {
      console.log('en el togle tag class');
      var tag = document.getElementById(event.target.id);
      console.log(tag);
      tag.classList.toggle('tagSelected');
      Livewire.emit('onemoreability', key);
    },
    togleTagRemoveClass: function togleTagRemoveClass(key, event) {
      console.log('en el remove tag class');
      var tag = document.getElementById(event.target.id);
      console.log(tag);
      tag.classList.toggle('tagRemoveSelected');
      Livewire.emit('onelessability', key);
    }
  };
}

window.abilityListen = abilityListen;

function subareaListen() {
  return {
    tagId: null,
    habilidades: true,
    togleTagClass: function togleTagClass(key, event) {
      console.log('en el togle tag class');
      console.log(event);
      var tag = document.getElementById(event.target.id);
      console.log(tag);
      tag.classList.toggle('tagSelected');
      Livewire.emit('toggleSubareaModel', key);
    },
    togleTagRemoveClass: function togleTagRemoveClass(key, event) {
      console.log('en el remove tag class');
      var tag = document.getElementById(event.target.id);
      console.log(tag);
      tag.classList.toggle('tagRemoveSelected');
      Livewire.emit('onelessability', key);
    }
  };
}

window.subareaListen = subareaListen;

function ServiceTagListen() {
  return {
    tagId: null,
    habilidades: true,
    togleTagClass: function togleTagClass(key, event) {
      console.log('en el togle tag class');
      var tag = document.getElementById(event.target.id);
      console.log(tag);
      tag.classList.toggle('bg-gray-600');
      tag.classList.toggle('text-gray-100');
      tag.classList.toggle('tagSelected');
      Livewire.emit('toggletag', key);
    }
  };
}

window.ServiceTagListen = ServiceTagListen;

function CertificationListen() {
  return {
    tagId: null,
    habilidades: true,
    prueba: function prueba(key, event) {
      alert('en el CertificationListen');
    }
  };
}

window.CertificationListen = CertificationListen;

function descripcion() {
  return {
    wysiwyg: null,
    init: function init(el) {
      // Get el
      this.wysiwyg = el; // Add CSS

      this.wysiwyg.contentDocument.querySelector('head').innerHTML += "<style>\n        *, ::after, ::before {box-sizing: border-box;}\n        :root {tab-size: 4;}\n        html {line-height: 1.15;text-size-adjust: 100%;}\n        body {margin: 0px; padding: 1rem 0.5rem;}\n        body {font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\";}\n        </style>";
      this.wysiwyg.contentDocument.body.innerHTML += "\n        <h1>Hello World!</h1>\n        <p>Welcome to the pure AlpineJS and Tailwind WYSIWYG.</p>\n        "; // Make editable

      this.wysiwyg.contentDocument.designMode = 'on';
      Livewire.emit('servicedescriptionInit');
    },
    format: function format(cmd, param) {
      this.wysiwyg.contentDocument.execCommand(cmd, !1, param || null);
    },
    saveDesc: function saveDesc() {
      console.log('En el save description');
      Livewire.emit('servicedescription', this.wysiwyg.contentDocument.body.innerHTML);
    }
  };
}

window.descripcion = descripcion;

function input() {
  return {
    open: false,
    focusInput: function focusInput(event) {
      var inputSear = event.target;
      console.log(inputSear);

      if (inputSear.classList.contains('inactivo')) {
        inputSear.classList.remove('inactivo');
        inputSear.classList.add('activo');
      }

      console.log('Diste click adentro');
    },
    focusLost: function focusLost(event) {
      var inputSear = event.target;
      console.log(inputSear);

      if (inputSear.classList.contains('activo')) {
        inputSear.classList.remove('activo');
        inputSear.classList.add('inactivo');
      }
    }
  };
}

window.input = input;
/******/ })()
;