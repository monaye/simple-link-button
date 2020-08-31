Nova.booting((Vue, router, store) => {
  Vue.component('index-simple-link-button', require('./components/IndexField'))
  Vue.component('detail-simple-link-button', require('./components/DetailField'))
  Vue.component('form-simple-link-button', require('./components/FormField'))
})
