function menu() {
  return {
    show: false,
    open: function () {
      this.show = true
    },
    close: function () {
      this.show = false
    },
    isOpen: function () {
      return this.show === true
    },
  }
}
window.menu = menu

function menu2() {
  return {
    show: false,
    open: function open() {
      this.show = true
    },
    close: function close() {
      this.show = false
    },
    isOpen: function isOpen() {
      return this.show === true
    },
  }
}

window.menu2 = menu2

function togleWireClass(key, elementId) {
  var tag = document.getElementById(elementId)
  tag.classList.toggle('tagSelected')
}
window.togleWireClass = togleWireClass

function educationListen() {
  return {
    isEditing: false,
    openEdit: function () {
      this.isEditing = true
    },
    closeEdit: function () {
      this.isEditing = false
    },
    deleteItem: function (id) {
      confirmAction('eliminarcarrera', id)
    },
  }
}
window.educationListen = educationListen

function languageListen() {
  return {
    deleteItem: function (id) {
      confirmAction('refreshLanguage', id)
    },
  }
}
window.languageListen = languageListen

function abilityListen() {
  return {
    tagId: null,
    habilidades: true,
    togleTagClass: function (key, event) {
      console.log('en el togle tag class')
      var tag = document.getElementById(event.target.id)
      console.log(tag)
      tag.classList.toggle('tagSelected')
      Livewire.emit('onemoreability', key)
    },
    togleTagRemoveClass: function (key, event) {
      console.log('en el remove tag class')
      var tag = document.getElementById(event.target.id)
      console.log(tag)
      tag.classList.toggle('tagRemoveSelected')
      Livewire.emit('onelessability', key)
    },
  }
}
window.abilityListen = abilityListen

function subareaListen() {
  return {
    tagId: null,
    habilidades: true,
    togleTagClass: function (key, event) {
      console.log('en el togle tag class')
      console.log(event)
      var tag = document.getElementById(event.target.id)
      console.log(tag)
      tag.classList.toggle('tagSelected')
      Livewire.emit('toggleSubareaModel', key)
    },
    togleTagRemoveClass: function (key, event) {
      console.log('en el remove tag class')
      var tag = document.getElementById(event.target.id)
      console.log(tag)
      tag.classList.toggle('tagRemoveSelected')
      Livewire.emit('onelessability', key)
    },
  }
}
window.subareaListen = subareaListen

function ServiceTagListen() {
  return {
    tagId: null,
    habilidades: true,
    togleTagClass: function (key, event) {
      console.log('en el togle tag class')
      var tag = document.getElementById(event.target.id)
      console.log(tag)
      tag.classList.toggle('tagSelected')
      Livewire.emit('toggletag', key)
    },
  }
}
window.ServiceTagListen = ServiceTagListen

function CertificationListen() {
  return {
    tagId: null,
    habilidades: true,
    prueba: function (key, event) {
      alert('en el CertificationListen')
    },
  }
}
window.CertificationListen = CertificationListen

function descripcion() {
  return {
    quillShow: function () {
      var delta = quill.container.firstChild.innerHTML
      console.log(delta)
      Livewire.emit('servicedescription', delta)
    },
  }
}
window.descripcion = descripcion
function input() {
  return {
    open: false,
    focusInput: function (event) {
      var inputSear = event.target
      console.log(inputSear)
      if (inputSear.classList.contains('inactivo')) {
        inputSear.classList.remove('inactivo')
        inputSear.classList.add('activo')
      }
      console.log('Diste click adentro')
    },
    focusLost: function (event) {
      var inputSear = event.target
      console.log(inputSear)
      if (inputSear.classList.contains('activo')) {
        inputSear.classList.remove('activo')
        inputSear.classList.add('inactivo')
      }
    },
  }
}
window.input = input


