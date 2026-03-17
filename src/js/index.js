import "slick-carousel";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import $ from "jquery";
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

class HeaderMegaMenu {
  constructor(selector) {
    this.root = document.querySelector(selector);
    this.triggers = [];
    this.panels = [];
    this.activeKey = null;
    this.handleDocumentClick = this.handleDocumentClick.bind(this);
    this.handleKeydown = this.handleKeydown.bind(this);
  }

  init() {
    if (!this.root) return;

    this.triggers = Array.from(
      this.root.querySelectorAll("[data-mega-trigger]"),
    );
    this.panels = Array.from(this.root.querySelectorAll("[data-mega-panel]"));

    this.triggers.forEach((trigger) => {
      trigger.addEventListener("click", () => {
        const key = trigger.dataset.megaTrigger;
        if (this.activeKey === key) {
          this.close();
          return;
        }
        this.open(key);
      });
    });

    document.addEventListener("click", this.handleDocumentClick);
    document.addEventListener("keydown", this.handleKeydown);
  }

  open(key) {
    this.activeKey = key;
    this.root.dataset.megaState = key;

    this.triggers.forEach((trigger) => {
      const isActive = trigger.dataset.megaTrigger === key;
      trigger.classList.toggle("is-active", isActive);
      trigger.setAttribute("aria-expanded", String(isActive));
    });

    this.panels.forEach((panel) => {
      const isActive = panel.dataset.megaPanel === key;
      panel.hidden = !isActive;
      panel.classList.toggle("is-active", isActive);
    });
  }

  close() {
    this.activeKey = null;
    delete this.root.dataset.megaState;

    this.triggers.forEach((trigger) => {
      trigger.classList.remove("is-active");
      trigger.setAttribute("aria-expanded", "false");
    });

    this.panels.forEach((panel) => {
      panel.hidden = true;
      panel.classList.remove("is-active");
    });
  }

  handleDocumentClick(event) {
    if (!this.root.contains(event.target)) {
      this.close();
    }
  }

  handleKeydown(event) {
    if (event.key === "Escape") {
      this.close();
    }
  }
}

class HamburgerChildMenu {
  constructor(selector) {
    this.root = document.querySelector(selector);
    this.triggers = [];
    this.panels = [];
  }

  init() {
    if (!this.root) return;

    this.triggers = Array.from(
      this.root.querySelectorAll("[data-hamburger-child]"),
    );
    this.panels = Array.from(
      this.root.querySelectorAll("[data-hamburger-panel]"),
    );

    this.triggers.forEach((trigger) => {
      trigger.addEventListener("click", () => {
        const key = trigger.dataset.hamburgerChild;
        const isActive = trigger.classList.contains("is-active");
        if (isActive) {
          this.closeAll();
          return;
        }
        this.open(key);
      });
    });

    this.root.addEventListener("hamburger:close", () => {
      this.closeAll();
    });
  }

  open(key) {
    this.triggers.forEach((trigger) => {
      const isActive = trigger.dataset.hamburgerChild === key;
      trigger.classList.toggle("is-active", isActive);
      trigger.setAttribute("aria-expanded", String(isActive));
    });

    this.panels.forEach((panel) => {
      const isActive = panel.dataset.hamburgerPanel === key;
      panel.hidden = !isActive;
      panel.classList.toggle("is-active", isActive);
    });
  }

  closeAll() {
    this.triggers.forEach((trigger) => {
      trigger.classList.remove("is-active");
      trigger.setAttribute("aria-expanded", "false");
    });

    this.panels.forEach((panel) => {
      panel.hidden = true;
      panel.classList.remove("is-active");
    });
  }
}

class RankingSlick {
  constructor(selector) {
    this.root = document.querySelector(selector);
    this.$slider = null;
  }

  init() {
    if (!this.root) return;

    this.$slider = $(this.root);
    this.bind();
    this.toggle();
  }

  bind() {
    window.addEventListener("resize", () => {
      this.toggle();
    });
  }

  toggle() {
    if (!this.$slider) return;

    const shouldEnable = window.innerWidth <= 1280;
    const isInitialized = this.$slider.hasClass("slick-initialized");

    if (shouldEnable && !isInitialized) {
      this.$slider.slick({
        arrows: false,
        dots: false,
        infinite: false,
        slidesToScroll: 1,
        slidesToShow: 1,
        speed: 500,
        swipeToSlide: true,
        variableWidth: true,
      });
      return;
    }

    if (!shouldEnable && isInitialized) {
      this.$slider.slick("unslick");
    }
  }
}

class MvFadeSlick {
  constructor(selector) {
    this.root = document.querySelector(selector);
    this.$slider = null;
  }

  init() {
    if (!this.root) return;

    this.$slider = $(this.root);

    if (this.$slider.hasClass("slick-initialized")) return;

    this.$slider.slick({
      arrows: false,
      autoplay: true,
      autoplaySpeed: 4000,
      dots: false,
      fade: true,
      infinite: true,
      pauseOnFocus: false,
      pauseOnHover: false,
      speed: 1200,
      swipe: false,
    });
  }
}

class ServiceImageHover {
  constructor(selector) {
    this.root = document.querySelector(selector);
    this.items = [];
    this.images = [];
  }

  init() {
    if (!this.root) return;

    this.items = Array.from(this.root.querySelectorAll("[data-service-key]"));
    this.images = Array.from(
      this.root.querySelectorAll("[data-service-image]"),
    );

    if (!this.items.length || !this.images.length) return;

    this.items.forEach((item) => {
      const key = item.dataset.serviceKey;
      item.addEventListener("mouseenter", () => {
        this.open(key);
      });
      item.addEventListener("focus", () => {
        this.open(key);
      });
    });
  }

  open(key) {
    this.items.forEach((item) => {
      item.classList.toggle("is-active", item.dataset.serviceKey === key);
    });

    this.images.forEach((image) => {
      image.classList.toggle("is-active", image.dataset.serviceImage === key);
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
const headerMegaMenu = new HeaderMegaMenu("[data-header-mega]");
const hamburgerChildMenu = new HamburgerChildMenu(".hamburger__menu");
const rankingSlick = new RankingSlick(".slider-wrapper");
const mvFadeSlick = new MvFadeSlick(".mv__image");
const serviceImageHover = new ServiceImageHover(".service");

hamburger.init();
tirePriceTabs.init();
priceGuideTabs.init();
headerMegaMenu.init();
hamburgerChildMenu.init();
rankingSlick.init();
mvFadeSlick.init();
serviceImageHover.init();
