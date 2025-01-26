import "./bootstrap";

import Alpine from "alpinejs";
import "aos/dist/aos.css";
import AOS from "aos";
import intersect from '@alpinejs/intersect'
 
Alpine.plugin(intersect)
window.Alpine = Alpine;

Alpine.start();
AOS.init();

// import Swiper bundle with all modules installed
import Swiper from "swiper/bundle";

// import styles bundle
import "swiper/css/bundle";

// init Swiper:
// const swiper = new Swiper();
