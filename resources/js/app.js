require('./bootstrap');

import Vue from 'vue'

import carousel from '@/js/component/first_Template/carouselComponent'

const vm1 = new Vue({
  el: '#home-app',
  components: {
    carousel,
    
  }
})