class Hamburger {
  constructor({ target, navigation }) {
    this.button = document.querySelector(target);
    this.navigation = document.querySelector(navigation);
    this.isOpen = false;
  }

  init() {
    if (!this.button) return;
    this.toggle();
  }

  toggle() {
    this.button.addEventListener("click", () => {
      if (!this.isOpen) {
        this.open();
      } else {
        this.close();
      }
    });
  }

  open() {
    this.navigation.classList.add("active");
    this.navigation.dispatchEvent(new CustomEvent("hamburger:open"));
    this.isOpen = true;
  }

  close() {
    this.navigation.classList.remove("active");
    this.navigation.dispatchEvent(new CustomEvent("hamburger:close"));
    this.isOpen = false;
  }
}

export { Hamburger };
