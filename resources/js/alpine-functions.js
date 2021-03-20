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
