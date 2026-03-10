// import 'slick-carousel';
// import 'slick-carousel/slick/slick.css';
// import 'slick-carousel/slick/slick-theme.css';
import { Hamburger } from "./hamburger";

const hamburger = new Hamburger({
  target: "#hamburger",
  navigation: ".hamburger__menu",
});

hamburger.init();
