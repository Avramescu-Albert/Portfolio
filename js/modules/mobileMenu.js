import $ from 'jquery';

class MobileMenu {
  constructor() {
    this.menu = $(".menu-icon");
    this.overlayMenu = $(".disable");
    this.openButton = $(".icon");
    this.events();
  }

  events() {
    this.openButton.on("click", this.openMenu.bind(this));
  }

  openMenu() {
    this.openButton.toggleClass("-active");
    this.menu.toggleClass("active");
    this.overlayMenu.toggleClass("disable");
    $("body").addClass("body-no-scroll");
  }


}

export default MobileMenu;