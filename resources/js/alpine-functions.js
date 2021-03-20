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
            confirmAction(id);
        },
    };
}
window.educationListen = educationListen;
