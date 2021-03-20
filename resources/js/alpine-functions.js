function menu() {
    return {
        show: false,
        open: function () {
            this.show = true;
        },
        close: function () {
            this.show = false;
        },
        isOpen: function () {
            return this.show === true;
        },
    };
}
window.menu = menu;

function educationListen() {
    return {
        isEditing: false,
        openEdit: function () {
            this.isEditing = true;
        },
        closeEdit: function () {
            this.isEditing = false;
        },
        deleteItem: function (id) {
            confirmAction("eliminarcarrera", id);
        },
    };
}
window.educationListen = educationListen;

function languageListen() {
    return {
        deleteItem: function (id) {
            confirmAction("refreshLanguage", id);
        },
    };
}
window.languageListen = languageListen;
