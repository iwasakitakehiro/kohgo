// import "slick-carousel";
// import "slick-carousel/slick/slick.css";
// import "slick-carousel/slick/slick-theme.css";
import { Hamburger } from "./hamburger";

class PanelTabs {
  constructor(selector, options = {}) {
    this.root = document.querySelector(selector);
    this.buttonSelector = options.buttonSelector ?? "[data-panel-tab]";
    this.panelSelector = options.panelSelector ?? "[data-panel-content]";
    this.buttonKey = options.buttonKey ?? "panelTab";
    this.panelKey = options.panelKey ?? "panelContent";
    this.stateKey = options.stateKey ?? null;
    this.buttons = [];
    this.panels = [];
  }

  init() {
    if (!this.root) return;

    this.buttons = Array.from(this.root.querySelectorAll(this.buttonSelector));
    this.panels = Array.from(this.root.querySelectorAll(this.panelSelector));

    this.buttons.forEach((button) => {
      button.addEventListener("click", () => {
        this.open(button.dataset[this.buttonKey]);
      });
    });
  }

  open(key) {
    if (this.stateKey) {
      this.root.dataset[this.stateKey] = key;
    }

    this.buttons.forEach((button) => {
      const isActive = button.dataset[this.buttonKey] === key;
      button.classList.toggle("is-active", isActive);
      button.setAttribute("aria-selected", String(isActive));
    });

    this.panels.forEach((panel) => {
      const isActive = panel.dataset[this.panelKey] === key;
      panel.classList.toggle("is-active", isActive);
      panel.hidden = !isActive;
    });
  }
}

const hamburger = new Hamburger({
  target: "#hamburger",
  navigation: ".hamburger__menu",
});

const tirePriceTabs = new PanelTabs("[data-tire-price-tabs]", {
  buttonSelector: "[data-tire-tab]",
  panelSelector: "[data-tire-panel]",
  buttonKey: "tireTab",
  panelKey: "tirePanel",
  stateKey: "activeTheme",
});

const priceGuideTabs = new PanelTabs("[data-panel-tabs]");

hamburger.init();
tirePriceTabs.init();
priceGuideTabs.init();
